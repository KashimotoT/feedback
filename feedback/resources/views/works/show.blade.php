@php
    $title = $work->title;
@endphp

@extends('layouts.default')
@section('content')
<h1>{{ $title }}</h1>

<!-- 編集・削除ボタン -->
<div>
    <a href="{{ url('works/'.$work->id.'/edit') }}" class="btn btn-primary">編集</a>
    @component('components.btn-del')
        @slot('table', 'works')
        @slot('id', $work->id)
    @endcomponent
</div>

<!-- ユーザー情報 -->
<dl class="row">
    <dt class="col-md-2">著者</dt>
    <dd class="col-md-10">{{ $work->author }}</dd>
    <dt class="col-md-2">タイトル</dt>
    <dd class="col-md-10">{{ $work->title }}</dd>
    <dt class="col-md-2">登録年月日</dt>
    <dd class="col-md-10">{{ $work->created_at }}</dd>
    <dt class="col-md-2">更新年月日</dt>
    <dd class="col-md-10">{{ $work->updated_at }}</dd>

</dl>
@endsection
