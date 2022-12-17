<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />

        <div class="mt-8 text-2xl">
            Welcome to your Splade application!
        </div>
    </x-panel>

    <x-panel>
        <!-- <x-splade-file name="avatar" /> -->
        <!-- <x-splade-file  /> -->
        <x-splade-form class="space-y-4">
        <x-splade-file name="avatar" label="Image upload" filepond preview server/> 
        <x-splade-file name="avatar" label="Image upload" filepond min-size="100KB" max-size="5MB" preview />
        <x-splade-file name="avatar" label="Image upload" filepond max-width="50" max-height="50" />
        </x-splade-form>
    </x-panel>
</x-layout>
