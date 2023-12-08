<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2>{{ __('messages.item_info') }}</h2>
                    <h3>{{ __('messages.item_name') }}</h3>
                    <p>
                        {{ $item }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>