@extends('layouts.template')

@section('content')
<div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-briefcase-alt-1 bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Categorias</h4>
                        <span>En esta pagina encontramos las diferentes categorias disponibles.</span><br><br>
                        <a href=""><button class="btn btn-success">
                            Agregar una categoria
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Categorias: </h5>
                            <div class="card-header-right">
                                <i class="icofont icofont-spinner-alt-5"></i>
                            </div>
                    </div>
                    <div class="row card-block">
                        <div class="col-md-12">
                            <ul class="list-view">
                                @foreach ($categorias as $categoria)
                                    <li class="">
                                        <div class="card list-view-media">
                                            <div class="card-block">
                                                <div class="media">
                                                    <a class="media-left" href="#">
                                                        <img class="media-object card-list-img"
                                                            src="{{asset('/admin/assets/images/e-commerce/product-list/pro-l5.png')}}"
                                                            alt="Generic placeholder image">
                                                    </a>
                                                    <div class="media-body">
                                                        <div>
                                                            <h6 class="d-inline-block"><strong>Nombre: </strong>{{$categoria->nombre}}</h6>
                                                        </div>
                    
                                                        <div class="f-13 text-muted m-b-15">
                                                            fecha de creación: {{$categoria->created_at}}
                                                        </div>
                    
                                                        <p> <strong>Descripcion: </strong>{{$categoria->descripcion}}</p>
                                                        
                    
                                                    </div>
                                                </div>
                                            </div>
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
@endsection