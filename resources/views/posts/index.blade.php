@php
    $title = "投稿一覧";
@endphp
@extends('layouts.master')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('Title') }}</th>
                    <th>{{ __('Body') }}</th>
                    <th>{{ __('Created') }}</th>
                    <th>{{ __('Updated') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        <a href="{{ url('posts/'.$post->id) }}">{{ $post->question }}</a>
                    </td>
                    <td>{{ $post->ask }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                 </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection