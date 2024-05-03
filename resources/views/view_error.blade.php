@extends('layout.main')

<head>
    <!-- Tag-tag meta lainnya -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Link CSS, script JavaScript, dan lainnya -->
</head>

<div class="login-wrapper d-flex align-items-center justify-content-center">
    <div class="custom-container">
        <div class="text-center px-4">
            <img class="login-intro-img" src="{{ asset('/assets/img/bg-img/39.png') }}" alt="">
        </div>
    </div>
</div>
