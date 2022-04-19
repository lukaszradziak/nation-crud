<x-layout>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <a
                href="{{ route('client.create') }}"
                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
            >Add Client</a>
        </div>
        <div class="mt-4 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6"
                                    >
                                        {{ __('First name') }}
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                    >
                                        {{ __('Last name') }}
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                    >
                                        {{ __('Pesel') }}
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                    >
                                        {{ __('Email') }}
                                    </th>
                                    <th
                                        scope="col"
                                        class="relative py-3.5 pl-3 pr-4 sm:pr-6"
                                    >
                                        <span class="sr-only">
                                            {{ __('Action') }}
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($clients as $client)
                                    <tr>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $client->first_name }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $client->last_name }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $client->pesel }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $client->email }}
                                        </td>
                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <a
                                                href="{{ route('client.show', $client) }}"
                                                class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            >Show</a>
                                            <a
                                                href="{{ route('client.edit', $client) }}"
                                                class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            >Edit</a>

                                            <form
                                                method="post"
                                                action="{{ route('client.destroy', $client) }}"
                                                class="pt-2"
                                                onsubmit="return confirm('{{ __('Are you sure?') }}')"
                                            >
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    type="submit"
                                                    class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                >Remove</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pt-4">
                        {{ $clients->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
