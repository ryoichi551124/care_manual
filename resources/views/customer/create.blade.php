@extends('layouts.manuals_layout')

{{-- title --}}
@section('title', '新規作成')
@section('description', '利用者情報を入力')
    

@section('content')
<div class="create">
    {{-- 入力フォーム --}}
    <div class="customer-form">
        <form action="/customer/create" method="post">
            @csrf
            <h3>名前</h3>
            @if ($errors->has('name'))
                <p class="error">名前を入力してください</p>
            @endif
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
            <h3>年齢</h3>
            @if ($errors->has('age'))
                <p class="error">年齢を入力してください</p>
            @endif
            <input type="text" name="age" placeholder="Age" value="{{ old('age') }}">
            <h3></h3>
            <button class="submit" type="submit">決定</button>
        </form>
    </div>

    {{--button--}}
    <div class="button button-create">
        <a href="{{ url('/manuals') }}">ホームに戻る</a>
    </div>
</div>
@endsection

