@extends('layouts.main')
@section("title",'Sign Up')
@section('content')

<form action="{{ route('user.signup') }}" method="POST">
    @csrf
    @include('layouts.form-errors')
    <table class="table table-bordered">
        <tr>
            <td><input class="form-control" type="text" name="name" id="" placeholder="Name"></td>
        </tr>
        <tr>
            <td><input class="form-control" type="email" name="email" id="" placeholder="Email"></td>
        </tr>
        <tr>
            <td><input class="form-control" type="password" name="password" id="" placeholder="Password"></td>
        </tr>
        <tr>
            <td><input class="form-control" type="password" name="password_confirmation" id="" placeholder="Confirm Password"></td>
        </tr>
        <tr>
            <td><button type="submit">Save</button></td>
        </tr>
    </table>
</form>
@endsection
