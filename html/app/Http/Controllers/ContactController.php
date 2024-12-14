<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Mostrar todos os contatos
    public function index()
    {
        $contacts = Contact::all(); // Pegando todos os contatos
        return view('contacts.index', compact('contacts')); // Retorna a view com os contatos
    }

    // Exibir o formulário para criar um novo contato
    public function create()
    {
        return view('contacts.create'); // Retorna a view de criação
    }

    // Armazenar um novo contato no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5',
            'contact' => 'required|numeric|digits:9|unique:contacts',
            'email' => 'required|email|unique:contacts',
        ]);

        Contact::create($request->all()); // Cria o contato no banco
        return redirect()->route('contacts.index'); // Redireciona para a lista de contatos
    }

    // Exibir os detalhes de um contato
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact')); // Exibe a view com os detalhes do contato
    }

    // Exibir o formulário para editar um contato
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact')); // Retorna a view de edição
    }

    // Atualizar o contato no banco de dados
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|string|min:5',
            'contact' => 'required|numeric|digits:9|unique:contacts,contact,' . $contact->id,
            'email' => 'required|email|unique:contacts,email,' . $contact->id,
        ]);

        $contact->update($request->all()); // Atualiza o contato no banco
        return redirect()->route('contacts.index'); // Redireciona para a lista de contatos
    }

    // Deletar o contato (soft delete)
    public function destroy(Contact $contact)
    {
        $contact->delete(); // Deleta o contato
        return redirect()->route('contacts.index'); // Redireciona para a lista de contatos
    }
}

