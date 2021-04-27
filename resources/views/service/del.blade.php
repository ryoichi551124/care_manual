@extends('layouts.manuals_layout')

{{-- title --}}
@section('title', 'サービス削除')
@section('description', $form->customer->name.' 様の介助方法を削除します')

{{-- content --}}
@section('content')
    {{-- 入力フォーム --}}
    <div class="customer-form service-form">
        <form action="/service/del" method="post">
            @csrf
            <input type="hidden" name="id" value={{ $form->id }}>
            <input type="hidden" name="category" value={{ $category }}>
            @if ($category=='wake')
                <h3>起床介助</h3>
                <textarea readonly>{{ $form->wakeup }}</textarea>
            @elseif ($category=='bed')
                <h3>就寝介助</h3>
                <textarea readonly>{{ $form->bedtime }}</textarea>
            @elseif ($category=='feed')
                <h3>食事介助</h3>
                <textarea readonly>{{ $form->feeding }}</textarea>
            @elseif ($category=='bath')
                <h3>入浴介助</h3>
                <textarea readonly>{{ $form->bathing }}</textarea>
            @elseif ($category=='other')
                <h3>その他</h3>
                <textarea readonly>{{ $form->others }}</textarea>
            @endif
            <h3></h3>
            <button class="submit" type="submit">削除</td>
        </form>
    </div>
@endsection