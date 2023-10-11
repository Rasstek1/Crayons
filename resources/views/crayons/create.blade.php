<h1>Ajouter un crayon</h1>

    <form action="{{ route('crayons.store') }}" method="POST">
        @csrf
        <label for="nom">Type :</label>
        <input type="text" name="type" required>
        <br>
        <label for="nom">Marque :</label>
        <input type="text" name="marque" required>
        <br>
        <label for="nom">Couleur :</label>
        <input type="text" name="couleur" required>
        <br>
        <label for="quantite">Quantité :</label>
        <input type="number" name="quantite" required>
        <br>
        <label for="nom">Prix :</label>
        <input type="text" name="prix" required>
        <br>
        <button type="submit">Ajouter</button>
    </form>

    <a href="{{ route('crayons.index') }}">Retour à la liste des crayons</a>


