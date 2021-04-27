@extends('layouts.manuals_layout')

@section('title', 'Service')

@section('content')
    <table>
        <tr>
            <th>name</th>
        </tr>
            @foreach ($services as $service)
                <tr>
                    <td>ID: {{ $service->getId() }}</td>
                </tr>
                <tr>
                    <td>{{ $service->getCutsomerid() }}</td>
                <tr/>
                <tr>
                    <td>{{ $service->getWakeup() }}</td>
                </tr>
                <tr>
                    <td>{{ $service->getBedtime() }}</td>
                </tr>
                <tr>
                    <td>{{ $service->getFeeding() }}</td>
                </tr>
                <tr>
                    <td>{{ $service->getbathing() }}</td>
                </tr>
                <tr>
                    <td>{{ $service->getOthers() }}</td>
                </tr>
                    {{-- 
                    <td><a href="/customer/edit?id={{ $customer->getId() }}">編集</a></td>
                    <td><a href="/customer/del?id={{ $customer->getId() }}">削除</a></td>
                    --}}
            @endforeach
        </tr>
    </table>
    
@endsection