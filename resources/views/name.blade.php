<x-app-layout>
    <div id="name">
        <div id="name-details" class="text-center mb-4 border-solid border-b-2 pb-2">
            <h2 class="text-3xl font-bold">{{ $name }}</h2>
        </div>
        <div id="name-availability" class="container max-w-4xl mx-auto">
            <h5 class="text-xl font-bold text-center">Domain</h5>
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
                        <a href="https://www.namecheap.com/domains/registration/results/?domain={{ strtolower($domain) }}" class="flex items-center justify-center w-full p-2 text-white bg-red-600 sm:w-auto rounded hover:bg-red-900">
                            <svg role="img" fill="#FFFFFF" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Namecheap icon</title>
                                <path d="M17.295 17.484c.227.403.57.728.985.931-.309.15-.647.229-.99.232h-3.068a2.26 2.26 0 0 1-1.957-1.143L6.705 6.511a2.27 2.27 0 0 0-.974-.922c.309-.153.652-.233.997-.232h3.05c.81.003 1.558.438 1.959 1.143l5.558 10.984zm-9.329-7.392L6.269 6.755c-.209-.392-.582-.657-.984-.829-.204.165-.391.35-.522.581-.184.349-4.391 8.648-4.569 8.987a2.245 2.245 0 0 0 4.016 1.999l3.756-7.401zm15.846-1.593a2.245 2.245 0 0 0-1.162-2.955v-.001a2.243 2.243 0 0 0-.892-.187l-.003-.011c-.816 0-1.569.443-1.965 1.157l-3.749 7.414 1.689 3.323c.213.399.59.664.998.839.252-.2.473-.444.605-.742l4.479-8.837z" />
                            </svg>
                            <span class="pl-2">Buy on Namecheap</span>
                        </a>
                    </div>
                    @else
                    <div class="flex flex-col items-center justify-end col-span-5 mt-4 space-y-4 sm:mt-0 sm:space-y-0 sm:flex-row sm:col-span-3">
                        <div class="flex items-center justify-center w-full p-2 text-white bg-gray-700 sm:w-auto rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                            </svg>
                            <span class="pl-2">Domain unavailable!</span>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
            <h5 class="text-xl font-bold text-center mt-2">Social media</h5>
            <div id="account-availability" class="flex flex-wrap justify-start items-stretch content-start">
                <div class="w-full lg:w-1/4 min-w-min px-1 pb-2">
                    <div class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                        <div class="flex flex-row items-center justify-between">
                            <div class="flex flex-col">
                                <div class="text-xs uppercase font-light text-gray-500">
                                    Facebook
                                </div>
                                <div class="text-xl font-bold">
                                    Available!
                                </div>
                            </div>
                            <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px" fill="#1877F2">
                                <title>Facebook icon</title>
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
