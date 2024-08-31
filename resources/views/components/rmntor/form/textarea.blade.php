<span class="flex flex-col-reverse w-full p-2 border border-black/20 has-[:focus]:border-b-2 rounded-xl">
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <textarea name="{{$name}}" id="textarea-{{$name}}" class="peer w-full outline-none" rows="{{$rows}}" placeholder="{{$placeholder}}" required></textarea>
    <span class="peer-focus:text-main peer-valid:text-main flex items-center mb-2 text-sm font-medium">
        @if($showIcon)
        <span class="flex mr-2">
            <x-rmntor.icon name="{{$icon}}" color="black/20" />
        </span>
        @endif
        <label for="textarea-{{$name}}">{{$label}}</label>
    </span>
</span>
