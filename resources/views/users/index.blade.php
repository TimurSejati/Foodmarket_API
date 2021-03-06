<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('users.create') }}"
                    class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                    + Create User
                </a>
            </div>
            <div class="bg-white">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-6 py-4 border">ID</th>
                            <th class="px-6 py-4 border">Name</th>
                            <th class="px-6 py-4 border">Email</th>
                            <th class="px-6 py-4 border">Roles</th>
                            <th class="px-6 py-4 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($user as $item)
                            <tr>
                                <td class="px-6 py-4 text-center border">{{ $item->id }}</td>
                                <td class="px-6 py-4 text-center border">{{ $item->name }}</td>
                                <td class="px-6 py-4 text-center border">{{ $item->email }}</td>
                                <td class="px-6 py-4 text-center border">{{ $item->roles }}</td>
                                <td class="px-6 text-center border py-">
                                    <a href="{{ route('users.edit', $item->id) }}"
                                        class="inline-block px-4 py-2 mx-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                        Edit
                                    </a>
                                    <form action="{{ route('users.destroy', $item->id) }}" method="POST"
                                        class="inline-block">
                                        {!! method_field('delete') . csrf_field() !!}
                                        <button type="submit"
                                            class="inline-block px-4 py-2 mx-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-5 text-center border">
                                    Data Tidak Ditemukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-5 text-center">
                {{ $user->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
