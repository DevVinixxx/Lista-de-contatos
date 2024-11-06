<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="my-4">Bem-vindo ao seu Perfil</h1>
        </div>
    </div>

    <!-- Exibindo informações do usuário -->
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    {{-- <img src="{{ asset('images/' . Auth::user()->photo) }}" alt="Foto do Usuário" class="img-fluid rounded-circle" style="max-width: 150px; height: 150px;"> --}}
                    <h5 class="card-title mt-3">{{ Auth::user()->name }}</h5>
                    <p class="card-text">{{ Auth::user()->email }}</p>
                    <p class="card-text">Membro desde: {{ Auth::user()->created_at->format('d/m/Y') }}</p>
                    <a href="/profile/edit" class="btn btn-primary">Editar Perfil</a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Atividade Recente</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tipo de Atividade</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Alteração de Contato</td>
                                    <td>22/01/2024</td>
                                    <td>Concluído</td>
                                </tr>
                                <tr>
                                    <td>Adição de Novo Contato</td>
                                    <td>20/01/2024</td>
                                    <td>Concluído</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
