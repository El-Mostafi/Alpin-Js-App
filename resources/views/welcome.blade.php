<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body>
    <div class="p-10 w-1/2 mx-auto">
        <x-modal name="modal1" title="">
           <x-slot:body>
                @livewire('register')
            </x-slot>
        </x-modal>
        <x-modal name="modal2" title="Modal2">
           <x-slot:body>
                <p>hello world</p>
            </x-slot>
        </x-modal>
        <button
        x-data
        @click="$dispatch('open-modal',{name:'modal1'})"
        type="button" 
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Modal 1</button>
        <button
        x-data
        @click="$dispatch('open-modal',{name:'modal2'})"
        type="button" 
        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Modal 2</button>
        @livewire('cards')
    </div>
    </body>
</html>
