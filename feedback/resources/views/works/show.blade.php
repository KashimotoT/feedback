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
        @slot('controller', 'works')
        @slot('id', $work->id)
    @endcomponent
</div>

<!-- ユーザー情報 -->
<dl class="row">
    <dt class="col-md-2">著者</dt>
    <dd class="col-md-10">{{ $work->user->name }}</dd>
    <dt class="col-md-2">タイトル</dt>
    <dd class="col-md-10">{{ $work->title }}</dd>
    <dt class="col-md-2">登録年月日</dt>
    <dd class="col-md-10">{{ $work->created_at }}</dd>
    <dt class="col-md-2">更新年月日</dt>
    <dd class="col-md-10">{{ $work->updated_at }}</dd>

</dl>

<!-- 感想一覧 -->
<h2>感想</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>感想</th>
                <th>登録日</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($work->feedback as $feedback)
            <tr>
                <td>{{ $feedback->content }}</td>
                <td nowrap>{{ $feedback->created_at }}</td>
                <td>
                    @component('components.btn-del')
                        @slot('controller', 'feedback')
                        @slot('id', $feedback->id)
                    @endcomponent
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
