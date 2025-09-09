<div>
    <h1>Criar um link</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    <div>
        <form action="{{ route('links.store') }}" method="POST">
            @csrf

            <div>
                <input type="text" name="link" placeholder="Link" value="{{ old('link') }}">
                @error('link')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
                @error('nome')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <button>Salvar</button>
        </form>
    </div>
</div>