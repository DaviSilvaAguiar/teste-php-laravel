<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Contato</title>
</head>
<body>
    <h1>Criar Novo Contato</h1>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="contact">Contato:</label>
        <input type="text" name="contact" id="contact" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
