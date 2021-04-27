@extends('layouts.manuals_layout')

{{-- title --}}
@section('title', '利用者情報の削除')
@section('description', $form->name.' 様の基本情報を削除してもよろしいですか？')

{{-- content --}}
@section('content')
<div class="create">
    <div class="customer-form">
        <form action="/customer/del" method="post">
            @csrf
            <input type="hidden" name="id" value={{ $form->id }}>
            <h3>名前</h3>
            <input value="{{ $form->name }}">
            <h3>年齢</h3>
            <input value="{{ $form->age }}">
            <h3></h3>
            <button class="submit" type="submit">削除</button>
        </form>
    </div>

    {{--button--}}
    <div class="button button-create">
        <a class="del-back" href="/customer/edit?id={{$form->id}}">戻る</a>
        <a href="{{ url('/manuals') }}">トップに戻る</a>
    </div>
</div>

@endsection