<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- <x-welcome /> --}}
            @php
                $type = 'danger';
            @endphp
            <x-alert2 :type="$type" class="mb-4">
                <x-slot name="title">
                    Este es el titulo desde el slot named title
                </x-slot>
                <p>slot principal</p>
            </x-alert2>
            hola mundo

        </div>
    </div>
</x-app-layout>
