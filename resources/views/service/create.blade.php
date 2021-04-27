@extends('layouts.manuals_layout')

{{-- title --}}
@section('title', 'サービス新規作成')
@section('description', $customer_name.' 様の介助方法を入力してください')
    

@section('content')
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
    <div class="customer-form service-form">
        <form action="/service/create" method="post">
            @csrf
            <input type="hidden" name="customer_id" value={{ $customer_id }}>
            @if ($category == 'wake')
                <h3>起床介助</h3>
                <textarea type="text" name="wakeup" value="{{ old('wakeup') }}"></textarea>
            @endif
            @if ($category == 'bed')
                <h3>就寝介助</h3>
                <textarea type="text" name="bedtime" value="{{ old('bedtime') }}"></textarea>
            @endif
            @if ($category == 'feed')
                <h3>食事介助</h3>
                <textarea type="text" name="feeding" value="{{ old('feeding') }}"></textarea>
            @endif
            @if ($category == 'bath')
                <h3>入浴介助</h3>
                <textarea type="text" name="bathing" value="{{ old('bathing') }}"></textarea>
            @endif
            @if ($category == 'other')
                <h3>その他</h3>
                <textarea type="text" name="others" value="{{ old('others') }}"></textarea>
            @endif
            <h3></h3>
            <button class="submit" type="submit">決定</button> 
        </form>

        {{--button--}}
        <div class="button back">
            <a href="/customer/selected?id={{$customer_id}}">戻る</a>
        </div>
    </div>

    {{--button--}}
    <div class="button button-service-create">
        <a href="/service/select_category?id={{$customer_id}}">カテゴリーに戻る</a>
        <a href="/service/select_category?id={{$customer_id}}">利用者選択に戻る</a>
        <a href="/customer/selected?id={{$customer_id}}">高木様<br>介助方法一覧</a>
        <a href="{{ url('/manuals') }}">ホームに戻る</a>
    </div>
@endsection