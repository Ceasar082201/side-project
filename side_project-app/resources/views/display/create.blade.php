@extends('auth.login')

@section('title')
    User
@endsection

@section('content')
    <h1>Create User</h1>
    <form class="container" action="{{route('display.store')}}" method="post">
        @csrf
        <div class="user_name">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="user_email">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="user_pwd mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
    </form>
@endsection