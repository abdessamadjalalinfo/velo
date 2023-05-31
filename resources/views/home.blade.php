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
                <div class="container">
                    <div class="row">
                        @foreach($velos as $velo)
                        <div class="col-3">
                           
                            <div class="card" style="width: 12rem;">
                                @foreach ($velo->photos as $photo)
                                        <img src="{{ asset('images/'.$photo->chemin) }}" class="card-img-top" alt="Photo du vélo">
                                @endforeach  <div class="card-body">
                                  <h6 class="card-title">{{$velo->marque}}</h6>
                                  <a href="#" class="btn btn-primary">Réserver</a>
                                </div>
                            </div>
                           
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
