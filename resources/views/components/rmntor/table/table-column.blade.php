@props(['label','sortable'])

<span class="flex items-center justify-start">
    @if($sortable)
    <button type="submit" name="sort_{{$label}}" value="asc"><x-rmntor.icon name="caret-top-bottom-icon" height=16 width=16 /></button>
    @endif
    <span class="text-xs {{strlen($label) <= 3 ? "uppercase" : "capitalize"}}">{{$label}}</span>
</span>
