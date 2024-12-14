<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Contato</title>
</head>
<body>
    <h1>Detalhes do Contato</h1>
    <p><strong>Nome:</strong> {{ $contact->name }}</p>
    <p><strong>Contato:</strong> {{ $contact->contact }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>

    <a href="{{ route('contacts.edit', $contact->id) }}">Editar</a> |
    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>

    <br><br>
    <a href="{{ route('contacts.index') }}">Voltar para a lista de contatos</a>
</body>
</html>
