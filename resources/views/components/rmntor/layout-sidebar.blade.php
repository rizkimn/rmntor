<aside class="max-md:p-1 p-4 max-md:w-auto w-[316px]">
    <nav class="logo flex max-md:mt-2 max-md:justify-start justify-center">
        <a href="/dashboard#">
            <span class="flex items-center max-md:justify-start justify-center logo-image max-md:h-12 h-16 aspect-square object-contain overflow-hidden rounded-xl">
                <img class="w-full h-full" src="{{asset("icon.png")}}" alt="rmntor-icon">
            </span>
        </a>
    </nav>

    <nav x-data="{ open: false }" class="user-profile group flex flex-col items-center mt-6">
        <ul class="profile max-md:w-auto w-full max-md:p-1 p-[6px] md:bg-main/10 max-md:rounded-[14px] rounded-2xl overflow-hidden">
            <li class="user h-10 flex items-center">
                <span class="icon flex items-center justify-center">
                    <svg width="28" height="28" viewBox="0 0 24 24" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                        <path class="fill-main" d="M9 15h6a5 5 0 0 1 5 5 1 1 0 0 1-1 1H5a1 1 0 0 1-1-1 5 5 0 0 1 5-5" style="stroke-linecap:round;stroke-linejoin:round;stroke-width:2"/>
                        <circle class="fill-main/50" cx="12" cy="7" r="4" style="stroke-linecap:round;stroke-linejoin:round;stroke-width:2"/>
                    </svg>
                </span>
                <span class="max-md:hidden text name ml-1">Le Minerale</span>
            </li>
            <li x-show="open" x-transition class="user h-10 flex items-center hover:bg-danger/10 max-md:rounded-[10px] rounded-xl">
                <form class="w-full" action="/logout" method="post"> @csrf @method('DELETE')
                    <button class="flex items-center cursor-pointer w-full" type="submit">
                        <span class="icon flex items-center justify-center p-1">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-danger" d="M14 4h3.5c3.058 0 3 4 3 8s.058 8-3 8H14M3 12h12M3 12l4-4m-4 4 4 4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span class="max-md:hidden text name ml-1">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
        <div @click="open = ! open" class="profile-more-btn cursor-pointer opacity-35 hover:opacity-100">
            <span x-show="!open" class="icon flex items-center justify-center">
                <svg width="24" height="24" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-dark" fill-rule="evenodd" clip-rule="evenodd" d="M4.182 6.182a.45.45 0 0 1 .636 0L7.5 8.864l2.682-2.682a.45.45 0 0 1 .636.636l-3 3a.45.45 0 0 1-.636 0l-3-3a.45.45 0 0 1 0-.636"/>
                </svg>
            </span>
            <span x-show="open" class="icon flex items-center justify-center rotate-180">
                <svg width="24" height="24" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-dark" fill-rule="evenodd" clip-rule="evenodd" d="M4.182 6.182a.45.45 0 0 1 .636 0L7.5 8.864l2.682-2.682a.45.45 0 0 1 .636.636l-3 3a.45.45 0 0 1-.636 0l-3-3a.45.45 0 0 1 0-.636"/>
                </svg>
            </span>
        </div>
    </nav>

    @foreach($menuGroups as $menuGroup)
    <nav class="menu-group mt-4">
        <h4 class="text-xs font-semibold opacity-35 max-md:hidden">{{$menuGroup['name']}}</h4>
        <menu class="grid grid-flow-row gap-[6px] max-md:place-content-center mt-2">
            @foreach($menuGroup['items'] as $item)
            <li>
                <a class="flex items-center group" href="/{{$item['href']}}">
                    <span class="{{"icon flex items-center justify-center p-2 rounded-xl " . (request()->is($item['href']) ? "bg-main/10" : "bg-main/0")}}">
                        <x-rmntor.icon :name="$item['icon']" />
                    </span>
                    <span class="{{"max-md:hidden text name ml-2 group-hover:opacity-100 transition-all " . "opacity-100"}}"">{{$item['name']}}</span>
                </a>
            </li>
            @endforeach
        </menu>
    </nav>
    @endforeach
</aside>
