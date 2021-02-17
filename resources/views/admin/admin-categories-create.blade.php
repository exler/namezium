<x-app-layout>
    <x-admin-tabs />

    <div>
        @if ($category->exists)
        <form method="POST" action="{{ route('category.update', $category->id) }}">
            @method('PUT')
            @else
            <form method="POST" action="{{ route('category.store') }}">
                @endif
                @csrf

                <div>
                    <x-label for="title">Title</x-label>
                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $category->exists ? $category->title : '')" required autofocus />
                </div>
                <div class="mt-4">
                    <x-label for="description">Description</x-label>
                    <x-textarea id="description" class="block mt-1 w-full" type="text" name="description" required>
                        {{ old('description', $category->exists ? $category->description : '') }}
                    </x-textarea>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-3">
                        Submit
                    </x-button>
                </div>
            </form>
    </div>
</x-app-layout>
