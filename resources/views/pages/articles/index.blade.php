@extends('layout.app')

@section('content')
    <div class="container">
        <div class="my-3">
            <h2>
                Cyber Blog
            </h2>
        </div>

        <div class="row">
            @foreach($articles as $article)
                <div class="col-sm-6 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $article->title }}
                            </h5>
                            <p class="card-text">
                                {{ $article->short }}
                            </p>
                            <a href="/articles/{{ $article->id }}" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
