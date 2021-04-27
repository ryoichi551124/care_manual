@extends('layouts.manuals_layout')

{{-- title --}}
@section('title', 'サービス編集')
@section('description', $service->customer->name.' 様の介助方法を入力してください')


{{-- content --}}
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
        <form action="/service/edit" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$service->id}}">
            @if ($category=='wake')
                <h3>起床介助</h3>
                <textarea type="text" name="wakeup" value="{{ $service->wakeup }}">{{ $service->wakeup }}</textarea>
            @elseif ($category=='bed')
                <h3>就寝介助</h3>
                <textarea type="text" name="bedtime" value="{{ $service->bedtime }}">{{ $service->bedtime }}</textarea>
            @elseif ($category=='feed')
                <h3>食事介助</h3>
                <textarea type="text" name="feeding" value="{{ $service->feeding }}">{{ $service->feeding }}</textarea>
            @elseif ($category=='bath')
                <h3>入浴介助</h3>
                <textarea type="text" name="bathing" value="{{ $service->bathing }}">{{ $service->bathing }}</textarea>
            @elseif ($category=='other')
                <h3>その他</h3>
                <textarea type="text" name="others" value="{{ $service->others }}">{{ $service->others }}</textarea>
            @endif
            <h3></h3>
            <button class="submit" type="submit">決定</button>
            </tr>
        </form>
    </div>

    {{--button--}}
    <div class="button button-service-create">
        <a href="/customer/selected?id={{$service->customer->id}}">サービス内容<br>一覧に戻る</a>
        <a href="/customer">利用者選択に戻る</a>
        <a href="{{ url('/manuals') }}">トップに戻る</a>
    </div>
   
@endsection