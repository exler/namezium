<x-app-layout>
    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render("name", $name) }}
    </x-slot>

    <div id="name">
        <div id="name-details" class="text-center mb-4 border-solid border-b-2 pb-2">
            <h2 class="text-3xl font-bold">{{ $name }}</h2>
        </div>
        <div id="name-availability" class="container max-w-4xl mx-auto">
            <h5 class="text-xl font-bold text-center">Domains</h5>
            <div id="domain-availability">
                @foreach ($domains as $domain => $available)
                <div class="grid items-center grid-cols-5 p-2 border border-gray-200 mb-2">
                    <div class="w-full col-span-5 mx-auto text-2xl text-center sm:text-xl sm:text-left sm:col-span-2">
                        {{ strtolower($domain) }}
                    </div>
                    @if ($available)
                    <div class="flex flex-col items-center justify-between col-span-5 mt-4 space-y-4 sm:mt-0 sm:space-y-0 sm:flex-row sm:col-span-3">
                        <div>
                            <h5>Domain is available!</h5>
                        </div>
                        <a href="https://www.ovh.com/order/webcloud/#/webCloud/domain/select?selection=~()&search={{ strtolower($domain) }}" class="domain-buy flex flex-grow items-center justify-center w-full p-2 pl-4 text-white bg-purple-800 sm:w-auto rounded hover:bg-purple-900">
                            <svg role="img" fill="#FFFFFF" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>OVH icon</title>
                                <path d="M19.881 10.095l2.563-4.45C23.434 7.389 24 9.404 24 11.555c0 2.88-1.017 5.523-2.71 7.594h-6.62l2.04-3.541h-2.696l3.176-5.513h2.691zm-2.32-5.243L9.333 19.14l.003.009H2.709C1.014 17.077 0 14.435 0 11.555c0-2.152.57-4.17 1.561-5.918L5.855 13.1 10.6 4.852h6.961z" />
                            </svg>
                            <span class="pl-2">Buy on OVH</span>
                        </a>
                    </div>
                    @else
                    <div class="flex flex-col items-center justify-end col-span-5 mt-4 space-y-4 sm:mt-0 sm:space-y-0 sm:flex-row sm:col-span-3">
                        <div class="domain-buy flex flex-grow items-center justify-center w-full p-2 text-white bg-gray-700 sm:w-auto rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                            </svg>
                            <span class="pl-2">Unavailable</span>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
