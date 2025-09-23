<x-layout.app>
    <x-container>
        <x-card title="Create a new link">
            <x-form :route="route('links.create')" post id="form">
                <x-input name="link" placeholder="Link" type="text" value="{{ old('link') }}" />
                <x-input name="name" placeholder="Name" type="text" value="{{ old('name') }}" />
            </x-form>

            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancelar</x-a>
                <x-button type="submit" form="form">Create a new link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>