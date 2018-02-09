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

<!-- 登録作品一覧 -->
<h2>登録作品</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>タイトル</th>
                <th>登録日</th>
                <th>更新日</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($user->work as $work)
            <tr>
                <td>
                    <a href="{{ url('works/'.$work->id) }}">
                        {{ $work->title }}</a>
                </td>
                <td>{{ $work->created_at }}</td>
                <td>{{ $work->updated_at }}</td>
                <td nowrap>
                    <a href="{{ url('works/'.$work->id.'/edit') }}" class="btn btn-primary">編集</a>
                    @component('components.btn-del')
                        @slot('table', 'works')
                        @slot('id', $work->id)
                    @endcomponent
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
