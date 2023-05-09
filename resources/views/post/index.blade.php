@extends('layouts.main')
@section('content')
<table class="table table-borderd table-striped table-hover">
    <thead>
        <tr>
            <th>#ID</th>
            <th>Title</th>
            <th>Status</th>
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
