<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updatelivres{{$livre->id}}">
    modifier
</button>
<!-- Modal -->
<div class="modal fade" id="updatelivres{{$livre->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">modifier livre!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/livres/{{$livre->id}}" method="POST">



                @csrf
                <label for="titre">Titre:</label></br>
                <input type="text" id="titre" name="titre" value="{{$livre->titre}}" required>

                <input type="submit">



            </form>
        </div>
    </div>
</div>