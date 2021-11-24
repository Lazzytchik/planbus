@extends('layouts.main')

@section('title', 'PLANBUS')

@section('content')

    <div class="main-window window">
        <x-maps from="{{$_GET['from']}}" to="{{$_GET['to']}}"></x-maps>
    </div>
    <div class="side-window window">
        <div class="side-inner">
            <form class="side-form" action="" method="GET">
                <div class="side-form-inputs">
                    <input name="from" type="text" placeholder="from...">
                    <input name="to" type="text" placeholder="to...">
                </div>
                <div class="side-form-submit">
                    <input type="submit" value="Build">
                </div>
            </form>
        </div>
    </div>

@endsection
