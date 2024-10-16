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
            </thead>
            <tbody>
                @foreach ( as )
                    
                @endforeach
            </tbody>
        </table>
    </div>