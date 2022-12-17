<x-layout>
    <x-slot name="header">
        {{ __('User') }}
    </x-slot>
    <x-panel>
        <x-splade-form confirm="Are you sure you want to update this user?" :default="$user" :action="route('user.update', $user)">
            <input type="name" v-model="form.name" />
            <p v-text="form.errors.name" />
            <button type="submit">Update</button>
        </x-splade-form>
    </x-panel>
</x-layout>
