<div class="flex flex-col-reverse">
    <span class="peer has-[:focus]:border-b-2 text-input border border-black/20 text-sm flex items-center rounded-[12px] {{$class}}">
        @if($showIcon)
        <span class="p-2 rounded-[12px]">
            <x-rmntor.icon name={{$icon}} width="16" height="16" color="black/30" />
        </span>
        @endif
        <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
        <input id="input-text-{{$name}}" name="{{$name}}" type="text" class="m-2 outline-none w-full" placeholder="{{$placeholder}}" required>
    </span>
    <label for="input-text-{{$name}}" class="mb-1 block text-sm font-medium peer-has-[:focus]:text-main peer-has-[:valid]:text-main">{{$label}}</label>
</div>
