<x-app-layout>
    <x-admin-tabs />

    <div class="mt-2">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Value</th>
                    <th class="text-left p-3 px-5">Generator</th>
                    <th></th>
                </tr>
                @forelse ($names as $name)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">
                        <a href="{{ route('name', urlencode($name->value)) }}">{{ $name->value }}</a>
                    </td>
                    <td class="p-3 px-5">{{ $name->generator->title }}</td>
                    <td class="p-3 px-5 flex justify-end">
                        <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
                        <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                    </td>
                </tr>
                @empty
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">No names!</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{ $names->links() }}
</x-app-layout>
