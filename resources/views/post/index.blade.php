@extends('layouts.main')
@section('title','Posts')
@section('content')
<div class="text-right mb-4">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
</div>
<table class="table table-borderd table-striped table-hover">
    <thead>
        <tr>
            <th>#ID</th>
            <th>Title</th>
            <th>Status</th>
            <th width="20%"></th>
        </tr>
    </thead>
    <tbody>
        @if($posts)
        @foreach ($posts as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>
                <a href="{{ route('posts.show',$row->id) }}">
                    {{ $row->title }}
                </a>
            </td>
            <td>{{ $row->status == 1 ? 'active' : 'inactive' }}</td>
            <td class="input-group">
                <a class="btn btn-sm btn-info" href="{{ route('posts.edit', $row->id) }}">Edit</a>&nbsp;
                <form action="{{ route('posts.delete', $row->id) }}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">{{ $posts->links() }}</td>
        </tr>
    </tfoot>
</table>
@endsection
