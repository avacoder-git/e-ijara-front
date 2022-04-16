@extends('layouts.dashboard')

@section('content')

<div class="container">
    <form action="{{ route('user.application.region') }}" method="post">
        @csrf
        <div class="row justify-content-center">
           <div class="col-3">
               <select>
                   
               </select>
           </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2">
                <button type="submit" class="btn btn-success shadow">Ariza topshirish</button>
            </div>
        </div>
    </form>
</div>

@endsection