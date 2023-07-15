@extends('auth')

@section('title','Hesap Oluştur')

@section('content')
    
<div class="app-auth-background">

</div>
<div class="app-auth-container">
    <div class="logo">
        <a href="/">Neptune</a>
    </div>
    <p class="auth-description">Hesap oluşturmak için aşağıdakli formu kullanabilirsin.<br>Zaten bir hesabın var mı? <a href="/auth/login">Oturum aç.</a></p>

    <div class="auth-credentials m-b-xxl">
        <label for="name" class="form-label">Ad Soyad</label>
        <input type="text" class="form-control m-b-md" id="name" placeholder=" Adınız Soyadınız">

        <label for="email" class="form-label">E-posta</label>
        <input type="email" class="form-control m-b-md" id="email" placeholder="E-posta adresini gir">

        <label for="password" class="form-label">Şifre</label>
        <input type="password" class="form-control" id="password" placeholder="Güçlü bir şifre belirle">
        <div id="emailHelp" class="form-text">Şifren en az 8 karakterden oluşmalı.</div>
    </div>

    <div class="auth-submit">
        <a href="javascript:void(0)" class="btn btn-primary" id="registerBtn">Hesap Oluştur</a>
    </div>
    <div class="divider"></div>
    <p class="text-muted">Copyright 2023 - Tüm hakları saklıdır.</p>
</div>

@endsection