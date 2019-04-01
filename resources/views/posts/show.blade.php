@php
    $title = $post->question;
@endphp
@extends('layouts.master')
@section('content')
<div class="container">
    <h1 id="post-title">{{ $title }}</h1>

    {{-- 記事内容 --}}
    <dl class="row">
        <dt class="col-md-2">{{ __('Created') }}:</dt>
        <dd class="col-md-10">
            <time itemprop="dateCreated" datetime="{{ $post->created_at }}">
                {{ $post->created_at }}
            </time>
        </dd>
        <dt class="col-md-2">{{ __('Updated') }}:</dt>
        <dd class="col-md-10">
            <time itemprop="dateModified" datetime="{{ $post->updated_at }}">
                {{ $post->updated_at }}
            </time>
        </dd>
    </dl>
    <hr>
    <div id="post-body">
        {{ $post->ask }}
    </div>

    {{-- 編集・削除ボタン --}}
    <div class="edit">
        <a href="{{ url('posts/'.$post->id.'/edit') }}" class="btn btn-primary">
            {{ __('Edit') }}
        </a>
        @component('components.btn-del')
            @slot('table', 'posts')
            @slot('id', $post->id)
        @endcomponent
    </div>
        
</div>
@endsection