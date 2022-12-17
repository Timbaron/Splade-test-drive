<x-layout>
    <x-slot name="header">
        {{ __('Docs') }}
    </x-slot>

    <x-panel>
        <x-splade-defer url="http://api.quotable.io/random">
            <p v-text="response.content" />
            <p v-if="processing"> Processing....</p>
            <button @click="reload" class="bg-blue-500 p-2 mt-3 rounded">Reload</button>
        </x-splade-defer>
    </x-panel>
</x-layout>
