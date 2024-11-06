<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Estilo do fundo desfocado */
        .backdrop {
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            transition: backdrop-filter 0.3s ease;
        }

        /* Estilo e animação do menu */
        #internalMenu {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            transform: translateX(-100%);
            z-index: 1050; /* Para garantir que o menu apareça acima do conteúdo */
        }

        /* Menu visível */
        #internalMenu.show {
            display: block;
            transform: translateX(0);
        }

        /* Estilo dos links do menu */
        #internalMenu ul {
            list-style: none;
            padding: 20px 0;
            margin: 0;
        }

        #internalMenu ul li {
            padding: 10px 20px;
        }

        #internalMenu ul li a {
            text-decoration: none;
            color: #343a40;
            font-weight: bold;
        }

        #internalMenu ul li a:hover {
            color: #0d6efd;
        }

        /* Estilo do fundo e da transição */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            transition: opacity 0.3s ease;
        }

        .overlay.show {
            display: block;
            opacity: 1;
        }

        /* Ajustando o card */
        .card {
            position: relative;
            overflow: hidden; /* Para garantir que o menu não ultrapasse o card */
        }
    </style>
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <main class="flex-grow-1 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm w-100" style="max-width: 800px; max-height: 90vh;">
            <div class="card-body" style="overflow-y: auto; position: relative;">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Botão do menu colapsável -->
                    <button class="btn btn-dark" type="button" onclick="toggleMenu()">
                        ☰
                    </button>
                </div>

                <!-- Menu à esquerda (dentro do card) -->
                <div id="internalMenu">
                    <ul class="nav flex-column mb-3">
                        <li class="nav-item"><a href="/contacts" class="nav-link">Contatos</a></li>
                        <li class="nav-item"><a href="/contacts/create" class="nav-link">Novo Contato</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Configurações</a></li>
                    </ul>
                </div>

                <div>
                    {{ $slot ?? '' }}
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-light py-3 text-center mt-auto">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Lista de Contatos. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Overlay para escurecer o fundo -->
    <div id="overlay" class="overlay"></div>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('internalMenu');
            const overlay = document.getElementById('overlay');
            const body = document.body;

            // Alterna o menu
            menu.classList.toggle('show');
            overlay.classList.toggle('show');

            // Alterna o desfoque no fundo
            body.classList.toggle('backdrop');
        }

        // Fecha o menu se o overlay for clicado
        document.getElementById('overlay').addEventListener('click', function () {
            toggleMenu();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
