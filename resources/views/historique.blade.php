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
            <div class="row">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Marque</th>
                        <th scope="col">Date debut</th>
                        <th scope="col">Date Fin</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($locations as $location)
                      <tr>
                        <td> <img width="50"   src="{{ asset('images/'.$location->velo->photos()->first()->chemin)}}"></td>
                        <th scope="row">{{$location->velo->marque}}</th>
                        <td>{{$location->debut}}</td>
                        <td>{{$location->fin}}</td>
                       
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
               
                
               
            </div>
        </div>
    </div>
</div>
@endsection
