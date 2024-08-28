<div class="table mt-4 min-w-full">
    @if(count($tableData) > 0)
    <form action="" method="post">
        <table
            class="w-full text-sm table-auto"
            x-data="{ selectAll: false, allSelected: false }"
        >
            <thead>
                <tr class="*:bg-main/5 *:border-y *:border-y-main *:py-4 *:font-semibold">
                    <th></th>
                    <th> <x-rmntor.table.table-column label="No" /> </th>
                    @foreach($columns->keys() as $column)
                    <th> <x-rmntor.table.table-column :label="$column" /> </th>
                    @endforeach
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tableData as $i => $data)
                <tr
                    class="border-b border-b-main/10 *:px-1 *:py-2"
                    x-data="{ selected: false }"
                    x-init="
                        $watch('allSelected', value => selected = allSelected);
                        $watch('selectAll', value => selected = selectAll ? allSelected : selected)
                        "
                    :class="selected ? 'bg-gradient-to-t from-primary/5 to-primary/0 border-b-primary' : ''"
                >
                    <td>
                        <x-rmntor.form.checkbox-input
                            name="table"
                            :index="$i"
                            :show-label="false"
                        />
                    </td>
                    <td> {{$loop->iteration}} </td>
                    @foreach($columns->keys() as $column)
                    {{-- <td>
                        <span class="{{$columns[$column]['class']}}">
                            {{$data[$column]}}
                        </span>
                    </td> --}}
                    @switch($columns[$column]['type'])
                    @case('text')
                    <td>
                        <span class="{{$columns[$column]['class']}}">
                            {{$data[$column]}}
                        </span>
                    </td>
                    @break
                    @case('badge')
                    <td>
                        <x-rmntor.badge :style="$validateBadgeStyle($columns[$column]['badge_style'],$data[$column])"> {{$data[$column]}} </x-rmntor.badge>
                    </td>
                    @break
                    @default
                    <td>
                        <span class="{{$columns[$column]['class']}}">
                            {{$data[$column]}}
                        </span>
                    </td>
                    @endswitch
                    @endforeach
                    <td class="flex items-center justify-end group">
                        <x-rmntor.table.action-button :index="$i" />
                    </td>

                    {{-- <td class="text-center font-mono">0735221166{{$i}}</td>
                    <td>
                        <div class="flex items-center justify-center">
                            <span class="inline-flex items-center justify-center bg-success/10 text-success rounded-full text-xs px-4 py-1">Aktif</span>
                        </div>
                    </td>
                    <td class="text-center">2.4</td>
                    <td class="text-center">2.9</td> --}}

                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="text-center *:py-4 *:px-1 *:border-b *:border-b-main/10">
                    <td colspan="666">
                        <div class="flex items-center justify-between">
                            <div class="left-footer flex items-center">
                                <div class="selector">
                                    <label class="inline-flex items-center cursor-pointer" for="check_all">
                                        <span class="icon flex items-center justify-center cursor-pointer">
                                            <input class="peer hidden" type="checkbox" id="check_all" :checked="selectAll" @click="selectAll = !selectAll; allSelected = selectAll;">
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
                                        <x-rmntor.table.pagination-group>
                                            <x-rmntor.table.pagination-item :active="true"> 1 </x-rmntor.table.pagination-item>
                                            <x-rmntor.table.pagination-item> 2 </x-rmntor.table.pagination-item>
                                            <x-rmntor.table.pagination-item> ... </x-rmntor.table.pagination-item>
                                            <x-rmntor.table.pagination-item> 666 </x-rmntor.table.pagination-item>
                                        </x-rmntor.table.pagination-group>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
    @else
    <x-rmntor.table.empty-table />
    @endif
</div>
