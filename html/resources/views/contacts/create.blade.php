<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome" required>
    <input type="text" name="contact" placeholder="Contato" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Adicionar</button>
</form>
