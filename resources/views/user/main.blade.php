@extends('layouts.dashboard')

@section('content')


    <div class="card shadow">

        <div class="card-header">
            Mening Arizalarim
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover">

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Ariza beruvchinining FIO</th>
                    <th>Viloyati</th>
                    <th>Tumani</th>
                    <th>Topshirilgan vaqti</th>
                    <th>Holati</th>
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
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>


    </div>



@endsection
