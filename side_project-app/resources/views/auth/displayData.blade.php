@extends('auth.login')

@section('title')
    side_project-app
@endsection

@section('content')
    <div class="container">
        <h3>Data is shown</h3>
        <table class="table table-bordered">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ( $users as $user )
                <tr>
                    <td>{{ $user -> $name }}</td>
                    <td>{{ $user -> $email }}</td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>