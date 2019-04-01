@php
    $title = env('APP_NAME');
@endphp
@extends('layouts.master')
@section('title', 'demo-laravel')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <p>
        Laravel5.7で基本的なCRUDを実装する練習です
    </p>
    <ul>
        <li>
            GitHub：
            <a href="https://github.com/bm0521/demo-laravel" target="_blank">
                https://github.com/bm0521/demo-laravel
            </a>
        </li>
        <li>
            Qiita（参考）:
            <a href="http://qiita.com/sutara79/items/ef30fcdfb7afcb2188ea" target="_blank">
                Laravel 5.7で基本的なCRUDを作る
            </a>
            (
                <a href="https://opensource.org/licenses/mit-license.php" target="_blank">
                    MIT
                </a>
            )
        </li>
    </ul>
    <h2>機能</h2>
    <ul>
        今後追記予定
    </ul>
</div>
@endsection