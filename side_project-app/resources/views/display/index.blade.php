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
    <form action="{{route('display.displayData')}}" method="get" style="display: inline">
        @csrf
        @method('get')
        <button class="btn btn-warning mb-3 btn-lg">
            Show the data
        </button>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="bg-secondary">Name</th>
                <th class="bg-secondary">Email</th>
            </tr>
        </thead>
    </table>
    </div>
@endsection