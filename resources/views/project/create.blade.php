<x-guest-layout>
    <form method="POST" action="{{ route('project.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Title')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
            <button type="submit">Guardar</button>
        </div>

        


    </form>
</x-guest-layout>


