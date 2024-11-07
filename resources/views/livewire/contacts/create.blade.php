<div class="container">
    <!-- Título da página -->
    <h2 class="mb-4 text-center">Adicionar Novo Contato</h2>

    <!-- Formulário de criação de contato -->
    <div class="border-0 rounded-4">
        <div class="card-body p-5">
            <div class="row">
                    <!-- Nome Completo -->
                <div class="mb-4">
                    <label for="name" class="form-label fw-semibold">Nome *</label>
                    <input type="text" id="name" name="name" class="form-control shadow-sm rounded-3" required>
                </div>

                <!-- Apelido -->
                <div class="mb-4">
                    <label for="surname" class="form-label fw-semibold">Sobrenome</label>
                    <input type="text" id="surname" name="surname" class="form-control shadow-sm rounded-3">
                </div>

                <!-- Telefone -->
                <div class="mb-4">
                    <label for="phone" class="form-label fw-semibold">Telefone *</label>
                    <input type="text" id="phone" name="phone" class="form-control shadow-sm rounded-3" required>
                </div>

                <!-- E-mail -->
                <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control shadow-sm rounded-3">
                </div>

                <!-- CEP -->
                <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">CEP</label>
                    <input type="email" id="email" name="email" class="form-control shadow-sm rounded-3">
                </div>

                <!-- cidade -->
                <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">Cidade</label>
                    <input type="email" id="email" name="email" class="form-control shadow-sm rounded-3">
                </div>
                <!-- estado -->
                <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">Estado</label>
                    <input type="email" id="email" name="email" class="form-control shadow-sm rounded-3">
                </div>

                <!-- endereço / logradouro -->
                <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">Endereço</label>
                    <input type="email" id="email" name="email" class="form-control shadow-sm rounded-3" placeholder="Logradouro">
                </div>

                <!-- Numero -->
                <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">Numero</label>
                    <input type="email" id="email" name="email" class="form-control shadow-sm rounded-3">
                </div>

                <!-- bairro -->
                <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">Bairro</label>
                    <input type="email" id="email" name="email" class="form-control shadow-sm rounded-3">
                </div>

                <!-- complemento -->
                <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">Complemento</label>
                    <input type="email" id="email" name="email" class="form-control shadow-sm rounded-3">
                </div>

                <!-- Data de Nascimento -->
                <div class="mb-4">
                    <label for="birthdate" class="form-label fw-semibold">Data de Nascimento</label>
                    <input type="date" id="birthdate" name="birthdate" class="form-control shadow-sm rounded-3">
                </div>

                <!-- Notas Adicionais -->
                <div class="mb-4">
                    <label for="notes" class="form-label fw-semibold">Notas</label>
                    <textarea id="notes" name="notes" class="form-control shadow-sm rounded-3" rows="3"></textarea>
                </div>

                {{-- <!-- Favorito -->
                <div class="mb-4 form-check">
                    <input type="checkbox" id="favorite" name="favorite" class="form-check-input">
                    <label for="favorite" class="form-check-label fw-semibold">Marcar como Favorito</label>
                </div> --}}

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-sm btn-danger rounded-3 shadow">Cancelar</button>
                    <button type="button" class="btn btn-sm btn-primary rounded-3 shadow">Salvar Contato</button>
                </div>

            </div>
        </div>
    </div>
</div>