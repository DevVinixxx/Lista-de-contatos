<div class="container my-5">
    <!-- Boas-vindas ao usuário -->
    <h2 class="mb-4">Bem-vindo, {{ Auth::user()->name }}!</h2>

    <!-- Visão Geral dos Contatos -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm text-center p-3">
                <h5>Total de Contatos</h5>
                <p class="display-6">
                    {{ $contacts->count() > 0 ? $contacts->count() : 'Nenhum contato cadastrado ainda' }}
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm text-center p-3">
                <h5>Favoritos</h5>
                <p class="display-6">{{ count($favoritos) }}</p>
            </div>
        </div>
    </div>

    <!-- Ações Rápidas -->
    <div class="mb-4">
        <a href="/contacts/create" class="btn btn-primary">Novo Contato</a>
        <a href="/contacts" class="btn btn-secondary">Ver Contatos</a>
        <a href="/profile" class="btn btn-outline-dark">Meu Perfil</a>
    </div>

    <!-- Contatos Recentes ou Favoritos -->
    <h3>Contatos Recentes</h3>
    <ul class="list-group mb-4">
        @forelse($recentContacts as $contact)
            <li class="list-group-item">
                {{ $contact->name }} - {{ $contact->phone }}
            </li>
        @empty
            <li class="list-group-item">Nenhum contato recente.</li>
        @endforelse
    </ul>
</div>
