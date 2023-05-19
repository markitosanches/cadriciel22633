@extends('layouts.app')
@section('title', 'Pages')
@section('titleHeader', 'Pages')
@section('content')
<div class="card mt-3">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Author</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id}}</td>
                        <td>{{ $blog->title}}</td>
                        <td>{{ $blog->blogHasUser->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $blogs }}
    </div>
</div>

@endsection