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
            
        </div>
        <br>
        <div class="container">
            <br>
            <div class="row">
                <br>
                <div class="col-6">
                   
                    <div class="card" style="width: 25rem;">
                        @foreach ($velo->photos as $photo)
                                <img src="{{ asset('images/'.$photo->chemin) }}" class="card-img-top" alt="Photo du vélo">
                        @endforeach  <div class="card-body">
                          <h6 class="card-title">
                            <strong>{{$velo->marque}}</strong>
                            </h6>
                        </div>
                    </div>
                   
                </div>
                <br>
                <div class="col-6">
                    <ul class="list-group">
                        <li class="list-group-item">Adresse : {{$velo->adresse}}</li>
                        <li class="list-group-item">Code Postal : {{$velo->zip}}</li>
                        <li class="list-group-item">Pays : {{$velo->pays}}</li>
                        <li class="list-group-item">Description : {{$velo->description}}</li>
                        
                        <li class="list-group-item">
                            <form action="{{route('reserver')}}">
                                <input type="hidden" name="velo_id" value="{{$velo->id}}">
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Début</label>
                                  <input name="debut" type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Fin</label>
                                    <input name="fin" type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                               
                                
                                <button type="submit" class="btn btn-primary">réserver</button>
                              </form>
                        </li>
  
                    </ul>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
