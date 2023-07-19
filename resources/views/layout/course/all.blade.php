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
    
    @foreach ($courses as $course)

    @php
        $tags = explode(',', $course->tags);
    @endphp

    <div class="col-4">
        <div class="card course-card">
            <img src="{{$course->cover}}" class="card-img-top" alt="{{$course->name}}" title="{{$course->name}}">
            <div class="card-body" style=" min-height:220px">
              <h5 class="card-title text-center fs-4 ">{{$course->name}}</h5>
              <p class="card-text text-muted">{{$course->detail}}</p>
              @foreach ($tags as $tag)
                  <a href="#" title="{{$tag}}">{{$tag}}</a>
              @endforeach
            </div>
            <div class="d-flex flex-row card-body border-top justify-content-center d-none course-button">
                
                <a href="javascript:void(0)" class="btn btn-primary card-link flex-1">Kayıt Ol</a>
                <a href="/courses/{{$course->id}}" class="btn btn-primary card-link flex-1">Detay</a>
            </div>
          </div>
    </div>
    
    @endforeach
    
</div>


@endsection