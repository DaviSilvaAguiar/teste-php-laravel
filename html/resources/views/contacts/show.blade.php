<p>{{ $contact->name }}</p>
<p>{{ $contact->contact }}</p>
<p>{{ $contact->email }}</p>
<a href="{{ route('contacts.edit', $contact->id) }}">Editar</a>
<form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>
