@php
    $type = "warning";
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div> --}}
            <x-alert type="primary">
                <x-slot name="title">Titulo del Dashboard</x-slot>
                <p>texto de prueba</p>
            </x-alert>
            <x-alert2 :type="$type" id="dashAlert" class="mb-4">
                <x-slot name="title">Titulo del Dashboard</x-slot>
                <p>texto de prueba</p>
            </x-alert2>
            <x-nav-link>
                lorem
            </x-nav-link>
            <p>texto</p>
        </div>
    </div>
</x-app-layout>
