<div>
    <div class="container d-flex justify-content-center" style="width: 39%">
        <div class="row">
            <div class="row">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="card bor" style="width: 30rem;" class="mb-10">
                            <div class="card-body">
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="card text-bg-secondary p-3">
                                    <h5 class="card-header text-center">Cadastro de Ambiente</h5>
                                    <div class="card-body">
                                        <form wire:submit.prevent="store">
                                            <div class="mt-1 mb-3">
                                                <label for="nome" class="form-label">Nome do Ambiente</label>
                                                <input type="text" class="form-control" id="nome"
                                                    placeholder="Ex.: Sala de Reunião"
                                                    wire:model.defer="nome">
                                                @error('nome')
                                                    <span class="text-warning small">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="codigo" class="form-label">Código</label>
                                                <input type="text" class="form-control" id="codigo"
                                                    placeholder="Ex.: CD-123"
                                                    wire:model.defer="codigo">
                                                @error('codigo')
                                                    <span class="text-danger small">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="tipo">Tipo</label>
                                                <input type="text" class="form-control" id="tipo"
                                                    placeholder="Ex.: Tipo"
                                                    wire:model.defer="tipo">
                                                @error('tipo')
                                                    <span class="text-danger small">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="descricao">Descrição</label>
                                                <input type="text" class="form-control" id="descricao"
                                                    placeholder="Ex.: Descrição detalhada"
                                                    wire:model.defer="descricao">
                                                @error('descricao')
                                                    <span class="text-danger small">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="status">Status</label>
                                                @error('status')
                                                    <span class="text-danger small">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="status" wire:model.defer="status">
                                                <label class="form-check-label" for="status">Status do
                                                    Ambiente</label>
                                            </div>

                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-success">Cadastrar</button>
                                                <a href="{{ route('ambiente.list') }}" class="btn btn-danger">Cancelar</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
