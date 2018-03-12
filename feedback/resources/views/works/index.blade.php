@extends('layouts.default')

@section('content')
<h1>登録作品一覧</h1>

<!-- jump to the add works page -->
<button type="button" name="ado-works"  class="btn page-link text-dark d-inline-block">
    <a href="{{ url('/works/create') }}">登録する</a>
</button>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>著者</th>
                <th>タイトル</th>
                <th>登録日</th>
                <th>更新日</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($works as $work)
                <tr>
                    <td>
                        <a href="{{ url('users/'.$work->user->id )}}">
                            {{ $work->user->name }}</a>
                    </td>
                    <td>
                        <a href="{{ url('works/'.$work->id) }}">{{ $work->title }}</a>
                    </td>
                    <td>
                        {{ $work->created_at }}
                    </td>
                    <td>
                        {{ $work->updated_at }}
                    </td>
                    <td>
                        <a href="{{ url('works/'.$work->id.'/edit') }}" class="btn btn-primary">編集</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
