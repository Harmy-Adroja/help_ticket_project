

<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text-black text-lg font-bold">Create new support ticket</h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{route('ticket.store')}}" enctype='multipart/form-data'>
                @csrf
                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="title" :value="__('Title')" />
                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" autofocus />
                    <x-validation-errors :messages="$errors->get('title')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-label for="discription" :value="__('Discription')" />
                    <x-textarea placeholder="Add discription" name="discription" id="discription" value="" />
                    <x-validation-errors :messages="$errors->get('discription')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-label for="attachment" :value="__('Attachment (if any)')" />
                    <x-file-input name="attachment" id="attachment" />
                    <x-validation-errors :messages="$errors->get('attachment')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-3">
                        Create
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>