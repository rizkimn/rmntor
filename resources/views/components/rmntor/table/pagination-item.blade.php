@props(['active' => false])

<li class="page">
    <a href="#" class="w-7 h-7 flex items-center justify-center rounded-[10px] {{$active ? 'text-main bg-main/10' : 'text-main/50 bg-main/0 hover:bg-main/5'}}">
        {{$slot}}
    </a>
</li>
