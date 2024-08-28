@props(['index'])

<div class="edit opacity-50 hover:opacity-100">
    <a href="#{{$index}}">
        <button type="button" class="bg-info/10 p-[6px] rounded-[8px] mx-1">
            <x-rmntor.icon name="edit-icon" color="info" width=20 height=20 />
        </button>
    </a>
</div>
<div class="delete opacity-50 hover:opacity-100">
    <form action="/dashboard/table/{{$index}}" method="post">@csrf @method('DELETE')
        <button type="submit" class="bg-danger/10 p-[6px] rounded-[8px] mx-1">
            <x-rmntor.icon name="delete-icon" color="danger" width=18 height=18 />
        </button>
    </form>
</div>
