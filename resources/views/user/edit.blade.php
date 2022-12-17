<x-layout>
    <x-slot name="header">
        {{ __('User') }}
    </x-slot>
    <x-panel>
        <x-splade-form confirm="Are you sure you want to update this user?" :default="$user" :action="route('user.update', $user)" unguarded class="space-y-4">
            <x-splade-input name="name" label="Name" />
            <x-splade-input name="email" label="Email Address" />
            <x-splade-input name="date_of_birth" label="Date of Birth" date />
            <!-- <x-splade-input name="password" label="Password" type="password" /> -->
            <x-splade-textarea name="biography" label="Biography" autosize />
            <x-splade-select name="gender" label="Gender" :options="$gender" choices />
            <x-splade-checkbox name="agree_terms" label="Agree to Terms and Conditions" />
            <x-splade-radios name="role" label="Role" :options="$roles" inline />
            <!-- <x-splade-group name="roles" label="Roles">
                <x-splade-checkbox name="roles[]" label="Editor" value="Editor" />
                <x-splade-checkbox name="roles[]" label="Writer" value="Writer" />
            </x-splade-group> -->
            <!-- <button type="submit" class="bg-blue-500 p-2 mt-3 rounded">Update</button> -->
            <x-splade-submit />
        </x-splade-form>
    </x-panel>
</x-layout>
