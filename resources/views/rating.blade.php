<link rel="stylesheet" href="{{ asset('css/rating.css') }}">

@extends('layout.template')

@section('title','Services')

@section('content')

<div class="content">

    <div class="rating">Rating Technician</div>
    <div class="line"></div>
    <div class="box p-3 gap-2 ">
        <span class="">Service : {{$orders->service}}</span>
        <span class="">Technician : {{$orders->name}}</span>
        <span>Rating Technician :</span>
        <div class="btn-group my-2" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" value="1" id="btnradio1" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio1">Very Bad</label>

            <input type="radio" class="btn-check" name="btnradio" value="2" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">Bad</label>

            <input type="radio" class="btn-check" name="btnradio" value="3" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">Neutral</label>
            
            <input type="radio" class="btn-check" name="btnradio" value="4" id="btnradio4" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio4">Good</label>

            <input type="radio" class="btn-check" name="btnradio" value="5" id="btnradio5" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio5">Very Good</label>
        </div>
        <div class="btn btn-warning jsutify-content-center">Submit</div>
    </div>
</div>

@endsection