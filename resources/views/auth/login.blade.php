<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" placeholder="Email" type="email" value="{{ old('email') }}" />
                <x-input name="password" placeholder="Senha" type="password" />
            </x-form>

            <x-slot:actions>
                <x-a :href="route('register')">I need to create a new account!</x-a>
                <x-button type="submit" form="login-form">Login</x-button>
            </x-slot:actions>

            @if (session('message'))
                <div class="alert alert-error mb-3">{{ session('message') }}</div>
            @endif
        </x-card>

    </x-container>
</x-layout.app>