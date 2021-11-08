
  @extends("layouts.master")



  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste Des Etudiants Inscrits</h3>

<div class="mt-4">
<div class="d-flex justify-content-between md-2">
{{ $etudiants->links() }}
<div> <a href="{{route('etudiant.create')}}" class="btn btn-primary ">Ajouter un nouvel Etudiant</a> </div>
</div>
<table class="table table-bordered table-hover ">
  <thead>
    <tr>
      <th scope="col">Identifiant</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Classe</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach ($etudiants as $etudiant )


      <th scope="row">{{ $loop->index }}</th>
      <td>{{ $etudiant->nom }}</td>
      <td>{{ $etudiant->prenom }}</td>
      <td>{{ $etudiant->classe->libelle }}</td>

    <td>
       <a hef="#" class="btn btn-info">Modifiers</a>
       <a hef="#" class="btn btn-danger">Supprimer</a>
    </td>
     </tr>
  @endforeach
  </tbody>

</table>


 </div>
 </div>

