@extends('layouts.manuals_layout')

@section('title', $customer->name.' 様')
@section('description', 'カテゴリーを選んでください')

@section('content')
    <div class="select-category button">
        <a href="/service/create?id={{$customer->id}}&cate=wake">起床</a>
        <a href="/service/create?id={{$customer->id}}&cate=bed">就寝</a>
        <a href="/service/create?id={{$customer->id}}&cate=feed">食事</a>
        <a href="/service/create?id={{$customer->id}}&cate=bath">入浴</a>
        <a href="/service/create?id={{$customer->id}}&cate=other">その他</a>
    </div>
@endsection

{{-- side --}}
@section('side')
    @component('components.add-side2')
    @endcomponent
@endsection