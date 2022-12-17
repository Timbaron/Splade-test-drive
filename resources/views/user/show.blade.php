<x-layout>
    <x-slot name="header">
        {{ __('User') }}
    </x-slot>

    <x-panel>
        {{$user->name}}
    </x-panel>
</x-layout>
