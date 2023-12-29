<div>
    @if (session('success'))
        <span class="px-5 py-3 bg-green-400 text-white">{{ session('success') }}</span>
    @endif
    <form class="p-5" wire:submit="createUser" action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" wire:model="name" type="text"
            placeholder="name">
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" wire:model="email" type="email"
            placeholder="email">
        @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" wire:model="password" type="password"
            placeholder="password">
        @error('password')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <button class="block rounded border bg-gray-400 px-3 py-1 text-white mt-3">Create</button>
    </form>
    <hr>
    <div class="p-3">
        @foreach ($users as $user)
            <h3>
                <li>
                    {{ $user->name }}
                </li>
            </h3>
            <span>{{ $user->email }}</span>
        @endforeach
    </div>
    {{ $users->links() }}
</div>
