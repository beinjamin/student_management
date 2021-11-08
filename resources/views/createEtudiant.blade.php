
    @extends("layouts.master")



    <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Ajout d'un nouvel Etudiant</h3>

    <div class="mt-4">

<form>

@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom de l'etudiant</label>
    <input type="text" class="form-control" >
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prénom</label>
    <input type="password" class="form-control">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Classe</label>
    <select class="form-control">
    <option value=""></option>
    @foreach ($classes as $classe )
    <option value="{{$classe->id}}">{{$classe->libelle}} </option>
    @endforeach
    <select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
    </div>

