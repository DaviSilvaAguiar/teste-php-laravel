<!-- resources/views/contacts/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>
<body>
    <h1>Lista de Contatos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Contato</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->contact }}</td>
            <td>{{ $contact->email }}</td>
            <td>
                <a href="{{ route('contacts.show', $contact->id) }}">Detalhes</a> |
                <a href="{{ route('contacts.edit', $contact->id) }}">Editar</a> |
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('contacts.create') }}">Adicionar novo contato</a>
</body>
</html>

