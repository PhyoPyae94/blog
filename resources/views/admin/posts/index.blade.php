@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
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
                        Delete
                    </th>
                </thead>

                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
                            <td>image</td>
                            <td>{{ $post->title }}</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop