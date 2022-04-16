@extends('template.app-errors')

@section('title', 'Запрещенная страница')

@section('content')
    <div class="error-panel">
        <div class="svg-wrapper mg-b-40">
            <object type="image/svg+xml" data="{{ asset("ijara/assets/svg/404.svg") }}"></object>
        </div>
        <h1 class="tx-28 tx-sm-36 tx-numeric tx-md-40 tx-semibold">403</h1>
        <h4 class="tx-16 tx-sm-18 tx-md-24 tx-light mg-b-20 mg-md-b-30">Это действие неавторизовано</h4>
        <p class="tx-12 tx-sm-13 tx-md-14 tx-color-04">Сервер не может обслуживать ваш запрос.</p>
        <div class="wd-200">
            <a href="{{ route('home') }}" class="btn btn-block btn-white">Бош саҳифага қайтиш</a>
        </div><!-- search-form -->
    </div>
@endsection

