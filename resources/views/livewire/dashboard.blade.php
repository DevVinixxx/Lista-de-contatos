<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="my-4">Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total de Contatos</h5>
                    <p class="card-text">Você tem <strong>22</strong> contatos cadastrados.</p>
                    <a href="/contacts" class="btn btn-primary">Ver Contatos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Contatos Favoritos</h5>
                    <p class="card-text">Você tem <strong>2</strong> contatos favoritos.</p>
                    <a href="/contacts/favorites" class="btn btn-primary">Ver Favoritos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Último Contato Adicionado</h5>
                    <p class="card-text">O último contato adicionado foi <strong>maria joaquina</strong>.</p>
                    <a href="/contacts/idDoUltimoContato" class="btn btn-primary">Ver Detalhes</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="my-4">Atividade Recente</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Data de Adição</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($recentContacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->created_at->format('d/m/Y') }}</td>
                            </tr>
                        @endforeach --}}
                        <tr>
                            <td>Joana</td>
                            <td>joaninha@mail.com</td>
                            <td>22/01/2002</td>
                            {{-- <td>{{ $contact->created_at->format('d/m/Y') }}</td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
