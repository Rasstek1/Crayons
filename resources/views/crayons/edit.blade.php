<h1>Modifier un crayon</h1>

    <form action="{{ route('crayons.update', $crayon->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nom">Type :</label>
        <input type="text" name="type" value="{{ $crayon->type }}" required>
        <br>

        <label for="nom">Marque :</label>
        <input type="text" name="marque" value="{{ $crayon->marque }}"  required>
        <br>
        <label for="nom">Couleur :</label>
        <input type="text" name="couleur"  required>
        <br>
        <label for="quantite">Quantité :</label>
        <input type="number" name="quantite" value="{{ $crayon->quantite }}" required>
        <br>

        <label for="nom">Prix :</label>
        <input type="text" name="prix"  value="{{ $crayon->prix }}"  required>
        <br>
        <button type="submit">Enregistrer les modifications</button>
    </form>

    <a href="{{ route('crayons.index') }}">Retour à la liste des crayons</a>


