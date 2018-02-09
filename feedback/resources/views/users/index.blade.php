@extends('layouts.default')

@section('content')
<h1>登録作家一覧</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{ __('Name')}} </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        <a href="{{ url('users/'.$user->id) }}">{{ $user->name }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
