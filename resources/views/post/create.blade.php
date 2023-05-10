@extends('layouts.main')
@section("title",'Create New Post')
@section('content')
@include('layouts.form-errors')
<form action="{{ route('post.store')}} " method="post">
    @csrf
    <table class="table">
        <tr>
            <td><input class="form-control" type="text" name="title" id="" placeholder="title"></td>
        </tr>
        <tr>
            <td><textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Content"></textarea></td>
        </tr>
        <tr>
            <td>
                <select class="form-control" name="status" id="" aria-placeholder="Status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="btn btn-primary">Save</button>
            </td>
        </tr>
    </table>
</form>
@endsection
