<div class="row">
    <div class="col"><a href="{{route('home')}}" type="button" class="btn btn-primary">Liste des Vélos</a>                    </div>
    <div class="col"><a href="{{route('indisponible')}}" type="button" class="btn btn-primary">Indisponible</a></div>
    <div class="col"><a href="{{route('historique')}}" type="button" class="btn btn-primary">Mon historique</a></div>
    @if(Auth::user()->type=="admin")
    <div class="col">
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Administration
            </button>
            <ul class="dropdown-menu">
             
              <li><a class="dropdown-item" href="{{route('ajouter_velo')}}">Ajouter un vélo</a></li>
              <li><a class="dropdown-item" href="{{route('utilisateurs')}}">Liste des utilisateurs</a></li>
              
            </ul>
          </div>
    </div>
    @endif
</div>