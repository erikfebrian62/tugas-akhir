@extends('admin.layouts.main')

@section('title')
Kalender
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card calendar-container">
            <div class="card-body">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>
@endsection
