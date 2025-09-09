<div>
    {{ auth()->id() }}

    <h1>Login</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    <div>
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div>
                <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input type="password" name="password" placeholder="Password">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</div>