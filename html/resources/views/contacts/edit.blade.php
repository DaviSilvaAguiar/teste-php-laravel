<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $contact->name }}" required>
    <input type="text" name="contact" value="{{ $contact->contact }}" required>
    <input type="email" name="email" value="{{ $contact->email }}" required>
    <button type="submit">Atualizar</button>
</form>
