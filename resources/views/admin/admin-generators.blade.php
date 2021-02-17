<x-app-layout>
    <x-admin-tabs page="generator" />

    <div>
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Title</th>
                    <th class="text-left p-3 px-5">Slug</th>
                    <th class="text-left p-3 px-5">Description</th>
                    <th class="text-left p-3 px-5">Category</th>
                    <th></th>
                </tr>
                @forelse ($generators as $generator)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{ $generator->title }}</td>
                    <td class="p-3 px-5">{{ $generator->slug }}</td>
                    <td class="p-3 px-5">{{ $generator->description }}</td>
                    <td class="p-3 px-5">{{ $generator->category->title }}</td>
                    <td class="p-3 px-5 flex justify-end">
                        <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
                        <form action="{{ route('generator.destroy', $generator->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">No generators!</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{ $generators->links() }}
</x-app-layout>
