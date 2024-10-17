@extends('auth.login')

@section('title')
    Edit Data
@endsection

@section('content')
    <div class="container">
        <form action="{{route('display.update', $data->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $data->name }}" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="">
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
@endsection
