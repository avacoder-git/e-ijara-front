@extends('layouts.dashboard')

@section('content')

<div class="container">
    <form action="{{ route('user.application.map') }}" method="post">
        @csrf

        <div class="row justify-content-center my-5">
            <div class="col-3">
                <select class="form-control" id="regions" name="region">
                    <option>Tanlang</option>
                    @foreach($regions as $region)
                    <option value="{{ $region->regionid }}">{{ $region->nameru }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <select class="form-control" id="districts" name="district">
                    <option>Tanlang</option>

                    @foreach($regions as $region)
                    @foreach($region->Districts as $district)
                    <option value="{{ $district->areaid }}" class="district d-none region-{{ $district->regionid }}">{{ $district->nameru }}</option>
                    @endforeach
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-2">
                <button type="submit" class="btn btn-success shadow">Davom Etish</button>
            </div>
        </div>
    </form>
</div>

@endsection


@section('javascript')

<script>
    $('#regions').change(function() {
        $('.district').addClass('d-none')

        $('.region-' + $(this).val()).removeClass('d-none')
    })
</script>

@endsection