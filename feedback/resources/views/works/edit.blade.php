@extends('layouts.default')

@section('content')
<h1>作品情報変更</h1>
<p>
    現在の登録情報
</p>
<p>タイトル：{{ $work->title }} <br>作家：{{ $work->user->name }}</p>
<form action="{{ url('works/'.$work->id ) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT')}}

<!-- form -->
    <div class="form-group">
        <label for="author">著者<small>※選択肢にいない場合は、作家を登録してください</small></label>
        <select class="custom-select" name="author" required autofocus>
            <option value="">作家を選んでください</option>
            @foreach ($authors as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="title">タイトル</label>
        <input id="title" type="text" name="title" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">更新する</button>
</form>
@endsection
