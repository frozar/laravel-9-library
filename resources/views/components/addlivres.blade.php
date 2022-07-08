<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Nouveau livre
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Prenons le temps de lire!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/livres" method="POST">

                @csrf
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

            </form>
        </div>
    </div>
</div>