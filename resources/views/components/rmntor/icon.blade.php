@switch($name)
    @case('dashboard-icon')
        <svg width="20" height="20" viewBox="0 0 0.375 0.375" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="fill-main" fill-rule="evenodd" clip-rule="evenodd" d="M.07.025H.069L.054.026a.04.04 0 0 0-.028.028L.025.069v.063l.001.015a.04.04 0 0 0 .028.027l.015.001h.063L.147.174A.04.04 0 0 0 .174.146L.175.131V.068L.174.053A.04.04 0 0 0 .146.026L.131.025zM.06.05h.08a.01.01 0 0 1 .009.009v.08A.01.01 0 0 1 .14.148Q.14.151.13.15H.06A.01.01 0 0 1 .051.141L.05.13V.06A.01.01 0 0 1 .059.051M.245.025H.244L.229.026a.04.04 0 0 0-.028.028L.2.069v.063l.001.015a.04.04 0 0 0 .028.027l.015.001h.063L.322.174A.04.04 0 0 0 .349.146L.35.131V.068L.349.053A.04.04 0 0 0 .321.026L.306.025zM.235.05h.08a.01.01 0 0 1 .009.009v.08a.01.01 0 0 1-.009.009h-.08A.01.01 0 0 1 .226.139L.225.13V.06A.01.01 0 0 1 .234.051M.069.2h.063l.015.001a.04.04 0 0 1 .027.028l.001.015v.063L.174.322a.04.04 0 0 1-.028.027L.131.35H.068L.053.349A.04.04 0 0 1 .026.321L.025.306V.243L.026.228A.04.04 0 0 1 .054.201zM.07.225H.06a.01.01 0 0 0-.009.009L.05.245v.07a.01.01 0 0 0 .009.009h.08A.01.01 0 0 0 .148.315v-.08A.01.01 0 0 0 .139.226L.13.225zM.245.2H.244L.229.201a.04.04 0 0 0-.028.028L.2.244v.063l.001.015a.04.04 0 0 0 .028.027L.244.35h.063L.322.349A.04.04 0 0 0 .35.321L.351.306V.243L.35.228A.04.04 0 0 0 .321.201L.306.2zm-.01.025h.08a.01.01 0 0 1 .009.009v.08a.01.01 0 0 1-.009.009h-.08A.01.01 0 0 1 .226.314L.225.305v-.07A.01.01 0 0 1 .234.226"/>
        </svg>
        @break
    @case('tables-icon')
        <svg width="20" height="20" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="fill-main" fill-rule="evenodd" clip-rule="evenodd" d="M8 2h4.5a.5.5 0 0 1 .5.5V5H8zM7 5V2H2.5a.5.5 0 0 0-.5.5V5zM2 6v3h5V6zm6 0h5v3H8zm0 4h5v2.5a.5.5 0 0 1-.5.5H8zm-6 2.5V10h5v3H2.5a.5.5 0 0 1-.5-.5m-1-10A1.5 1.5 0 0 1 2.5 1h10A1.5 1.5 0 0 1 14 2.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 1 12.5z"/>
        </svg>
        @break
    @default
        <p>Icon Not Found</p>
@endswitch
