@extends('layouts.default')

@section('content')
<h1>登録作家一覧</h1>
<button type="button" name="add-users" class="btn page-link text-dark d-inline-block">
    <a href="{{ url('users/create') }}">登録する</a>
</button>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{ '名前'}} </th>
                <th>
                    
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        <a href="{{ url('users/'.$user->id) }}">{{ $user->name }}</a>
                    </td>
                    <td>
                        <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-primary">編集</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
