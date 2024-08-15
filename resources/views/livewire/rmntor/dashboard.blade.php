<x-slot:toolbar>
    <div class="cta-btn grid grid-flow-col gap-2">
        <a href="#download" class="download-btn flex items-center justify-between md:px-4 p-2 bg-primary/10 border border-primary rounded-2xl">
            <span class="max-md:hidden text text-sm mr-4">Documents</span>
            <span class="icon">
                <svg width="20" height="20" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-primary" fill-rule="evenodd" d="M.525.4A.025.025 0 0 1 .55.422v.053A.075.075 0 0 1 .479.55H.125A.075.075 0 0 1 .05.479V.425A.025.025 0 0 1 .1.422v.053A.025.025 0 0 0 .122.5h.353A.025.025 0 0 0 .5.478V.425A.025.025 0 0 1 .525.4M.3.05a.025.025 0 0 1 .025.025v.24L.357.283A.025.025 0 0 1 .39.281l.002.002a.025.025 0 0 1 .002.033L.392.318.317.393.316.394.314.395.311.397.308.398.305.399.301.4H.295L.292.399.289.398.287.397.285.395.283.393.208.318A.025.025 0 0 1 .241.281l.002.002.032.032v-.24A.025.025 0 0 1 .3.05"/>
                </svg>
            </span>
        </a>
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
    </div>
    <div x-data="{search_active: false}" class="search-btn">
        <button @click="search_active = true" class="bg-white/50 border-2 border-white p-2 md:px-4 md:pr-2 max-md:rounded-2xl rounded-full flex items-center justify-between">
            <span class="max-md:hidden text-left w-60 text-sm opacity-50">Temukan sesuatu...</span>
            <span>
                <svg width="20" height="20" viewBox="0 0 0.6 0.6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-main" fill-rule="evenodd" clip-rule="evenodd" d="M.275.125a.15.15 0 1 0 0 .3.15.15 0 0 0 0-.3m-.2.15a.2.2 0 1 1 .358.123l.085.085a.025.025 0 0 1-.035.035L.398.433A.2.2 0 0 1 .075.275"/>
                </svg>
            </span>
        </button>

        <div x-show="search_active" class="modal absolute bg-dark/50 backdrop-blur-sm left-0 top-0 w-full h-full flex flex-col items-center">
            <div class="box-modal bg-white max-md:w-[86%] w-[36%] p-4 rounded-[36px] mt-36">
                <form class="bg-white border border-main pr-2 flex items-center justify-between rounded-full overflow-hidden" action="#" method="get">
                    <input name="search" autofocus class="bg-none text-sm w-full px-4 py-2 outline-none" type="text" placeholder="temukan sesuatu...">
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
</x-slot:toolbar>

<section>
    <h1>Hello World</h1>
</section>
