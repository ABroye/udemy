@extends('front_layout.master')

@section('title')
    Apache
@endsection

@section('content')
<div class="container mb-5">
    @foreach ($articles as $article)
        <div class="card shadow rounded-0 mb-5">
            <div class="card-header">
                <div class="card-title">
                    <h1>{{ $article['article_title'] }}</h1>
                </div>
            </div>
            <div class="card-body">
                <p>{{ $article['article_shortdescription'] }}</p>
                <hr>
                <p>{!! $article['article_longdescription'] !!}</p>
            </div>
            <div class="card-footer">
                <p class="pt-2">Date de publication : {{ $article['created_at']->format('d/m/Y à H:i:s') }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection