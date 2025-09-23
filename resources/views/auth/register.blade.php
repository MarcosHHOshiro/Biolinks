<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" placeholder="Name" type="text" value="{{ old('name') }}" />
                <x-input name="email" placeholder="Email" type="email" value="{{ old('email') }}" />
                <x-input name="email_confirmation" placeholder="Email confirmation" type="email" />
                <x-input type="password" name="password" placeholder="Password" />
            </x-form>

            <x-slot:actions>
                <x-a :href="route('login')">Already have an account? Log in</x-a>
                <x-button type="submit" form="register-form">Register</x-button>
            </x-slot:actions>

            @if (session('message'))
                <div class=" alert alert-error mb-3">{{ session('message') }}</div>
            @endif
        </x-card>

    </x-container>
</x-layout.app>