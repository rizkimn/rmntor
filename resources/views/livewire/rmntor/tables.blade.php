<x-slot:toolbar>

</x-slot:toolbar>

<section class="overflow-auto">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h1>Students</h1>

    <div class="table mt-4 min-w-full">
        <form action="" method="post">
            <table
                class="w-full text-xs table-auto"
                x-data="{ selectAll: false, allSelected: false }"
            >
                <thead>
                    <tr>
                        <th class="bg-main/5 border-y border-y-main py-4 font-semibold"></th>
                        <th class="bg-main/5 border-y border-y-main py-4 font-semibold">
                            <span class="flex items-center justify-center">
                                <span class="sort-by flex">
                                    <a href="#"><x-rmntor.icon name="caret-top-bottom-icon" height=16 width=16 /></a>
                                </span>
                                <span class="text-xs">No</span>
                            </span>
                        </th>
                        <th class="bg-main/5 border-y border-y-main py-4 font-semibold">
                            <span class="flex items-center justify-center">
                                <span class="sort-by flex">
                                    <a href="#"><x-rmntor.icon name="caret-top-bottom-icon" height=16 width=16 /></a>
                                </span>
                                <span class="text-xs">Nama</span>
                            </span>
                        </th>
                        <th class="bg-main/5 border-y border-y-main py-4 font-semibold">
                            <span class="flex items-center justify-center">
                                <span class="sort-by flex">
                                    <a href="#"><x-rmntor.icon name="caret-top-bottom-icon" height=16 width=16 /></a>
                                </span>
                                <span class="text-xs">NPM</span>
                            </span>
                        </th>
                        <th class="bg-main/5 border-y border-y-main py-4 font-semibold">
                            <span class="flex items-center justify-center">
                                <span class="sort-by flex">
                                    <a href="#"><x-rmntor.icon name="caret-top-bottom-icon" height=16 width=16 /></a>
                                </span>
                                <span class="text-xs">Status</span>
                            </span>
                        </th>
                        <th class="bg-main/5 border-y border-y-main py-4 font-semibold">
                            <span class="flex items-center justify-center">
                                <span class="sort-by flex">
                                    <a href="#"><x-rmntor.icon name="caret-top-bottom-icon" height=16 width=16 /></a>
                                </span>
                                <span class="text-xs">IPS</span>
                            </span>
                        </th>
                        <th class="bg-main/5 border-y border-y-main py-4 font-semibold">
                            <span class="flex items-center justify-center">
                                <span class="sort-by flex">
                                    <a href="#"><x-rmntor.icon name="caret-top-bottom-icon" height=16 width=16 /></a>
                                </span>
                                <span class="text-xs">IPK</span>
                            </span>
                        </th>
                        <th class="bg-main/5 border-y border-y-main py-4 font-semibold"></th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i=1;$i<=6;$i++)
                    <tr
                        class="border-b border-b-main/10"
                        x-data="{ selected: false }"
                        x-init="$watch('allSelected', value => selected = allSelected); $watch('selectAll', value => selected = selectAll ? allSelected : selected)"
                        :class="selected ? 'bg-gradient-to-t from-primary/5 to-primary/0 border-b-primary' : ''"
                    >
                        <td class="px-1 py-2">
                            <label class="inline-flex items-center" for="check_{{$i}}">
                                <span class="icon flex items-center justify-center cursor-pointer">
                                    <input class="peer hidden" type="checkbox" name="check" id="check_{{$i}}" value="{{$i}}"
                                        :checked="selected"
                                        @click="selected = !selected; selectAll = false;"
                                    >
                                    <svg class="peer-checked:*:has-[path]:opacity-100" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="stroke-primary/20 opacity-100" d="M18.8 12C18.8 13.8035 18.0835 15.5331 16.8083 16.8083C15.533 18.0836 13.8034 18.8 12 18.8C10.1965 18.8 8.46687 18.0836 7.19162 16.8083C5.91638 15.5331 5.19995 13.8035 5.19995 12C5.19995 10.1965 5.91638 8.46692 7.19162 7.19167C8.46687 5.91643 10.1965 5.2 12 5.2C13.8034 5.2 15.533 5.91643 16.8083 7.19167C18.0835 8.46692 18.8 10.1965 18.8 12Z" stroke-width="1.6"/>
                                        <path class="fill-primary opacity-0" d="M16 12C16 13.0609 15.5786 14.0783 14.8284 14.8284C14.0783 15.5786 13.0609 16 12 16C10.9391 16 9.92172 15.5786 9.17157 14.8284C8.42143 14.0783 8 13.0609 8 12C8 10.9391 8.42143 9.92172 9.17157 9.17157C9.92172 8.42143 10.9391 8 12 8C13.0609 8 14.0783 8.42143 14.8284 9.17157C15.5786 9.92172 16 10.9391 16 12Z" stroke-width="1.6" />
                                    </svg>
                                </span>
                                <span class="text-sm select-none ml-1 hidden">Selector</span>
                            </label>
                        </td>
                        <td class="px-1 py-2 text-center">{{$i}}</td>
                        <td class="px-1 py-2">Nama Ke {{$i}}</td>
                        <td class="px-1 py-2 text-center font-mono">0735221166{{$i}}</td>
                        <td class="px-1 py-2">
                            <div class="flex items-center justify-center">
                                <span class="inline-flex items-center justify-center bg-success/10 text-success rounded-full text-xs px-4 py-1">Aktif</span>
                            </div>
                        </td>
                        <td class="px-1 py-2 text-center">2.4</td>
                        <td class="px-1 py-2 text-center">2.9</td>
                        <td class="px-1 py-2 flex items-center justify-end group">
                            <div class="edit opacity-50 hover:opacity-100">
                                <a href="#{{$i}}">
                                    <button type="button" class="bg-info/10 p-[6px] rounded-[8px] mx-1">
                                        <x-rmntor.icon name="edit-icon" color="info" width=20 height=20 />
                                    </button>
                                </a>
                            </div>
                            <div class="delete opacity-50 hover:opacity-100">
                                <form action="/dashboard/table/{{$i}}" method="post">@csrf @method('DELETE')
                                    <button type="submit" class="bg-danger/10 p-[6px] rounded-[8px] mx-1">
                                        <x-rmntor.icon name="delete-icon" color="danger" width=18 height=18 />
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center py-4 px-1 border-b border-b-main/10" colspan="666">
                            <div class="flex items-center justify-between">
                                <div class="left-footer flex items-center">
                                    <div class="selector">
                                        <label class="inline-flex items-center cursor-pointer" for="check_{{$i}}">
                                            <span class="icon flex items-center justify-center cursor-pointer">
                                                <input class="peer hidden" type="checkbox" id="check_{{$i}}" value="{{$i}}" :checked="selectAll" @click="selectAll = ! selectAll; allSelected = selectAll;">
                                                <svg class="peer-checked:*:has-[path]:opacity-100" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="stroke-primary/20 opacity-100" d="M18.8 12C18.8 13.8035 18.0835 15.5331 16.8083 16.8083C15.533 18.0836 13.8034 18.8 12 18.8C10.1965 18.8 8.46687 18.0836 7.19162 16.8083C5.91638 15.5331 5.19995 13.8035 5.19995 12C5.19995 10.1965 5.91638 8.46692 7.19162 7.19167C8.46687 5.91643 10.1965 5.2 12 5.2C13.8034 5.2 15.533 5.91643 16.8083 7.19167C18.0835 8.46692 18.8 10.1965 18.8 12Z" stroke-width="1.6"/>
                                                    <path class="fill-primary opacity-0" d="M16 12C16 13.0609 15.5786 14.0783 14.8284 14.8284C14.0783 15.5786 13.0609 16 12 16C10.9391 16 9.92172 15.5786 9.17157 14.8284C8.42143 14.0783 8 13.0609 8 12C8 10.9391 8.42143 9.92172 9.17157 9.17157C9.92172 8.42143 10.9391 8 12 8C13.0609 8 14.0783 8.42143 14.8284 9.17157C15.5786 9.92172 16 10.9391 16 12Z" stroke-width="1.6" />
                                                </svg>
                                            </span>
                                            <span class="text-sm select-none ml-2 max-sm:hidden">Select All</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="right-footer flex items-center">
                                    <div class="pagination flex items-center">
                                        <div class="page-input flex items-center">
                                            <span class="mr-2"> Showing </span>
                                            <form action="" method="get">
                                                <input type="number" name="per_page" value="6" class="border border-main/10 flex items-center justify-center w-11 p-[6px] pr-1 rounded-xl outline-none focus:border-main/100 focus:border-dashed invalid:border-danger invalid:text-danger" min="1" max="66">
                                            </form>
                                        </div>
                                        <div class="page-list ml-4">
                                            <ul class="pages grid grid-flow-col gap-0">
                                                <li class="page">
                                                    <a href="#" class="w-7 h-7 flex items-center justify-center rounded-[10px] text-main bg-main/10 active">1</a>
                                                </li>
                                                <li class="page">
                                                    <a href="#" class="w-7 h-7 flex items-center justify-center rounded-[10px] text-main/50 hover:bg-main/5">2</a>
                                                </li>
                                                <li class="page">
                                                    <a href="#" class="w-7 h-7 flex items-center justify-center rounded-[10px] text-main/50 hover:bg-main/5">...</a>
                                                </li>
                                                <li class="page">
                                                    <a href="#" class="w-7 h-7 flex items-center justify-center rounded-[10px] text-main/50 hover:bg-main/5">666</a>
                                                </li>
                                                <li class="page ml-1">
                                                    <a href="#" class="w-7 h-7 flex items-center justify-center border-y border-y-main/10 text-main/50 hover:text-main/100">&leftarrow;</a>
                                                </li>
                                                <li class="page">
                                                    <a href="#" class="w-7 h-7 flex items-center justify-center border-y border-y-main/10 text-main/50 hover:text-main/100">&rightarrow;</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</section>
