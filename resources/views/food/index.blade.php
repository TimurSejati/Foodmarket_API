<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Food') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('food.create') }}"
                    class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                    + Create Food
                </a>
            </div>
            <div class="bg-white">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-6 py-4 border">ID</th>
                            <th class="px-6 py-4 border">Name</th>
                            <th class="px-6 py-4 border">Price</th>
                            <th class="px-6 py-4 border">Rate</th>
                            <th class="px-6 py-4 border">Types</th>
                            <th class="px-6 py-4 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($food as $item)
                            <tr>
                                <td class="px-6 py-4 border">{{ $item->id }}</td>
                                <td class="px-6 py-4 border ">{{ $item->name }}</td>
                                <td class="px-6 py-4 border">{{ number_format($item->price) }}</td>
                                <td class="px-6 py-4 border">{{ $item->rate }}</td>
                                <td class="px-6 py-4 border">{{ $item->types }}</td>
                                <td class="px-6 text-center border py-">
                                    <a href="{{ route('food.edit', $item->id) }}"
                                        class="inline-block px-4 py-2 mx-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                        Edit
                                    </a>
                                    <form action="{{ route('food.destroy', $item->id) }}" method="POST"
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
                {{ $food->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
