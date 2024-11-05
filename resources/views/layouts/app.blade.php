<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Lista de Contatos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    <li class="nav-item"><a class="nav-link" href="/contacts">Contatos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contacts/create">Novo Contato</a></li>
                    <li class="nav-item">
                        @if (Auth::check())
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link p-0 text-white" style="text-decoration: none;">
                                    Sair
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login')}}" class="nav-link">Entrar / Registrar</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm w-100" style="max-width: 500px;">
            <div class="card-body">
                {{ $slot ?? '' }}
            </div>
        </div>
    </main>

    <footer class="bg-dark text-light py-3 text-center mt-auto">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Lista de Contatos. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
