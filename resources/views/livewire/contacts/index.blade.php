<div class="container my-5">
    <!-- Barra de ações rápidas -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Seus Contatos</h2>
        <a href="#" class="btn btn-primary">+ Adicionar Contato</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if($contacts->count() > 0)
                <ul class="list-group list-group-flush">
                    @foreach($contacts as $contact)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">{{ $contact->name }}</h5>
                                <small>{{ $contact->phone }}</small>
                            </div>
                            <div>
                                <a href="#" class="btn btn-sm btn-outline-info">Detalhes</a>
                                <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                                <form action="#" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Excluir</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-center text-muted my-3">Nenhum contato cadastrado ainda.</p>
            @endif
        </div>
    </div>
</div>