@extends('layouts.main')
@section("title",'Create New Post')
@section('content')
@include('layouts.form-errors')
<form action="{{ route('post.update')}} " method="post">
    @csrf
    @method("patch")
    <input type="hidden" name="id" value="{{ $post->id }}">
    <table class="table">
        <tr>
            <td><input value="{{ $post->title }}" class="form-control" type="text" name="title" id="" placeholder="title"></td>
        </tr>
        <tr>
            <td><textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Content">{{ $post->content }}</textarea></td>
        </tr>
        <tr>
            <td>
                <select class="form-control" name="status" id="" aria-placeholder="Status">
                    <option {{ $post->status == 1 ? 'selected=selected' : '' }} value="1">Active</option>
                    <option {{ $post->status == 0 ? 'selected=selected' : '' }} value="0">Inactive</option>
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
