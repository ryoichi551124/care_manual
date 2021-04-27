@extends('layouts.manuals_layout')

@section('title', 'サービス新規作成')
@section('description', '利用者を選んでください')

@section('content')
    <div class="list">
        <table class="table-list">
            @foreach ($customers as $customer)
                <tr>
                    <td><a href="/service/select_category?id={{$customer->getId()}}">{{ $customer->getData() }}</a></td>
                </tr>
            @endforeach
            </tr>
        </table>
    </div>
@endsection

{{-- side --}}
@section('side')
    @component('components.add-side2')
    @endcomponent
@endsection
