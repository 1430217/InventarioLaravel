@extends('layouts.template')

@section('content')
<div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-listine-dots bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Agregar una categoria</h4>
                        <span>En esta pagina se podrá agregar una categoria que no esté el sistema.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Llene los datos del formulario para agregar una categoria.</h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-spinner-alt-5"></i>
                        </div>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tab-content">
                                <div>
                                    <form class="md-float-material card-block" action="/categorias" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icofont icofont-page"></i></span>
                                                    <input type="text" class="form-control" placeholder="Nombre de la categoria" name="nombre">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icofont icofont-notepad"></i></span>
                                                    <textarea name="descripcion" class="form-control" placeholder="Descripcion" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-sm-12">
                                                <div class="text-center m-t-20">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Agregar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> 
@endsection