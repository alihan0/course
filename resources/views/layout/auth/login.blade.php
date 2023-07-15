@extends('auth')

@section('title', "Oturum Aç")

@section('content')
    
<div class="app-auth-background">

</div>
<div class="app-auth-container">
    <div class="logo">
        <a href="index.html">Neptune</a>
    </div>
    <p class="auth-description">Devam edebilmek için lütfen oturum aç. Bir hesabın yok mu?<a href="/auth/register">Ücretsiz Hesap Oluştur</a></p>

    <div class="auth-credentials m-b-xxl">
        <label for="signInEmail" class="form-label">Email address</label>
        <input type="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com">

        <label for="signInPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
    </div>

    <div class="auth-submit">
        <a href="#" class="btn btn-primary">Sign In</a>
        <a href="#" class="auth-forgot-password float-end">Forgot password?</a>
    </div>
    <div class="divider"></div>
    <div class="auth-alts">
        <a href="#" class="auth-alts-google"></a>
        <a href="#" class="auth-alts-facebook"></a>
        <a href="#" class="auth-alts-twitter"></a>
    </div>
</div>
@endsection