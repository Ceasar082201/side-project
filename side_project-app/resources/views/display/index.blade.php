@extends('auth.login')

@section('title')
    Data
@endsection

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container container-fluid">
        <form action="{{route('display.create')}}" method="get" style="display: inline;">
        @csrf
        @method('get')
        <button class="btn btn-primary mb-3 btn-lg">
            Create New Data
        </button>
    </form>
    <form action="{{route('display.showData')}}" method="get" style="display: inline;">
        @csrf
        @method('get')
        <button class="btn btn-warning mb-3 btn-lg">
            Show the data
        </button>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="bg-secondary"style="text-align: center">Name</th>
                <th class="bg-secondary"style="text-align: center">Email</th>
                <th class="bg-secondary"style="text-align: center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{route('display.edit', $user->id)}}" method="get" style="display: inline">
                            @csrf
                            <button class="btn btn-primary btn-sm mx-0">Edit</button>
                        </form>
                        <form action="{{route('display.destroy', $user->id)}}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm mx-0" onclick="return confirm('Are you sure you want to delete {{ $user->name}}?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection