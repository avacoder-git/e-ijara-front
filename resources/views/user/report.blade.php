@extends('layouts.dashboard')

@section('content')
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Хисобот шаклини киритинг</h5>
                <form>
                    <div class="position-relative form-group">
                        <label for="exampleSelect" class="">Вилоятни танланг</label>
                        <select name="region" id="region" class="form-control" required>
                            <option hidden>Вилоятни танланг</option>
                            @foreach($regions as $region)
                                <option value="{{ $region['regionid'] }}">{{ $region['nameuz'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleSelect" class="">Вилоятни танланг</label>
                        <select name="district" id="district" class="form-control" required>
                        </select>
                    </div>
                    <button class="mt-1 btn btn-primary">Юклаб олиш</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#region').on('change', function() {
                var regionID = $(this).val();
                if(regionID) {
                    $.ajax({
                        url: '/dashboard/district/'+regionID,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType: "json",
                        success:function(data)
                        {
                            if(data){
                                $('#district').empty();
                                $('#district').append('<option hidden>Туманни танланг</option>');
                                $.each(data, function(key, district){
                                    $('select[name="district"]').append('<option value="'+ district.areaid +'">' + district.nameuz + '</option>');
                                });
                            }else{
                                $('#district').empty();
                            }
                        }
                    });
                }else{
                    $('#district').empty();
                }
            });
        });
    </script>
@endsection
