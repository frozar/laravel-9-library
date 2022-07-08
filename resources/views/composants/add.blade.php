<!-- Modal Créer -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ajouter un livre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/livres" method="POST">
                    @csrf
                    <label for="titre">Titre:</label></br>
                    <input type="text" id="titre" name="titre" required>
                    </br>
                    <label for="prenom">Prénom:</label></br>
                    <input type="text" id="prenom" name="prenom" required>
                    </br>
                    <label for="nom">Nom:</label></br>
                    <input type="text" id="nom" name="nom" required></br>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->