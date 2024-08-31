@props(['style' => 'main'])

<div class="flex items-center">
    <span class="inline-flex items-center justify-center bg-{{$style}}/10 text-{{$style}} rounded-full text-xs px-4 py-1 capitalize">
        {{$slot}}
    </span>
</div>
