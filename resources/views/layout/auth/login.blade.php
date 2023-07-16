@extends('auth')

@section('title', "Oturum Aç")

@section('content')
    
<div class="app-auth-background">

</div>
<div class="app-auth-container">
    <div class="logo">
        <a href="/">Neptune</a>
    </div>
    <p class="auth-description">Devam edebilmek için lütfen oturum aç.<br> Bir hesabın yok mu? <a href="/auth/register">Ücretsiz Hesap Oluştur</a></p>

    <div class="auth-credentials m-b-xxl">
        <form action="javascript:void(0)" id="loginForm">
            <label for="email" class="form-label">E-posta Adresiniz</label>
            <input type="email" class="form-control m-b-md" id="email" name="email" placeholder="E-posta adresinizi girin">

            <label for="password" class="form-label">Şifreniz</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Şifrenizi Girin">
        </form>
    </div>

    <div class="auth-submit">
        <a href="javascript:void(0)" class="btn btn-primary">Oturum Aç</a>
        <a href="/auth/forget-password" class="auth-forgot-password float-end">Şifreni mi unuttun?</a>
    </div>
    <div class="divider"></div>
    <p class="text-muted">Copyright 2023 - Tüm hakları saklıdır.</p>
</div>
@endsection