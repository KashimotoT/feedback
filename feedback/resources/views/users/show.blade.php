@php
    $title = $user->name;
@endphp

@extends('layouts.default')
@section('content')
<h1>{{ $title }}</h1>

<!-- 編集・削除ボタン -->
<div>
    <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-primary">編集</a>
    @component('components.btn-del')
        @slot('table', 'users')
        @slot('id', $user->id)
    @endcomponent
</div>

<!-- ユーザー情報 -->
<dl class="row">
    <dt class="col-md-2">{{ __('ID') }}</dt>
    <dd class="col-md-10">{{ $user->id }}</dd>
    <dt class="col-md-2">名前</dt>
    <dd class="col-md-10">{{ $user->name }}</dd>
    <dt class="col-md-2">メール</dt>
    <dd class="col-md-10">{{ $user->email }}</dd>
</dl>
@endsection
