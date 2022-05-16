@extends('layouts.dashboard')

@section('content')
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Хисобот шаклини киритинг</h5>
                <form method="POST" action="{{ route('user.reportDownload') }}">
                    @csrf
                    <div class="position-relative form-group">
                        <label for="region" class="">Вилоятни танланг</label>
                        <select name="region" id="region" class="form-control" required>
                            <option value="" hidden>Вилоятни танланг</option>
                            @foreach($regions as $region)
                                <option value="{{ $region['regionid'] }}">{{ $region['nameuz'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="district" class="">Туманни танланг</label>
                        <select name="district" id="district" class="form-control" required>
                            <option value="" hidden>Туманни танланг</option>
                        </select>
                    </div>

                    <div class="position-relative form-group">
                        <label for="step" class="">Босқични танланг</label>
                        <select name="step" id="step" class="form-control" required>
                            @foreach($steps as $key => $step)
                                <option value="{{ $key }}">{{ $step['type'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="position-relative form-group">
                        <label for="type" class="">Босқич турини танланг</label>
                        <select name="type_id" id="type" class="form-control" required>
                            <option>Босқич турини танланг</option>
                            @foreach ($steps as $key => $value)
                                @foreach ($value["child"] as $kalit => $value)
                                    <option value="{{ $kalit }}" class="types d-none" data-id="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                    <button class="btn mr-2 mb-2 btn-primary" type="submit">Тахрирлаш</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {


            $("#step").change(function(){
                $('.types').addClass("d-none")
                $(".types[data-id='" + $(this).val() + "'").removeClass("d-none")
            })


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
