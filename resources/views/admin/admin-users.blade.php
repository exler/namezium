<x-app-layout>
    <x-admin-tabs />

    <div class="mt-2">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Username</th>
                    <th class="text-left p-3 px-5">Admin</th>
                    <th></th>
                </tr>
                @forelse ($users as $user)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{ $user->username }}</td>
                    <td class="p-3 px-5">
                        <div class="bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                            <svg class="fill-current w-4 h-4 text-green-500 pointer-events-none @if(!$user->admin) hidden @endif" viewBox="0 0 20 20">
                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                            </svg>
                        </div>
                    </td>
                    <td class="p-3 px-5 flex justify-end">
                        <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
                        <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                    </td>
                </tr>
                @empty
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">No users!</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{ $users->links() }}
</x-app-layout>
