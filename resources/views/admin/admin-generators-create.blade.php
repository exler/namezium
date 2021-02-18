<x-app-layout>
    <x-admin-tabs />

    <div>
        @if (isset($generator))
        <form method="POST" action="{{ route('generator.update', $generator->id) }}">
            @method('PUT')
            @else
            <form method="POST" action="{{ route('generator.store') }}">
                @endif
                @csrf

                <div>
                    <x-label for="title">Title</x-label>
                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', isset($generator) ? $generator->title : '')" required autofocus />
                </div>
                <div class="mt-4">
                    <x-label for="categories">Categories</x-label>
                    <x-select id="categories" class="block mt-1 w-full" name="category_id" required>
                        @forelse ($categories as $category)
                        <option value="{{ $category->id }}" @if(isset($generator) && $category==$generator->category) selected @endif>{{ $category->title }}</option>
                        @empty
                        <option disabled>No categories available!</option>
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
