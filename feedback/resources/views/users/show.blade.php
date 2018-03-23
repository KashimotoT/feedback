@php
    $title = $user->name;
@endphp

@extends('layouts.default')
@section('content')
<h1>{{ $title }}の作品一覧</h1>

<!-- 作品登録ボタン -->
<a class="btn btn-primary" href="{{ url('works/create') }}">追加する</a>

<!-- 登録作品一覧 -->
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>タイトル</th>
                <th>登録日</th>
                <th>更新日</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($user->works as $work)
            <tr>
                <td>
                    <a href="{{ url('works/'.$work->id) }}">
                        {{ $work->title }}</a>
                </td>
                <td>{{ $work->created_at }}</td>
                <td>{{ $work->updated_at }}</td>
                <td>
                    <a class="btn btn-primary" href="#">編集</a>
                </td>
                <td>
                    @component('components.btn-del')
                        @slot('controller', 'works' )
                        @slot('id', $work->id)
                    @endcomponent
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
