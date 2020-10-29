@extends('layout.app')

@section('content')
    <div class="container">
        <div class="my-3">
            <h3>
                {{ $article->title }}
            </h3>
        </div>
        <div class="col-12">
            <p>
                {{ $article->text }}
            </p>
            <p>
                {{ $article->created_at }}
            </p>
        </div>
        <div class="col-12">
            <a class="btn btn-primary" href="{{ URL::previous() }}">
                Back
            </a>
        </div>
    </div>
@endsection
