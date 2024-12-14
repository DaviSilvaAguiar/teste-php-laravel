@foreach ($contacts as $contact)
    <p>{{ $contact->name }} - {{ $contact->contact }} - {{ $contact->email }}</p>
    <a href="{{ route('contacts.edit', $contact->id) }}">Editar</a>
    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endforeach
