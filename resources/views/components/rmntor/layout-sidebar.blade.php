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

    <nav class="menu-group mt-4">
        <menu class="grid grid-flow-row gap-[6px] max-md:place-content-center">
            <li>
                <a class="flex items-center" href="#">
                    <span class="icon flex items-center justify-center p-2 bg-main/10 rounded-xl">
                        <svg width="20" height="20" viewBox="0 0 0.375 0.375" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-main" fill-rule="evenodd" clip-rule="evenodd" d="M.07.025H.069L.054.026a.04.04 0 0 0-.028.028L.025.069v.063l.001.015a.04.04 0 0 0 .028.027l.015.001h.063L.147.174A.04.04 0 0 0 .174.146L.175.131V.068L.174.053A.04.04 0 0 0 .146.026L.131.025zM.06.05h.08a.01.01 0 0 1 .009.009v.08A.01.01 0 0 1 .14.148Q.14.151.13.15H.06A.01.01 0 0 1 .051.141L.05.13V.06A.01.01 0 0 1 .059.051M.245.025H.244L.229.026a.04.04 0 0 0-.028.028L.2.069v.063l.001.015a.04.04 0 0 0 .028.027l.015.001h.063L.322.174A.04.04 0 0 0 .349.146L.35.131V.068L.349.053A.04.04 0 0 0 .321.026L.306.025zM.235.05h.08a.01.01 0 0 1 .009.009v.08a.01.01 0 0 1-.009.009h-.08A.01.01 0 0 1 .226.139L.225.13V.06A.01.01 0 0 1 .234.051M.069.2h.063l.015.001a.04.04 0 0 1 .027.028l.001.015v.063L.174.322a.04.04 0 0 1-.028.027L.131.35H.068L.053.349A.04.04 0 0 1 .026.321L.025.306V.243L.026.228A.04.04 0 0 1 .054.201zM.07.225H.06a.01.01 0 0 0-.009.009L.05.245v.07a.01.01 0 0 0 .009.009h.08A.01.01 0 0 0 .148.315v-.08A.01.01 0 0 0 .139.226L.13.225zM.245.2H.244L.229.201a.04.04 0 0 0-.028.028L.2.244v.063l.001.015a.04.04 0 0 0 .028.027L.244.35h.063L.322.349A.04.04 0 0 0 .35.321L.351.306V.243L.35.228A.04.04 0 0 0 .321.201L.306.2zm-.01.025h.08a.01.01 0 0 1 .009.009v.08a.01.01 0 0 1-.009.009h-.08A.01.01 0 0 1 .226.314L.225.305v-.07A.01.01 0 0 1 .234.226"/>
                        </svg>
                    </span>
                    <span class="max-md:hidden text name ml-2">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="flex items-center group" href="#">
                    <span class="icon flex items-center justify-center p-2 bg-main/0 rounded-xl">
                        <svg width="20" height="20" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-main" fill-rule="evenodd" clip-rule="evenodd" d="M8 2h4.5a.5.5 0 0 1 .5.5V5H8zM7 5V2H2.5a.5.5 0 0 0-.5.5V5zM2 6v3h5V6zm6 0h5v3H8zm0 4h5v2.5a.5.5 0 0 1-.5.5H8zm-6 2.5V10h5v3H2.5a.5.5 0 0 1-.5-.5m-1-10A1.5 1.5 0 0 1 2.5 1h10A1.5 1.5 0 0 1 14 2.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 1 12.5z"/>
                        </svg>
                    </span>
                    <span class="max-md:hidden text name ml-2 opacity-35 group-hover:opacity-100 transition-all">Tables</span>
                </a>
            </li>
        </menu>
    </nav>
</aside>
