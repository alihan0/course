@extends('master')

@section('title', 'Kurs Detayları')

@section('content')
<input type="hidden" value="{{$course->id}}" id="course_id">
<a href="#" class="content-menu-toggle btn btn-primary"><i class="material-icons">menu</i> content</a>
<div class="content-menu content-menu-right">
    <ul class="list-unstyled">
        <li><a href="#" class="active">Ders 1</a></li>
        <li><a href="#" >Ders 2</a></li>
        <li><a href="#">Ders 3</a></li>
        <li><a href="#">Ders 4</a></li>
        <li><a href="#">Ders 5</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="material-icons">facebook</i>Facebookta Paylaş</a></li>
        <li><a href="#"><i class="material-icons">share</i>Kursu Tweetle</a></li>
        <li><a href="#"><i class="material-icons">send</i>E-posta Gönder</a></li>
    </ul>
</div>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description d-flex align-items-center">
                    <div class="page-description-content flex-grow-1">
                        <h1>{{$course->name}}</h1>
                    </div>
                    <div class="page-description-actions">

                        @if ($course->Favorites)
                            <a href="#" class="btn btn-danger" id="unFavoriteButton">Beğenmekten Vazgeç</a>
                        @else
                            <a href="#" class="btn btn-danger" id="favoriteButton"><i class="material-icons">favorite</i>Beğen</a>
                        @endif
                        <a href="#" class="btn btn-primary" id="subsButton"><i class="material-icons">add</i>Kayıt Ol</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <img src="{{$course->cover}}" width="100%" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        {{$course->detail}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card widget widget-action-list">
                    <div class="card-body">
                        <div class="widget-action-list-container">
                            <ul class="list-unstyled d-flex no-m">
                                <li class="widget-action-list-item">
                                    <a href="#">
                                        <span class="widget-action-list-item-icon">
                                            <i class="material-icons text-primary">favorite</i>
                                        </span>
                                        <span class="widget-action-list-item-title">
                                            
                                        </span>
                                    </a>
                                </li>
                                <li class="widget-action-list-item">
                                    <a href="#">
                                        <span class="widget-action-list-item-icon">
                                            <i class="material-icons-outlined text-success">comment</i>
                                        </span>
                                        <span class="widget-action-list-item-title">
                                            {{$course->Comments->count()}}
                                        </span>
                                    </a>
                                </li>
                                <li class="widget-action-list-item">
                                    <a href="#">
                                        <span class="widget-action-list-item-icon">
                                            <i class="material-icons-outlined text-danger">shopping_basket</i>
                                        </span>
                                        <span class="widget-action-list-item-title">
                                            250
                                        </span>
                                    </a>
                                </li>
                                <li class="widget-action-list-item">
                                    <a href="#">
                                        <span class="widget-action-list-item-icon">
                                            <i class="material-icons text-info">video_library</i>
                                        </span>
                                        <span class="widget-action-list-item-title">
                                            {{$course->video_count}}
                                        </span>
                                    </a>
                                </li>
                                <li class="widget-action-list-item">
                                    <a href="#">
                                        <span class="widget-action-list-item-icon">
                                            <i class="material-icons text-warning">access_alarm</i>
                                        </span>
                                        <span class="widget-action-list-item-title">
                                            {{$course->total_time}} dk.
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="card todo-container">
                    
                    <div class="row">
                       
                        <div class="col-12">
                            
                            <div class="todo-list ps-5">
                                <h5 class="card-title border-bottom pb-2 fs-4">Yorumlar ({{$course->Comments->count()}})</h5>
                                <ul class="list-unstyled">
                                    
                                    
                                    @foreach ($course->Comments as $item)
                                    <li class="todo-item">
                                        <div class="todo-item-content">
                                            <span class="todo-item-title">{{$item->User->name}}<span class="badge badge-style-light rounded-pill badge-danger">
                                                @for ($i = 0; $i < $item->point; $i++)
                                                <i class="material-icons-two-tone fs-6">star</i>
                                                @endfor
                                            </span></span>
                                            <span class="todo-item-subtitle mb-3">
                                                {{$item->message}}
                                            </span>
                                            <sup class="text-muted mt-3">{{$item->created_at}}</sup>
                                        </div>
                                        
                                    </li>
                                    @endforeach
                                    
                                    
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card todo-container">
                    
                    <div class="row">
                       
                        <div class="col-12">
                            
                            <div class="todo-list ps-5">
                                <h5 class="card-title border-bottom pb-2 fs-4 mb-3">Yorum Yap</h5>
                                <input type="hidden" id="course" value="{{$course->id}}">
                                <div class="mb-3">
                                    <textarea class="form-control" id="message"  rows="4"></textarea>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <select class="form-control" id="point">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected>5</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <a href="javascript:void(0)" class="btn btn-primary" id="addComment">Yorum Yap</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
        
    </div>
</div>
</div>
</div>
@endsection



@section('script')
    <script>
        $("#addComment").on("click", function(){
            var course = $("#course").val();
            var message = $("#message").val();
            var point = $("#point").val();

            axios.post("/courses/add/comment", {course:course, message:message, point:point}).then((res) => {
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    window.location.reload();
                }
            });
        });

        $("#favoriteButton").on("click", function(){
            var course = $("#course_id").val();

            axios.post("/courses/add/favorite", {course:course}).then((res)=>{
                if(res.data.status){
                    $(this).html("Beğenmekten Vazgeç");
                    $(this).attr("id", "unFavoriteButton");
                }
            });
        });
    </script>
@endsection