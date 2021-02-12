<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="generators">
                        <x-generator-category>
                            <x-slot name="title">
                                RPG Names
                            </x-slot>

                            <x-slot name="description">
                                Fantasy names for Dungeons & Dragons, Pathfinder and other RPG games.
                            </x-slot>

                            <x-generator-card>
                                <x-slot name="title">
                                    Elf Names
                                </x-slot>

                                <p>Generate Elf names for your character!</p>
                            </x-generator-card>
                            <x-generator-card>
                                <x-slot name="title">
                                    Human Names
                                </x-slot>

                                <p>Generate Human names for your character!</p>
                            </x-generator-card>
                            <x-generator-card>
                                <x-slot name="title">
                                    Dwarf Names
                                </x-slot>

                                <p>Generate Dwarf names for your character!</p>
                            </x-generator-card>
                            <x-generator-card>
                                <x-slot name="title">
                                    Orc Names
                                </x-slot>

                                <p>Generate Orc names for your character!</p>
                            </x-generator-card>
                            <x-generator-card>
                                <x-slot name="title">
                                    Halfling Names
                                </x-slot>

                                <p>Generate Names names for your character!</p>
                            </x-generator-card>
                        </x-generator-category>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
