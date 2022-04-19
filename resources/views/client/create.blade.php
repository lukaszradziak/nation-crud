<x-layout>

    <form
        method="post"
        action="{{ route('client.store') }}"
    >
        @csrf

        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('Create Client') }}</h3>
        </div>

        @if ($errors->any())
            <div class="text-red-600 pt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <label
                    for="first_name"
                    class="block text-sm font-medium text-gray-700"
                >
                    {{ __('First name') }}
                </label>
                <div class="mt-1">
                    <input
                        id="first_name"
                        name="first_name"
                        type="text"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        value="{{ old('first_name') }}"
                    >
                </div>
            </div>

            <div class="sm:col-span-4">
                <label
                    for="last_name"
                    class="block text-sm font-medium text-gray-700"
                >
                    {{ __('Last name') }}
                </label>
                <div class="mt-1">
                    <input
                        id="last_name"
                        name="last_name"
                        type="text"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        value="{{ old('last_name') }}"
                    >
                </div>
            </div>

            <div class="sm:col-span-4">
                <label
                    for="pesel"
                    class="block text-sm font-medium text-gray-700"
                >
                    {{ __('Pesel') }}
                </label>
                <div class="mt-1">
                    <input
                        id="pesel"
                        name="pesel"
                        type="text"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        value="{{ old('pesel') }}"
                    >
                </div>
            </div>

            <div class="sm:col-span-4">
                <label
                    for="email"
                    class="block text-sm font-medium text-gray-700"
                >
                    {{ __('Email') }}
                </label>
                <div class="mt-1">
                    <input
                        id="email"
                        name="email"
                        type="email"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        value="{{ old('email') }}"
                    >
                </div>
            </div>
        </div>

        <div class="pt-4">
            <div class="flex">
                <button
                    type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    {{ __('Save') }}
                </button>
            </div>
        </div>
    </form>


</x-layout>
