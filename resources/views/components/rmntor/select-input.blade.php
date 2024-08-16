<div x-data="{ selector_active: false }" class="selector">
    <button @click="selector_active = true" class="select-btn flex items-center justify-between px-4 p-2 pr-1 bg-main/10 border border-main rounded-2xl">
        <span class="text text-sm mr-4">Select</span>
        <span class="icon">
            <svg width="20" height="20" viewBox="0 0 0.375 0.375" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="fill-main" fill-rule="evenodd" clip-rule="evenodd" d="M.105.155a.01.01 0 0 1 .016 0l.067.067.067-.067a.011.011 0 0 1 .016.016L.196.246a.01.01 0 0 1-.016 0L.105.171a.01.01 0 0 1 0-.016"/>
            </svg>
        </span>
    </button>

    <div x-show="selector_active" class="options absolute left-0 top-0 w-full h-full flex flex-col items-center justify-center bg-dark/60 backdrop-blur-sm">
        <ul class="bg-light w-60 rounded-[16px] overflow-hidden">
            @for($i=1;$i<=6;$i++)
            <li class="w-full flex items-center hover:bg-dark/10">
                <input class="peer hidden" type="radio" name="option" value="option-{{$i}}" id="radio-{{$i}}">
                <label class="p-4 w-full peer-checked:bg-main peer-checked:text-light" for="radio-{{$i}}">Option {{$i}}</label>
            </li>
            @endfor
        </ul>
        <span @click="selector_active = false" class="bg-light/30 text-light p-2 mt-2 flex items-center justify-center rounded-full cursor-pointer">
            <svg width="20" height="20" viewBox="0 0 0.6 0.6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="stroke-light" d="m.425.175-.25.25m0-.25.25.25" stroke-width=".05" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
    </div>
</div>
