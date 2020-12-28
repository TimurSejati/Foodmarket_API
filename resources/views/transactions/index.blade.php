<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-6 py-4 border">ID</th>
                            <th class="px-6 py-4 border">Food</th>
                            <th class="px-6 py-4 border">User</th>
                            <th class="px-6 py-4 border">Quantity</th>
                            <th class="px-6 py-4 border">Total</th>
                            <th class="px-6 py-4 border">Status</th>
                            <th class="px-6 py-4 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($transaction as $item)
                            <tr>
                                <td class="px-6 py-4 border">{{ $item->id }}</td>
                                <td class="px-6 py-4 border ">{{ $item->food->name }}</td>
                                <td class="px-6 py-4 border ">{{ $item->user->name }}</td>
                                <td class="px-6 py-4 border">{{ $item->quantity }}</td>
                                <td class="px-6 py-4 border">{{ number_format($item->total) }}</td>
                                <td class="px-6 py-4 border">{{ $item->status }}</td>
                                <td class="px-6 text-center border py-">
                                    <a href="{{ route('transactions.show', $item->id) }}"
                                        class="inline-block px-4 py-2 mx-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                        View
                                    </a>
                                    <form action="{{ route('transactions.destroy', $item->id) }}" method="POST"
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
                {{ $transaction->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
