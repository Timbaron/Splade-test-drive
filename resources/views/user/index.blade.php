<x-layout>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>
    <x-panel>
        <x-splade-table :for="$users" />
    </x-panel>
</x-layout>
