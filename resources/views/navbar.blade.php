<div class="row">
    <div class="col"><a href="{{route('liste_velo')}}" type="button" class="btn btn-primary">Liste des Vélos</a>                    </div>
    <div class="col"><a type="button" class="btn btn-primary">Indisponible</a></div>
    <div class="col"><a type="button" class="btn btn-primary">Mon historique</a></div>
    <div class="col">
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Administration
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Liste des vélos</a></li>
              <li><a class="dropdown-item" href="{{route('ajouter_velo')}}">Ajouter un vélo</a></li>
              <li><a class="dropdown-item" href="#">Liste des utilisateurs</a></li>
              
            </ul>
          </div>
    </div>
</div>