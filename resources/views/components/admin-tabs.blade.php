<div class="bg-white">
    <nav class="flex flex-col sm:flex-row">
        <a href="{{ route('admin-categories') }}" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none @if(Request::is('admin/category*')) text-blue-500 border-b-2 font-medium border-blue-500 @endif">
            Categories
        </a>
        <a href="{{ route('admin-generators') }}" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none @if(Request::is('admin/generator*')) text-blue-500 border-b-2 font-medium border-blue-500 @endif">
            Generators
        </a>
        <a href="{{ route('admin-names') }}" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none @if(Request::is('admin/name*')) text-blue-500 border-b-2 font-medium border-blue-500 @endif">
            Names
        </a>
        <a href="{{ route('admin-users') }}" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none @if(Request::is('admin/user*')) text-blue-500 border-b-2 font-medium border-blue-500 @endif">
            Users
        </a>
    </nav>
</div>
