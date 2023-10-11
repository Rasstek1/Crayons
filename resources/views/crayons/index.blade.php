 <h1>Liste des crayons</h1>

    <table>
        <thead>
        <tr>
            <th>Type</th>
            <th>Marque</th>
            <th>Couleur</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($crayons as $crayon)
            <tr>
                <td>{{ $crayon->type }}</td>
                <td>{{ $crayon->marque }}</td>
                <td>{{ $crayon->couleur }}</td>
                <td>{{ $crayon->quantite }}</td>
                <td>{{ $crayon->prix }}</td>
                <td>
                    <a href="{{ route('crayons.edit', $crayon->id) }}">Modifier</a>
                    <form action="{{ route('crayons.destroy', $crayon->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('crayons.create') }}">Ajouter un crayon</a>

