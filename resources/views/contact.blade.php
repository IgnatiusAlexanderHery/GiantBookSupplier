@extends('template')

@section('title', 'Contact')

@section('content')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">

    <div class="container">
        <div class="items">
            <h2>Store address :</h2>
            <p>Jalan Pembangunan Baru Raua,</p>
            <p>Komplek Pertokoan Emerald Blok III/12</p>
            <p>Bintaro, Tangerang Selatan</p>
            <p>Indonesia</p>
        </div>
        <div class="items">
            <h2>Open Daily :</h2>
            <p>08.00 - 20.00</p>
        </div>
        <div class="items">
            <h2>Contact :</h2>
            <p>Phone : 021-08899776655</p>
            <p>Email : happybookstore@happy.com</p>
        </div>
    </div>
@endsection
