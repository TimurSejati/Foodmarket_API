<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Food &raquo; {{ $item->name }} &raquo; Edit
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div>
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
                            There's something wrong!
                        </div>
                        <div class="px-4 py-3 text-red-700 bg-red-100 border border-t-0 border-red-400 rounded-b">
                            <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif
                <form class="w-full" action="{{ route('food.update', $item->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="grid-last-name">
                                Name
                            </label>
                            <input value="{{ old('name') ?? $item->name }}" name="name"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Food Name">
                        </div>
                    </div>
                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="grid-last-name">
                                Image
                            </label>
                            <input name="picturePath"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="file" placeholder="Food Image">
                        </div>
                    </div>
                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="grid-last-name">
                                Description
                            </label>
                            <textarea name="description"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text"
                                placeholder="Food Description">{{ old('description') ?? $item->description }}</textarea>
                        </div>
                    </div>
            </div>
            <div class="flex flex-wrap mb-6 -mx-3">
                <div class="w-full px-3">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                        for="grid-last-name">
                        Ingredients
                    </label>
                    <input value="{{ old('ingredients') ?? $item->ingredients }}" name="ingredients"
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" placeholder="Food Ingredients">
                    <p class="text-xs italic text-gray-600">Dipisahkan dengan koma, contoh: Bawang Merah, Paprika,
                        Bawang Bombay, Timun</p>
                </div>
            </div>
            <div class="flex flex-wrap mb-6 -mx-3">
                <div class="w-full px-3 md:w-1/2">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                        for="grid-last-name">
                        Price
                    </label>
                    <input value="{{ old('price') ?? $item->price }}" name="price"
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="number" placeholder="Food Price">
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                        for="grid-last-name">
                        Rate
                    </label>
                    <input value="{{ old('rate') ?? $item->rate }}" name="rate"
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="number" step="0.0
            1" max="5" placeholder="Food Rate">
                </div>
            </div>
            <div class="flex flex-wrap mb-6 -mx-3">
                <div class="w-full px-3">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                        for="grid-last-name">
                        Types
                    </label>
                    <input value="{{ old('types') ?? $item->types }}" name="types"
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" placeholder="Food Types">
                    <p class="text-xs italic text-gray-600">Dipisahkan dengan koma, contoh: recommended,popular,new_food
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mb-6 -mx-3">
                <div class="w-full px-3 text-right">
                    <button type="submit"
                        class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Update Food
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>
