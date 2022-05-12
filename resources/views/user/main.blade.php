@extends('layouts.dashboard')

@section('content')

    @if (session()->has('success'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">{{ session()->get('success') }}</div>
    @endif

    <div class="card shadow">

        <div class="card-header">
            Менинг аризиларим
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover">

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Ариза берувчининг Ф.И.О</th>
                    <th>Вилоят</th>
                    <th>Туман</th>
                    <th>Вақти</th>
                    <th>Холати</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($applications as $application)
                    <tr>
                        <td>{{ $application->id }}</td>
                        <td>{{ $application->user->fullname }}</td>
                        <td>{{ $application->region->nameuz }}</td>
                        <td>{{ $application->district->nameuz }}</td>
                        <td>{{ $application->created_at }}</td>
                        <td>{{ $application->status->name }}</td>
                        <th>
                            <a href="">
                                <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><i class="metismenu-icon pe-7s-look"></i></button>
                            </a>
                            @if ($application->status_id === 1)
                                <a href="{{ route('user.application.delete', ['id' => $application->id]) }}" onclick="return confirm('Сиз киритган аризангизни учирмоқчимисиз?')">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm"><i class="metismenu-icon pe-7s-close-circle"></i></button>
                                </a>
                            @endif
                        </th>
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>

    </div>



@endsection
