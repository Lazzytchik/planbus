@extends('layouts.main')

@section('title', 'PLANBUS')

@section('content')

    <div class="main-section">
        <div class="inner-main">
            <div class="main-window">
                <x-maps from="Дубна, Дмитроское Шоссе, остановка общественного транспорта" to="Москва"></x-maps>
            </div>
            <div class="side-window">

            </div>
        </div>
    </div>
@endsection
