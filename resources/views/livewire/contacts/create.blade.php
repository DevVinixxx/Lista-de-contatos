<div class="container">
    <h2 class="mb-4 text-center">Adicionar Novo Contato</h2>

    <div class="border-0 rounded-4">
        <div class="card-body p-5">
            <div class="row">
                <div class="mb-4 col-12 col-md-6">
                    <label for="name" class="form-label fw-semibold">Nome *</label>
                    <input type="text" id="name" wire:model="data.name" name="name" class="form-control shadow-sm rounded-3" required>
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="surname" class="form-label fw-semibold">Sobrenome</label>
                    <input type="text" id="surname" wire:model="data.surname" name="surname" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="phone_personal" class="form-label fw-semibold">Telefone Pessoal *</label>
                    <input autocomplete="off" type="text" id="phone_personal" wire:model="data.number.phone_personal" name="phone_personal" class="form-control shadow-sm rounded-3" required>
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="phone_work" class="form-label fw-semibold">Telefone Trabalho</label>
                    <input autocomplete="off" type="text" id="phone_work" wire:model="data.number.phone_work" name="phone_work" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="phone_home" class="form-label fw-semibold">Telefone Casa</label>
                    <input autocomplete="off" type="text" id="phone_home" wire:model="data.number.phone_home" name="phone_home" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="email" class="form-label fw-semibold">E-mail</label>
                    <input type="email" id="email" wire:model="data.email" name="email" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="zipcode" class="form-label fw-semibold">CEP</label>
                    <input type="zipcode" id="zipcode" wire:model="data.zipcode" name="zipcode" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="city" class="form-label fw-semibold">Cidade</label>
                    <input type="city" id="city" wire:model="data.city" name="city" class="form-control shadow-sm rounded-3">
                </div>
                <div class="mb-4 col-12 col-md-6">
                    <label for="state" class="form-label fw-semibold">Estado</label>
                    <input type="state" id="state" wire:model="data.state" name="state" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="street" class="form-label fw-semibold">Endereço</label>
                    <input type="street" id="street" wire:model="data.street" name="street" class="form-control shadow-sm rounded-3" placeholder="Logradouro">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="street_number" class="form-label fw-semibold">Numero</label>
                    <input type="street_number" id="street_number" wire:model="data.street_number" name="street_number" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="neighborhood" class="form-label fw-semibold">Bairro</label>
                    <input type="neighborhood" id="neighborhood" wire:model="data.neighborhood" name="neighborhood" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="complement" class="form-label fw-semibold">Complemento</label>
                    <input type="complement" id="complement" wire:model="data.complement" name="complement" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="birthdate" class="form-label fw-semibold">Data de Nascimento</label>
                    <input type="date" id="birthdate" wire:model="data.birthdate" name="birthdate" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12">
                    <label for="notes" class="form-label fw-semibold">Notas</label>
                    <textarea id="notes" wire:model="data.notes" name="notes" class="form-control shadow-sm rounded-3" rows="3"></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-sm btn-danger rounded-3 shadow">Cancelar</button>
                    <button type="button" class="btn btn-sm btn-primary rounded-3 shadow" wire:click="alertA">Salvar Contato</button>
                </div>

            </div>
        </div>
    </div>
</div>

 <!-- Incluindo o jQuery Mask Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Função para filtrar apenas números
        function onlyNumbers(event) {
            // Remove qualquer caractere que não seja número
            event.target.value = event.target.value.replace(/\D/g, '');
        }
    
        // Seleciona os campos de telefone
        const phoneFields = document.querySelectorAll('#phone_personal, #phone_work, #phone_home');
    
        // Adiciona um evento 'input' para cada campo
        phoneFields.forEach(field => {
            field.addEventListener('input', onlyNumbers);
        });
    });
</script>
