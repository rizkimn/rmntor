<div class="selector">
    <label class="inline-flex items-center cursor-pointer" for="check_{{$name}}_{{$index}}">
        <span class="icon flex items-center justify-center cursor-pointer">
            <input wire:model='{{$name}}' class="peer hidden" name="{{$name}}" type="checkbox" id="check_{{$name}}_{{$index}}" :checked="selected" @click="selected = !selected; selectAll = false;" value="{{$value}}">
            <svg class="peer-checked:*:has-[path]:opacity-100" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="stroke-primary/20 opacity-100" d="M18.8 12C18.8 13.8035 18.0835 15.5331 16.8083 16.8083C15.533 18.0836 13.8034 18.8 12 18.8C10.1965 18.8 8.46687 18.0836 7.19162 16.8083C5.91638 15.5331 5.19995 13.8035 5.19995 12C5.19995 10.1965 5.91638 8.46692 7.19162 7.19167C8.46687 5.91643 10.1965 5.2 12 5.2C13.8034 5.2 15.533 5.91643 16.8083 7.19167C18.0835 8.46692 18.8 10.1965 18.8 12Z" stroke-width="1.6"/>
                <path class="fill-primary opacity-0" d="M16 12C16 13.0609 15.5786 14.0783 14.8284 14.8284C14.0783 15.5786 13.0609 16 12 16C10.9391 16 9.92172 15.5786 9.17157 14.8284C8.42143 14.0783 8 13.0609 8 12C8 10.9391 8.42143 9.92172 9.17157 9.17157C9.92172 8.42143 10.9391 8 12 8C13.0609 8 14.0783 8.42143 14.8284 9.17157C15.5786 9.92172 16 10.9391 16 12Z" stroke-width="1.6" />
            </svg>
        </span>
        <span class="text-sm select-none ml-2 max-sm:hidden {{$showLabel ? "" : "hidden"}}">{{$label}}</span>
    </label>
</div>
