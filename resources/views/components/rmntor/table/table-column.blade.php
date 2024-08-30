@props(['label','sortable'])

<span class="flex items-center justify-start">
    @if($sortable)
    <span class="sort-by flex">
        <a href="#"><x-rmntor.icon name="caret-top-bottom-icon" height=16 width=16 /></a>
    </span>
    @endif
    <span class="text-xs {{strlen($label) <= 3 ? "uppercase" : "capitalize"}}">{{$label}}</span>
</span>
