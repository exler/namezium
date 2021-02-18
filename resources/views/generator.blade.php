<x-app-layout>
    <div id="generator">
        <div id="generator-details" class="text-center mb-4">
            <h2 class="text-2xl font-bold">{{ $generator->title }}</h2>
        </div>
        <div id="names" class="border-solid border-2 rounded-sm lg:w-3/4 pt-2 m-auto">
            <div class="sm:flex sm:items-center px-2">
                <div class="flex-grow">
                    <div class="w-full">
                        @forelse ($generator->names as $name)
                        <a href="{{ route('name', urlencode($name->value)) }}" class="flex cursor-pointer my-1 hover:bg-blue-500 hover:text-gray-100 rounded">
                            <div class="w-8 h-10 text-center py-1">
                                <p class="text-3xl p-0 text-green-dark">&bull;</p>
                            </div>
                            <div class="w-3/4 h-10 py-3 px-1">
                                <p class="hover:text-blue-dark">{{ $name->value }}</p>
                            </div>
                            <div class="w-1/4 h-10 text-right p-3 hidden md:block">
                                <p class="text-sm text-light-blue">Check availability!</p>
                            </div>
                        </a>
                        @empty
                        <p class="text-center">No names are available for this generator yet!</p>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="sm:flex bg-grey-light sm:items-center px-2 py-4">
                <div class="flex-grow text-center">
                    <a href="#" class="flex items-center lg:w-1/5 m-auto p-2 bg-blue-200 rounded-lg shadow-xs cursor-pointer hover:bg-blue-500 hover:text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                        </svg>
                        <div>
                            <p class="text-xs font-medium ml-2">
                                Generate new
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
</x-app-layout>
