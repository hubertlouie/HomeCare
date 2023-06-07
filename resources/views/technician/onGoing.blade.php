<link rel="stylesheet" href="{{ asset('css/technician/onGoing.css') }}">

@extends('layout.template')

@section('title','My Order')

@section('content')

    <div class="content">

        <div class="ro">On Going Order</div>
        <div class="line"></div>
        <div class="dt">Daftar pesanan yang Sedang Berlangsung</div>
        @if($data->isEmpty())
        <div>Anda tidak memiliki pesanan yang sedang berlangsung</div>
        @else
        
            <div class="ordCont">
                @foreach ($data as $dt) 
                    <div class="leftPart ">
                        <div class="d-flex ordTxt">
                            <div class="kata">Service</div>
                            <div> : {{$dt->service }} </div>
                        </div>
                        <div class="d-flex ordTxt">
                            <div class="kata">Technician</div>
                            <div> : {{ $dt->name }}</div>
                        </div>
                    </div>
                    <div class="rightPart">
                        <a href="/orderDetail/{{ $dt->orderId }}" class="btn btnAction">View Order</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

@endsection