@extends('layouts.dashboard')

@section('content')
@if (session()->has('success'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">{{ session()->get('success') }}</div>
@endif

<div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Фойдаланувчи малумотлари</h5>

                <div class="form-row">
                        <div class="col-md-4">
                                <div class="position-relative form-group">
                                        <label for="exampleCity" class="">Исми</label>
                                        <input id="exampleCity" type="text" value="{{ $user->firstname }}" class="form-control" disabled>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="position-relative form-group">
                                        <label for="exampleState" class="">Фамилияиси</label>
                                        <input id="exampleState" type="text" value="{{ $user->lastname }}" class="form-control" disabled>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="position-relative form-group">
                                        <label for="exampleZip" class="">Отасининиг исми</label>
                                        <input id="exampleZip" type="text" value="{{ $user->midname }}" class="form-control" disabled>
                                </div>
                        </div>
                </div>
                <div class="form-row">
                        <div class="col-md-4">
                                <div class="position-relative form-group">
                                        <label for="exampleCity" class="">Паспорт рақами</label>
                                        <input id="exampleCity" type="text" value="{{ $user->passport }}" class="form-control" disabled>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="position-relative form-group">
                                        <label for="exampleState" class="">Телефон рақами</label>
                                        <input id="exampleState" type="text" value="{{ $user->phone }}" class="form-control" disabled>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="position-relative form-group">
                                        <label for="exampleZip" class="">Манзили</label>
                                        <input id="exampleZip" type="text" value="{{ $user->address }}" class="form-control" disabled>
                                </div>
                        </div>
                </div>
                <div class="form-row">
                        <div class="col-md-4">
                                <div class="position-relative form-group">
                                        <label for="exampleCity" class="">Логин</label>
                                        <input id="exampleCity" type="text" value="{{ $user->username }}" class="form-control" disabled>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="position-relative form-group">
                                        <label for="exampleState" class="">Электрон почта манзили</label>
                                        <input id="exampleState" type="text" value="{{ $user->email }}" class="form-control" disabled>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="position-relative form-group">
                                        <label for="exampleZip" class="">Фуқаро</label>
                                        <input id="exampleZip" type="text" value="{{ $user->user_type == 'Y' ? 'Юридик' : 'Жисмоний' }} шахс"
                                                class="form-control" disabled>
                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection
