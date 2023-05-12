@extends('layouts.main')
@section("title",'Login')
@section('content')

<form action="{{ route('login') }}" method="POST">
    @csrf
    @include('layouts.form-errors')
    <table class="table table-bordered">
        <tr>
            <td><input class="form-control" type="email" name="email" id="" placeholder="Email"></td>
        </tr>
        <tr>
            <td><input class="form-control" type="password" name="password" id="" placeholder="Password"></td>
        </tr>
        <tr>
            <td><button type="submit">Login</button></td>
        </tr>
    </table>
</form>
@endsection
