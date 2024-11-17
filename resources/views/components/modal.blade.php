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
                    class="absolute top-0 right-0 mt-0 ml-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"></path>
                    </svg>
                    </button>
            </div>
        <div>{{$body}}</div>
    </div>
</div>