<div>

    {{ auth()->id() }}

    <h1>Register</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    <div>
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div>
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input name="email_confirmation" placeholder="Email confirmation">
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