@php
    $title = '編集:' . $user->name;
@endphp
@extends('layouts.master')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('users/'.$user->id) }}" method="post">
        @csrf {{-- CSRF保護 --}}
        @method('PUT') {{-- 疑似フォームメソッド --}}
        <div class="form-group">
            <label for="name">ユーザー名<</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">登録</button>
    </form>
</div>
@endsection