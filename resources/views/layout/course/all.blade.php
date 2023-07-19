@extends('master')

@section('title', 'Kurslara Göz At')

@section('content')
<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Kurslar</h1>
            <span>Yayınladığımız tüm kurslara göz atabilirsin. İlgini çeken kurslara hemen kayıt olarak izlemeye başla ve hızlıca tamamla.</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <div class="card course-card">
            <img src="/static/assets/images/cards/card.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center fs-4 ">Card title</h5>
              <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <span class="" style="color:#d4d4d4">Etiket1, Etiket2, Etiket3</span>
            </div>
            <div class="d-flex flex-row card-body border-top justify-content-center d-none course-button">
                <a href="#" class="btn btn-primary card-link flex-1">Card link</a>
                <a href="#" class="btn btn-primary card-link flex-1">Card link</a>
            </div>
          </div>
    </div>

    
    
</div>


@endsection