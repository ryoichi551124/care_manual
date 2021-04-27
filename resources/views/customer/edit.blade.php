@extends('layouts.manuals_layout')

{{-- title --}}
@section('title', '編集')
@section('description', $form->name.'様の基本情報の編集')
    
{{-- content --}}
@section('content')
    <div class="create">
        @if (count($errors) > 0)
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- 入力フォーム --}}
        <div class="customer-form">
            <form action="/customer/edit" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$form->id}}">
                <h3>名前</h3>
                <input type="text" name="name" placeholder="Name" value="{{ $form->name }}">
                <h3>年齢</h3>
                <input type="text" name="age" placeholder="Age" value="{{ $form->age }}">
                <h3></h3>
                <button class="submit" type="submit">決定</button>
            </form>
        </div>

        <a href="/customer/del?id={{$form->id}}"><img class="delete" src="{{ asset('image/dustbox.png') }}" alt="削除"></a>
    </div>

    {{--button--}}
    <div class="button button-service-create">
        <a href="/customer/edit_select">利用者選択に戻る</a>
        <a href="{{ url('/manuals') }}">ホームに戻る</a>
    </div>
@endsection
