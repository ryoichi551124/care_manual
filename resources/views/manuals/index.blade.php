@extends('layouts.manuals_layout')

{{-- title --}}
@section('title', 'サンプル老人ホーム')
@section('description', 'ホーム')

{{-- content --}}
@section('content')
    {{-- main --}}
    <div class="main">
        {{-- main-header --}}
        <div class="main-header">
            <h2 class="main-title">サービス内容</h2>
            <p class="main-description">以下の項目から選んでください</p>
        </div>
        {{-- button --}}
        <div class="main-button">
            <div class="button">
                <a href="{{ url('/customer/list') }}">利用者名</a>
                <a href="{{ url('/service/wakeup') }}">起床介助</a>
                <a href="{{ url('/service/bedtime') }}">就寝介助</a>
            </div>
            <div class="button">
                <a href="{{ url('/service/feeding') }}">食事介助</a>
                <a href="{{ url('/service/bathing') }}">入浴介助</a>
                <a href="{{ url('/service/others') }}">その他</a>
            </div>
        </div>
   </div>

@endsection

{{-- side --}}
@section('side')
    @component('components.side')
    @endcomponent
@endsection



