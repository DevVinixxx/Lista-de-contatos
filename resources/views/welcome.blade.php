@extends('layouts.app')

@section('title', 'Lista de Contatos')

@section('content')

    @if (Auth::check())
        <livewire:contacts.index/>
    @else    
        <h1>Contatos</h1>
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
    @endif
    
@endsection