@props(['name','title'])
<div 
    x-data="{show : false, name : '{{$name}}' }"
    x-show ="show"
    @Keydown.escape.window="show =true"
    @open-modal.window="show=($event.detail.name === name)"
    @close-modal.window="show=false"
    x-transition.duration.500ms
    style="display:none"
    class="fixed z-50 inset-0">
    <div 
    @click="show=false" 
    class="fixed bg-gray-300 opacity-40 inset-0"></div>
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl " style="max-height:500px">
    <h1 class="text-center">{{$title}}</h1>
    <div class="relative">
                <button
                    @click="$dispatch('close-modal')"
                    type="button" 
                    class="absolute top-0 right-0 mt-2 ml-2 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                    X
                </button>
            </div>
        <div>{{$body}}</div>
    </div>
</div>