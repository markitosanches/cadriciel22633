@extends('layouts.app')
@section('title', 'Article')
@section('titleHeader', 'Article')
@section('content')
        <div class="row mt-5">
            <div class="col-12">
                <a href="{{route('blog.index')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
                <hr>
                <h2 class='display-6 mt-5' >
                    {{$blogPost->title}}
                </h2>
                <p>
                    {!! $blogPost->body !!}
                </p>
                <p>
                    <strong>Author :</strong> {{ $blogPost->user_id }}
                </p>
            </div>
            <hr>
        </div>
@endsection
