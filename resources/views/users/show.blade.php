@php
    $title = 'ユーザー:' . $user->name;
@endphp
@extends('layouts.master')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    {{-- ユーザー1件の情報 --}}
    <dl class="row">
        <dt class="col-md-2">{{ __('ID') }}</dt>
        <dd class="col-md-10">{{ $user->id }}</dd>
        <dt class="col-md-2">{{ __('Name') }}</dt>
        <dd class="col-md-10">{{ $user->name }}</dd>
        <dt class="col-md-2">{{ __('E-Mail Address') }}</dt>
        <dd class="col-md-10">{{ $user->email }}</dd>
    </dl>

    {{-- 編集・削除ボタン --}}
    <div>
        <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-primary">
            {{ __('Edit') }}
        </a>
        @component('components.btn-del')
            @slot('table', 'users')
            @slot('id', $user->id)
        @endcomponent    
    </div>
</div>
@endsection