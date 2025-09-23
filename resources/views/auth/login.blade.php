<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" label="Email" type="email" :value="old('email')" required autofocus />
                <x-input name="password" placeholder="Senha" type="password" :value="old('password')" required />

            </x-form>

            <x-slot:actions>
                <x-button form="login-form">Login</x-button>
            </x-slot:actions>
        </x-card>

    </x-container>

    <div class="mx-auto flex justify-center items-center min-h-screen">
        <div class="card bg-base-100 w-96 shadow-xl">
            {{ auth()->id() }}
            <div class="card-body">

                <h1 class="card-title">Login</h1>

                @if ($message = session()->get('message'))
                    <div>
                        {{ session('message') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST" id="login-form">
                    @csrf

                    <div class="mb-3">
                        <input class="input input-bordered" type="text" name="email" placeholder="Email"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="text-sm text-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input class="input input-bordered" type="password" name="password" placeholder="Password">
                        @error('password')
                            <div class="text-sm text-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="card-actions">
                        <button type="submit" class="btn btn-primary" form="login-form">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-layout.app>