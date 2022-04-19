<x-layout>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Client</h1>
            </div>
        </div>
        <div class="-mx-4 mt-4 flex flex-col sm:-mx-6 md:mx-0">
            <table class="min-w-full divide-y divide-gray-300">
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="py-4 pl-4 pr-3 text-sm sm:pl-6 md:pl-0">
                            <div class="font-medium text-gray-900">
                                {{ __('First name') }}
                            </div>
                        </td>
                        <td class="py-4 px-3 text-right text-sm text-gray-500">
                            {{ $client->first_name }}
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="py-4 pl-4 pr-3 text-sm sm:pl-6 md:pl-0">
                            <div class="font-medium text-gray-900">
                                {{ __('Last name') }}
                            </div>
                        </td>
                        <td class="py-4 px-3 text-right text-sm text-gray-500">
                            {{ $client->last_name }}
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="py-4 pl-4 pr-3 text-sm sm:pl-6 md:pl-0">
                            <div class="font-medium text-gray-900">
                                {{ __('Pesel') }}
                            </div>
                        </td>
                        <td class="py-4 px-3 text-right text-sm text-gray-500">
                            {{ $client->pesel }}
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="py-4 pl-4 pr-3 text-sm sm:pl-6 md:pl-0">
                            <div class="font-medium text-gray-900">
                                {{ __('Email') }}
                            </div>
                        </td>
                        <td class="py-4 px-3 text-right text-sm text-gray-500">
                            {{ $client->email }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
