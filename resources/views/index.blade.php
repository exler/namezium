<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="categories">
                        @foreach ($categories as $category)
                        <x-category-card :category="$category" />
                        @endforeach
                    </div>
                    <div id="pagination">
                        <div class="flex flex-col items-center">
                            <div class="flex text-gray-700">
                                <div class="h-8 w-8 mr-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-4 h-4">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </div>
                                <div class="flex h-8 font-medium rounded-full bg-gray-200">
                                    <div class="w-8 md:flex justify-center items-center hidden cursor-pointer leading-5 transition duration-150 ease-in rounded-full bg-gray-600 text-white">1</div>
                                    <div class="w-8 md:flex justify-center items-center hidden cursor-pointer leading-5 transition duration-150 ease-in rounded-full">2</div>
                                </div>
                                <div class="h-8 w-8 ml-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-4 h-4">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
