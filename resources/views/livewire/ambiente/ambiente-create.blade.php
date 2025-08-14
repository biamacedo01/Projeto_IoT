<div class="mt-0" style="background-color: #ece4db">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="font-family-roboto col-md-5 card mx-auto  opacity-100 shadow-lg text-light"
        style="background-color: #f4c6e0">
        <h3 class="card-title mt-5 text-center text-danger-emphasis"><strong>Cadastre-se</strong></h3>

        <div class="card-body mx-4">
            <form wire:submit.prevent="store">
                <div class="mt-1 mb-5">
                    <label for="nome" class="form-label"></label>
                    <div class="mt-1 mb-3 ">
                        <label for="nome"
                            class="form-label"class="card-title mt-5 text-center text-danger-emphasis">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome"
                            wire:model.defer="nome">
                        @error('nome')
                            <span class="text-warning small">{{ $message }}</span>
                        @enderror
                    </div>
                         
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <div class="input-group ">
                            <input type="descricao" name="descricao" id="descricao" class="form-control" rows="5"
                                wire:model.defer="descricao"></input>
                            @error('descricao')
                                <span class="text-warning small">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    
                <div class="mb-3">
                    <label for="text" class="form-label">Status</label>
                    <div class="input-group ">
                        <select class="form-select" aria-label="Default select example" wire:model.defer="cargo">
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                        @error('cargo')
                            <span class="text-warning small">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="mb-3 text-center">
                        <button type="submit" class="btn text-light col-md-11" style="background-color: #f4b6c2">
                            <strong>Avançar</strong></button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
