<x-app-layout>
    <x-admin-tabs />

    <div>
        <form method="POST" action="{{ route('user.store') }}">
            @csrf

            <div>
                <x-label for="username">Username</x-label>
                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>
            <div>
                <x-label for="password">Password</x-label>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>
            <div class="block mt-4">
                <label for="admin" class="inline-flex items-center">
                    <input id="admin" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="admin">
                    <span class="ml-2 text-sm text-gray-600">Admin</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    Submit
                </x-button>
            </div>
        </form>
    </div>
</x-app-layout>
