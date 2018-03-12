@php
    $id_attr = 'modal-edit-'.$controller.'-'.$id;
@endphp

<!-- ボタンの設定 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $id_attr }}">編集</button>

<!-- モーダルの設定 -->
<div class="modal fade" id="{{ $id_attr }}" tabindex="-1" role="dialog" aria-labelledby="{{ $id_attr }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id_attr }}-label">編集の確認</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>本当に編集してもよろしいですか</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">やめる</button>
                <form action="{{ url($controller.'/'.$id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <button type="submit" class="btn btn-danger">実行</button>
                </form>
            </div>
        </div>
    </div>
</div>
