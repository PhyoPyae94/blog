@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Published posts
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                        Image
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Trash
                    </th>
                </thead>

                <tbody>
                    @if($posts->count() > 0)
                        @foreach($posts as $post)
                            <tr>
                                <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
                                <td>{{ $post->title }}</td>
                                <td>
                                <a href="{{ route('post.edit', ['id'=> $post->id]) }}" class="btn btn-info btn-xs">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ route('post.delete', ['id'=> $post->id]) }}" class="btn btn-danger btn-xs">Trash</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th colspan="4" class="text-center">No posts</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop