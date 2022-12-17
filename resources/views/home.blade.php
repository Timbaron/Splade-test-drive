<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />

        <div class="mt-8 text-2xl">
            Welcome to your Splade application!
        </div>

        <p class="mt-8">

        <Link slideover href="/docs">Docs</Link>
        </p>
    </x-panel>
</x-layout>
