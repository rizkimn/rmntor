<div class="flex flex-col-reverse">
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <input class="peer border border-black/20 p-2 rounded-xl text-sm {{$class}}" type="date" name="{{$name}}" id="input-date-{{$name}}" required>
    <label for="input-date-{{$name}}" class="mb-1 block text-sm font-medium peer-[:focus]:text-main peer-[:valid]:text-main">{{$label}}</label>
</div>
