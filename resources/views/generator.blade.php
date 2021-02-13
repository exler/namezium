<x-app-layout>
    <div id="generator">
        <div id="generator-details">
            <h2>{{ $generator->title }}</h2>
            <p>{{ $generator->description }}</p>
        </div>
        <div id="names">
            @foreach ($generator->names as $name)
            <p>{{ $name->value }}</p>
            @endforeach
        </div>
    </div>
</x-app-layout>
