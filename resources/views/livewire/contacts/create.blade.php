<div class="container">
    <h2 class="mb-4 text-center">Adicionar Novo Contato</h2>

    <div class="border-0 rounded-4">
        <div class="card-body p-5">
            <div class="row">
                <div class="mb-4 col-12 col-md-6">
                    <label for="name" class="form-label fw-semibold">Nome *</label>
                    <input type="text" id="name" wire:model="contact.name" name="name" class="form-control shadow-sm rounded-3" required>
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="surname" class="form-label fw-semibold">Sobrenome</label>
                    <input type="text" id="surname" wire:model="contact.surname" name="surname" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="phone_personal" class="form-label fw-semibold">Telefone Pessoal *</label>
                    <input autocomplete="off" type="text" id="phone_personal" wire:model="phone.phone_personal" name="phone_personal" class="form-control shadow-sm rounded-3" required>
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="phone_work" class="form-label fw-semibold">Telefone Trabalho</label>
                    <input autocomplete="off" type="text" id="phone_work" wire:model="phone.phone_work" name="phone_work" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="phone_home" class="form-label fw-semibold">Telefone Residencial</label>
                    <input autocomplete="off" type="text" id="phone_home" wire:model="phone.phone_home" name="phone_home" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="email" class="form-label fw-semibold">E-mail Pessoal</label>
                    <input type="email" id="email" wire:model="emails.personal" name="email" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="email" class="form-label fw-semibold">E-mail Trabalho</label>
                    <input type="email" id="email" wire:model="emails.work" name="email" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="zipcode" class="form-label fw-semibold">CEP</label>
                    <input type="text" autocomplete="off" id="zipcode" wire:model.live="address.zipcode" name="zipcode" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="city" class="form-label fw-semibold">Cidade</label>
                    <input type="city" id="city" wire:model.live="address.city" name="city" class="form-control shadow-sm rounded-3">
                </div>
                <div class="mb-4 col-12 col-md-6">
                    <label for="state" class="form-label fw-semibold">Estado</label>
                    <input type="state" id="state" wire:model.live="address.state" name="state" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="street" class="form-label fw-semibold">Logradouro</label>
                    <input type="street" id="street" wire:model.live="address.street" name="street" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="street_number" class="form-label fw-semibold">Numero</label>
                    <input type="street_number" id="street_number" wire:model="address.street_number" name="street_number" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="neighborhood" class="form-label fw-semibold">Bairro</label>
                    <input type="neighborhood" id="neighborhood" wire:model.live="address.neighborhood" name="neighborhood" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="complement" class="form-label fw-semibold">Complemento</label>
                    <input type="complement" id="complement" wire:model="address.complement" name="complement" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="birthdate" class="form-label fw-semibold">Data de Nascimento</label>
                    <input type="date" id="birthdate" wire:model="contact.birthdate" name="birthdate" class="form-control shadow-sm rounded-3">
                </div>

                <div class="mb-4 col-12">
                    <label for="notes" class="form-label fw-semibold">Notas</label>
                    <textarea id="notes" wire:model="contact.notes" name="notes" class="form-control shadow-sm rounded-3" rows="3"></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-sm btn-danger rounded-3 shadow">Cancelar</button>
                    <button type="button" class="btn btn-sm btn-primary rounded-3 shadow" wire:click="store">Salvar Contato</button>
                </div>

            </div>
        </div>
    </div>
</div>

 <!-- Incluindo o jQuery Mask Plugin -->
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
