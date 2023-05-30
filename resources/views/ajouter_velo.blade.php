@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenue') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('navbar') 
                </div>
               
            </div>
            <div class="container">
                <form action="{{ route('velos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Marque</label>
                      <input name="marque" type="text" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Adresse</label>
                        <input name="adresse" type="text" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Code postal</label>
                        <input name="zip"type="text" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pays</label>
                        <input name="pays" type="text" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <input name="description" type="text" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Photos</label>
                        <input type="file" name="photos[]" class="form-control" >
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
