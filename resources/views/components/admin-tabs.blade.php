<div class="bg-white mb-3">
    <nav class="flex flex-col sm:flex-row">
        <a href="{{ route('admin-categories') }}" class="text-gray-600 py-1 px-6 block hover:text-blue-500 focus:outline-none @if(Request::is('admin/category*')) text-blue-500 border-b-2 font-medium border-blue-500 @endif">
            Categories
        </a>
        <a href="{{ route('admin-generators') }}" class="text-gray-600 py-1 px-6 block hover:text-blue-500 focus:outline-none @if(Request::is('admin/generator*')) text-blue-500 border-b-2 font-medium border-blue-500 @endif">
            Generators
        </a>
        <a href="{{ route('admin-names') }}" class="text-gray-600 py-1 px-6 block hover:text-blue-500 focus:outline-none @if(Request::is('admin/name*')) text-blue-500 border-b-2 font-medium border-blue-500 @endif">
            Names
        </a>
        <a href="{{ route('admin-users') }}" class="text-gray-600 py-1 px-6 block hover:text-blue-500 focus:outline-none @if(Request::is('admin/user*')) text-blue-500 border-b-2 font-medium border-blue-500 @endif">
            Users
        </a>
        @if (isset($page))
        <form id="import-form" class="flex px-4 sm:ml-auto" action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="hidden" onchange="document.getElementById('import-form').submit();" type="file" id="file-input" name="file">
            <button type="button" onclick="document.getElementById('file-input').click();" class="flex items-center text-black font-bold rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up-fill" viewBox="0 0 16 16">
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707L6.354 9.854z" />
                </svg>
                <span class="pl-2">Import data</span>
            </button>
        </form>
        <a href="{{ route($page . '.create') }}" class="flex items-center bg-green-600 hover:bg-green-700 text-white font-bold px-4 rounded-md sm:ml-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
            </svg>
            <span class="pl-2">Create new</span>
        </a>
        @endif
    </nav>
</div>
