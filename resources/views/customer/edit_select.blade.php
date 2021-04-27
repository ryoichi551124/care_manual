@extends('layouts.manuals_layout')

@section('title', '利用者の編集')
@section('description', '利用者を選択してください')

@section('content')
    <div class="list">
        <table class="table-list">
            @foreach ($customers as $customer)
                <tr>
                    <td><a href="/customer/edit?id={{ $customer->getId() }}">{{ $customer->getData() }}</a></td>
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