@extends('layouts.template')

@section('content')
<div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-basket bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Productos / Inventario</h4>
                        <span>En esta pagina se podrá ver los diferentes artuculos o productos que estén en el inventario.</span>
                        <span>Productos registrados: </span> <strong></strong><br><br>
                        <a href="index.php?action=addProducto"><button class="btn btn-success">Agregar un producto</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="page-body">
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card prod-view">
                        <div class="prod-item text-center">
                            <div class="prod-img">
                                <!-- <div class="option-hover">
                                    <a href="#">
                                        <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                            <i class="icofont icofont-eye-alt f-20"></i>
                                        </button>
                                    </a>
                                </div>-->
                                
                                <a href="ir al producto" class="hvr-shrink">
                                    <img src="imagen" class="img-fluid o-hidden" width="500" height="500" alt="Imagen del articulo">
                                </a>    
        
                            <div class="p-new"><a href="">Stock: {{$producto->stock}}</a></div>
                            </div>
        
                            <div class="prod-info">
                                <a href="ir a producto" class="txt-muted"><h4>{{$producto->nombre_producto}}</h4></a>
                                <div class="m-b-10">
                                    <a class="text-muted f-w-600">Categoria: {{$producto->categoria}}</a><
                                    <a class="text-muted f-w-600">Codigo: {{$producto->codigo}}</a>
                                </div>
        
                                <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>{{$producto->precio}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                
        </div>
    </div>



    
@endsection