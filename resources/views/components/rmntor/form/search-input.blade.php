<div x-data="{search_active: false}" class="search-btn">
    <button @click="search_active = true" class="bg-white/50 border-2 border-white p-2 md:px-4 md:pr-2 max-md:rounded-2xl rounded-full flex items-center justify-between">
        <span class="max-md:hidden text-left w-60 text-sm opacity-50">{{$placeholder}}</span>
        <span>
            <svg width="20" height="20" viewBox="0 0 0.6 0.6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="fill-main" fill-rule="evenodd" clip-rule="evenodd" d="M.275.125a.15.15 0 1 0 0 .3.15.15 0 0 0 0-.3m-.2.15a.2.2 0 1 1 .358.123l.085.085a.025.025 0 0 1-.035.035L.398.433A.2.2 0 0 1 .075.275"/>
            </svg>
        </span>
    </button>

    <div x-show="search_active" class="modal absolute bg-dark/50 backdrop-blur-sm left-0 top-0 w-full h-full flex flex-col items-center">
        <div class="box-modal bg-white max-md:w-[86%] w-[36%] p-4 rounded-[36px] mt-36">
            <form class="bg-white border border-main pr-2 flex items-center justify-between rounded-full overflow-hidden" action="#" method="get">
                <input wire:model='{{$name}}' name="search" autofocus class="bg-none text-sm w-full px-4 py-2 outline-none" type="text" placeholder="{{$placeholder}}">
                <button type="submit">
                    <svg width="20" height="20" viewBox="0 0 0.6 0.6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-main" fill-rule="evenodd" clip-rule="evenodd" d="M.275.125a.15.15 0 1 0 0 .3.15.15 0 0 0 0-.3m-.2.15a.2.2 0 1 1 .358.123l.085.085a.025.025 0 0 1-.035.035L.398.433A.2.2 0 0 1 .075.275"/>
                    </svg>
                </button>
            </form>
        </div>
        <span @click="search_active = false" class="bg-light/30 text-light p-2 mt-2 flex items-center justify-center rounded-full cursor-pointer">
            <svg width="20" height="20" viewBox="0 0 0.6 0.6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="stroke-light" d="m.425.175-.25.25m0-.25.25.25" stroke-width=".05" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
    </div>
</div>
