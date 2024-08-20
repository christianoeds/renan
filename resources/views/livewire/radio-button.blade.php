<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-8 offset-col-2">
                <div class="d-flex justify-content-between">
                    <h1>Usuarios</h1>
                    <select wire:model.live="perPage">
                        <option value="5">5</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                    </select>
                    <input class="input-primary" type="text" placeholder="pesquise por nome ou email" wire:model.live="search"">
                </div>
                {{$this->selectedUser}}
                <hr>
                <table class="table mt-5">
                    <thead>
                    <tr>
                        <th></th>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($this->users as $item)
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input
                                        style="border-color: gray"
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault{{ $item->id }}"
                                        value="{{ $item->id }}"
                                        wire:change="selectUser('{{ $item->id }}')"
                                    >
                                </div>
                            </th>
                            <th>{{ $item->id }}</th>
                            <th>{{ $item->name }}</th>
                            <th>{{ $item->email }}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $this->users->links() }}
            </div>
        </div>
    </div>

</div>
