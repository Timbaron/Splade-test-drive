<x-layout>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>
    <x-panel>
        <x-splade-table :for="$users" striped>
            @cell('gender', $user)
                {{ GetGender($user->gender) }}
            @endcell
            @cell('role', $user)
                {{ GetRole($user->role) }}
            @endcell
            @cell('actions', $user)
            <Link href="/users/{{$user->id}}/edit" class="font-bold text-indigo-600">Edit</Link>
            @endcell
        </x-splade-table>
    </x-panel>
</x-layout>
