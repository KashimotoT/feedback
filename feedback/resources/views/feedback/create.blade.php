@extends('layouts.default')

@section('content')
<h1>新規登録</h1>
<form action="{{ url('feedback') }}" method="post">
    {{ csrf_field() }}
    {{ method_field('POST')}}

    <!-- select author -->
    <div class="form-group">
        <label for="author">著者</label>
        <select id="author" name="author" class="custom-select" autofocus>
                <option value="著者ID" selected>著者名</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach

        </select>
    </div>

    <!-- select work -->
    <div class="form-group">
        <label for="title">作品</label>
        <select id="title" name="title" class="custom-select" autofocus>
                <option value="title" selected>作品名</option>
                @foreach ($titles as $title)
                    <option value="{{ $title->id }}">
                        {{ $title->title }}
                    </option>
                @endforeach
        </select>
    </div>

    <!-- feedback form -->
    <div class="form-group">
        <label for="content">感想</label>
        <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">送信</button>
</form>
@endsection
