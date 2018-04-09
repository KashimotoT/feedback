@extends('layouts.default')

@section('content')
<h1>感想</h1>
<form action="{{ url('feedback') }}" method="post">
    {{ csrf_field() }}
    {{ method_field('POST')}}
    <div class="form-group">
        <label for="title">著者</label>
        <select id="author" class="custom-select" name="user" required autofocus>
            <option selected>著者を選んでください</option>
            @foreach ($authorLists as $authoList)
            <option value="{{ $authoList->id }}">{{ $authoList->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="title">タイトル</label>
        <select id="title" class="custom-select" name="work" required autofocus>
            <option selected>作品を選んでください</option>
            @foreach ($bookLists as $bookList)
            <option value="{{ $bookList->id }}">{{ $bookList->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="content">感想</label>
        <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">登録する</button>
</form>
@endsection

@section('script')
$(function(){

    //連動セレクトボックス
    function parent_selectbox(ele_name_parent, ele_name_child){
        //子の要素を変数へ
        var $children = $(ele_name_child);
        //子のコピー
        var original = $children.html();

        //親のselect要素が変更になるとイベント発生
        $(ele_name_parent).change(function(){
            //親のsect要素が未選択の場合、子を初期化＆disable
            if ($(this).val() === "") {
                $children.attr('disabled', 'disabled');
                $children.val("");
                return;
            }

            //選択された親のvalueを取得
            var parent_val = $(this).val();

            //子をコピーから、全選択肢を復活
            $children.html(original).find('option').each(function() {
                //親の値を取得
                var child_val = $(this).data('parent');

                //違う親の値だったら、選択肢を削除
                if (parent_val != child_val) {
                    $(this).not(':first-child').remove();
                }
            });

            //子を有効化、選択できるように
            $children.removeAttr('disabled');

        //編集画面ように、最初に１回だけ選択した状態にする
        }).trigger('change');
    }
    //カテゴリー・サブカテゴリー連動セレクトボックス
    parent_selectbox('#author', '#title');
})
@endsection
