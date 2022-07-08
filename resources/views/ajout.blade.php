{{--
###################### BOUTON POP-UP FORMULAIRE TITRE DU LIVRE ET AUTEUR ###########################
--}}


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
    data-bs-whatever="@getbootstrap">Ajouter un livre et un auteur</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/livres" method="POST">
                    {{-- {{ route('/inscription') }} --}}
                    @csrf

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Titre</label>
                        <input type="text" name="titre" class="form-control" id="recipient-name" placeholder="Titre">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Prénom</label>
                        <input type="text" name="prenom" class="form-control" id="recipient-name" placeholder="Prénom">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" id="recipient-name" placeholder="Nom">
                    </div>
                    <input type="submit">

                </form>
            </div>

        </div>
    </div>
</div>