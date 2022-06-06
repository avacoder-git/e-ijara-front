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
                    <th>Вилоят</th>
                    <th>Туман</th>
                    <th>Ижара мақсади</th>
                    <th>Ижара муддати (йил)</th>
                    <th>Вақти</th>
                    <th>Холати</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($applications as $application)
                    <tr>
                        <td>{{ $application->region->nameuz }}</td>
                        <td>{{ $application->district->nameuz }}</td>
                        <td>{{ $application->land_purpose->name }}</td>
                        <td>{{ $application->period }}</td>
                        <td>{{ $application->created_at->format('Y-m-d H:i') }}</td>
                        <td>{{ $application->status->name }}</td>
                        <th>
                            @if ($application->status_id === 1)
                                <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-{{ $application->id }}">
                                    <i class="metismenu-icon pe-7s-edit"></i></button>
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
@foreach($applications as $application)
    <div class="modal fade" id="modal-{{ $application->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
         aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Аризи малумотларини тахрирлаш</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('user.application.edit', ['id' => $application->id]) }}" method='POST'>
                @csrf
                <div class="modal-body">
                    <div class="position-relative form-group">
                        <label for="exampleState" class="">Ижара муддати (йил)</label>
                        <input id="exampleState" type="number" name='period'  value="{{ $application->period }}" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleSelect" class="">Ижара мақсади</label>
                        <select name="land_purpose_id" id="exampleSelect" class="form-control">
                            @foreach ($land_purposes as $id => $purpose)
                                <option @if($id == $application->land_purpose_id) selected @endif value="{{ $id }}">{{ $purpose->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Ёпиш</button>
                    <button type="submit" class="btn btn-primary">Сақлаш</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
