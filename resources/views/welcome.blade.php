@extends('layouts.app')

@section('title', 'Lista de Contatos')

@section('content')
    <h1>Contatos</h1>
    
    <!-- Aqui vai a lista de contatos ou qualquer outro conteúdo -->
    @if(empty($contacts))
        <p>Não há contatos cadastrados.</p>
    @else
        <ul class="list-group">
            @foreach ($contacts as $contact)
                <li class="list-group-item">
                    {{ $contact->name }} - {{ $contact->phone }}
                </li>
            @endforeach
        </ul>
    @endif
@endsection