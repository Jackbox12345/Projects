@props(['name','title'])

<div x-data="{show:false, name: '{{$name}}' }"
     x-show ="show"
     x-on:open-modal.window=" show=($event.detail.name === name)"
     x-on:close-modal.window="show=false"
     x-on:keydown.escape.window = "show = false"
     x-transition.duration.200ms
     style="display: none"
class="fixed inset-0 flex justify-center items-center">
<div x-on:click="show = false" class="fixed inset-0 flex justify-center items-center" style="height: 100vh;">
    <div class="bg-white bg-opacity-50 rounded max-w-2xl flex flex-col justify-center items-center p-5" @click.stop>
        @if(isset($title))
            <div class="py-3 flex items-center justify-center bg-white rounded-full w-40 mb-5">
                {{$title}}
            </div>
        @endif
        <div>
            
            {{$body}}
            

        </div>
    </div>
</div>


</div>