<x-app-layout>
    <x-admin-tabs />

    <div>
        @if ($name->exists)
        <form method="POST" action="{{ route('name.update', $name->id) }}">
            @method('PUT')
            @else
            <form method="POST" action="{{ route('name.store') }}">
                @endif
                @csrf

                <div>
                    <x-label for="value">Value</x-label>
                    <x-input id="value" class="block mt-1 w-full" type="text" name="value" :value="old('value', $name->exists ? $name->value : '')" required autofocus />
                </div>
                <div class="mt-4">
                    <x-label for="generators">Generators</x-label>
                    <x-select id="generators" class="block mt-1 w-full" name="generator_id" required>
                        @forelse ($generators as $generator)
                        <option value="{{ $generator->id }}" @if($name->exists && $generator==$name->generator) selected @endif>{{ $generator->title }}</option>
                        @empty
                        <option disabled>No generator available!</option>
                        @endforelse
                    </x-select>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-3">
                        Submit
                    </x-button>
                </div>
            </form>
    </div>
</x-app-layout>
