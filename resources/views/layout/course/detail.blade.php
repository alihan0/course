@extends('master')

@section('title', 'Kurs Detayları')

@section('content')
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
                        <a href="#" class="btn btn-danger"><i class="material-icons">favorite</i>Beğen</a>
                        <a href="#" class="btn btn-primary"><i class="material-icons">add</i>Kayıt Ol</a>
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
                                            1.200
                                        </span>
                                    </a>
                                </li>
                                <li class="widget-action-list-item">
                                    <a href="#">
                                        <span class="widget-action-list-item-icon">
                                            <i class="material-icons-outlined text-success">comment</i>
                                        </span>
                                        <span class="widget-action-list-item-title">
                                            5
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
                                            5
                                        </span>
                                    </a>
                                </li>
                                <li class="widget-action-list-item">
                                    <a href="#">
                                        <span class="widget-action-list-item-icon">
                                            <i class="material-icons text-warning">access_alarm</i>
                                        </span>
                                        <span class="widget-action-list-item-title">
                                            50h
                                        </span>
                                    </a>
                                </li>
                            </ul>
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
                                <ul class="list-unstyled">
                                    <li class="todo-item">
                                        <div class="todo-item-content">
                                            <span class="todo-item-title">Walk the dog<span class="badge badge-style-light rounded-pill badge-warning">other</span></span>
                                            <span class="todo-item-subtitle">Donec ultricies est vel tellus molestie volutpat. Duis at cursus risus.</span>
                                        </div>
                                        
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-item-content">
                                            <span class="todo-item-title">Reply to new mails from support team<span class="badge badge-style-light rounded-pill badge-primary">work</span></span>
                                            <span class="todo-item-subtitle">Vestibulum ipsum nunc, lacinia sit amet egestas vitae, molestie quis nisi. Maecenas mi urna, ultricies non est a, commodo suscipit velit. Nullam tincidunt, magna sed scelerisque varius</span>
                                        </div>
                                        
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-item-content">
                                            <span class="todo-item-title">Watch UX/UI design course<span class="badge badge-style-light rounded-pill badge-danger">education</span><span class="badge badge-style-bordered badge-primary">IN PROGRESS</span></span>
                                            <span class="todo-item-subtitle">Vivamus pharetra massa vitae elit pellentesque, sit amet convallis purus euismod</span>
                                        </div>
                                        
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                    
                                </ul>
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