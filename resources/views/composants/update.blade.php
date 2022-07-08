<!-- Modal Update -->
<div class="modal fade" id="staticBackdrop{{$livre->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdrop{{$livre->id}}">Mettre a jour</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/livres" method="POST">
                    @csrf
                    <label for="titre"> Modifier le Titre:</label></br>
                    <input type="text" id="titre" name="titre" value="{{$livre->titre}}">
                    </br>
                    <label for="prenom">Modifier le Prénom:</label></br>
                    <input type="text" id="prenom" name="prenom" value="{{$livre->auteur->prenom}}">
                    </br>
                    <label for="nom">Modifier le Nom:</label></br>
                    <input type="text" id="nom" name="nom" value="{{$livre->auteur->nom}}"></br>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->