{{-- side --}}
<div class="add-side">

    <aside class="side-origin">
        {{-- side-header --}}
        <div class="side-header">
            <h2 class="sub-title">新規作成＆編集</h2>
            <p class="side-description">編集項目を選んでください</p></p>
        </div>

        <ul class="side-menu">
            <li><a href="{{ url('/customer/create') }}">新規利用者作成</a></li> 
            <li><a href="{{ url('/service/select') }}">新規サービス作成</a></li>
            <li><a href="{{ url('customer/edit_select') }}">利用者の編集</a></li>
            <li><a href="{{ url('/customer') }}">サービスの編集</a></li>
        </ul>
    </aside>

    {{--button--}}
    <div class="button add-button">
        <a href="{{ url('/customer/list') }}">利用者一覧</a>
        <a href="{{ url('/manuals') }}">ホームに戻る</a>
    </div>
</div>