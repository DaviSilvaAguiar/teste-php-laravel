<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato</title>
</head>
<body>
    <h1>Editar Contato</h1>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $contact->name }}" required><br>

        <label for="contact">Contato:</label>
        <input type="text" name="contact" id="contact" value="{{ $contact->contact }}" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $contact->email }}" required><br>

        <button type="submit">Salvar alterações</button>
    </form>
</body>
</html>

