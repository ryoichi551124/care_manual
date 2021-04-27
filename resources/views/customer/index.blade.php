@extends('layouts.manuals_layout')

@section('title', 'サービスの編集')
@section('description', '利用者を選択してください')

@section('content')
    <div class="list">
        <table class="table-list">
            @foreach ($customers as $customer)
                <tr>
                    <td><a href="/customer/selected?id={{ $customer->getId() }}">{{ $customer->getData() }}</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

{{-- side --}}
@section('side')
    @component('components.add-side2')
    @endcomponent
@endsection