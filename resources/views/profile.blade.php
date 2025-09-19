<div>
    <h1>Profile</h1>

    <div>
        <form action="{{ route('profile') }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <input name="name" placeholder="Nome" value="{{ old('name', $user->name) }}">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <textarea name="description" placeholder="Breve resumo" value="{{ old('description', $user->description) }}"></textarea>
                @error('description')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <span>biolinks.com.br/</span>
                <input name="handler" placeholder="@seulink" value="{{ old('handler',$user->handler) }}">
                @error('handler')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <a href="{{ route("dashboard") }}">Cancelar</a>
            <button type="submit">Update</button>
        </form>
    </div>
</div>