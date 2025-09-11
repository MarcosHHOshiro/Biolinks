<div>
    <h1>Criar um link</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    <div>
        <form action="{{ route('links.create') }}" method="Post">
            @csrf

            <div>
                <input type="text" name="link" placeholder="Link">
                @error('link')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input type="text" name="name" placeholder="Nome">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <button>Salvar</button>
        </form>
    </div>
</div>