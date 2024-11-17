<div >
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="pb-4 bg-white dark:bg-gray-900">
        <div class="relative mt-1">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input wire:model.live="search" type="text" id="table-search" class="block mt-2 ml-2 pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
        </div>
    </div>
    <table class="mt-4 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->name}}
                </th>
                <td class="px-6 py-4">
                    {{$user->email}}
                </td>
                <td class="px-6 py-4">
                    <button wire:click="viewUser({{$user}})" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if($selectUser)
    <x-modal name="user-info" title="">
        <x-slot:body>
        <div class="max-w-sm mx-auto bg-white shadow-md rounded-lg overflow-hidden dark:bg-gray-800 mt-5">
    <div class="px-6 py-4">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ $selectUser->name }}</h2>
        <p class="text-gray-700 dark:text-gray-300">{{ $selectUser->email }}</p>
    </div>
    <div class="px-6 py-4">
        <div class="flex items-center">
            <span class="text-gray-700 dark:text-gray-300">Joined at: </span>
            <span class="ml-2 text-gray-900 dark:text-white">{{ $selectUser->created_at->format('M d, Y') }}</span>
        </div>
    </div>
</div>

        </x-slot>
    </x-modal>
    @endif
</div>

<div class="mt-4 w-25 mx-auto"><span>{{$users->links()}}</span></div>
</div>
