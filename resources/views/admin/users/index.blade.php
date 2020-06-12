@extends('layouts.admin')

@section('title')
Admin/Home
@endsection

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|IBM+Plex+Sans:600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
@section('content')
<body class="is-boxed has-animations">
<div class="wrapper">
    <div class="body-wrap boxed-container">



    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-inner">
                    <div class="hero-copy">
                        <h1 class="hero-title mt-4">Welcome Ousman Camara</h1>
                        <p class="hero-paragraph">Our landing page template works on all devices, so you only have to set it up once, and get beautiful results forever.</p>
                        <div class="hero-cta">
                            <div class="lights-toggle">
                                <input id="lights-toggle" type="checkbox" name="lights-toggle" class="switch" checked="checked">
                                <label for="lights-toggle" class="text-xs"><span>Turn me <span class="label-text">dark</span></span></label>
                            </div>
                        </div>
                    </div>
                    <div class="hero-media">
                        <div class="hero-media-illustration">
                            <img class="hero-media-illustration-image asset-light" src="{{asset('dist/images/hero-media-illustration-light.svg')}}" alt="Hero media illustration">
                            <img class="hero-media-illustration-image asset-dark" src="{{asset('dist/images/hero-media-illustration-dark.svg')}}" alt="Hero media illustration">
                        </div>
                        <div class="hero-media-container">
                            <img class="hero-media-image asset-light" src="{{asset('dist/images/hero-media-light.svg')}}" alt="Hero media">
                            <img class="hero-media-image asset-dark" src="{{asset('dist/images/hero-media-dark.svg')}}" alt="Hero media">
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

</div>
    </div>

</body>

<script src="{{asset('dist/js/main.min.js')}}"></script>



@endsection
