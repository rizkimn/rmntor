<div
    x-data="fileUpload()"
>
    <div
        x-on:dragenter.prevent="isDragging = true"
        x-on:dragover.prevent="isDragging = true"
        x-on:dragleave.prevent="isDragging = false"
        x-on:drop.prevent="isDragging = false; handleDrop($event)"
        :class="{'bg-main/5': isDragging}"
        class="w-full border border-main/30 border-dashed aspect-[4/3] rounded-xl hover:bg-main/5 {{$class}}"
    >
        <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
        <input type="file" name="{{$name}}" wire:model='{{$name}}' id="input-file-{{$name}}" class="hidden" accept="*" multiple x-ref="fileInputEl" x-on:change="handleFileInput">

        <div class="upload-area cursor-pointer w-full h-full flex flex-col items-center justify-center" @click="$refs.fileInputEl.click()">
            <span class="w-full h-full flex items-center justify-center aspect-square relative opacity-30 hover:opacity-100 transition-all before:absolute before:w-full before:aspect-square before:bg-main/5 before:rounded-full before:scale-0 after:absolute after:w-full after:aspect-square after:bg-main/5 after:rounded-full after:scale-0 hover:before:scale-[0.3]  hover:after:scale-50 before:transition-all after:transition-all before:delay-75">
                <x-rmntor.icon name="upload-storage-icon" width="36" height="36" />
            </span>
        </div>
    </div>

    <template x-if="files.length">
        <ul class="grid grid-flow-row gap-2 mt-2">
            <template x-for="(file, index) in files" :key="index">
                <li class="group flex items-center justify-between p-2 shadow-sm rounded-lg">
                    <span class="flex items-center">
                        <span class="icon pr-2">
                            <x-rmntor.icon name="file-success-icon" color="success" width="24" height="24" />
                        </span>
                        <span class="text-sm truncate w-48" x-text="file.name"></span>
                    </span>
                    <span class="font-medium text-xs text-primary group-hover:hidden" x-text="humanFileSize(file.size)"></span>
                    <span class="delete-icon hidden group-hover:flex cursor-pointer" x-on:click="deleteFile(file)">
                        <x-rmntor.icon name="delete-icon" color="danger" />
                    </span>
                </li>
            </template>
        </ul>
    </template>
</div>

<script>
    function fileUpload() {
        return {
            isDragging: false,
            files: [],
            handleFileInput(event) {
                this.files = [...event.target.files];
            },
            handleDrop(event) {
                this.files = [...event.dataTransfer.files];
            },
            humanFileSize(size) {
                const i = Math.floor(Math.log(size) / Math.log(1024));
                return (size / Math.pow(1024, i)).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
            },
            deleteFile(file) {
                this.files = this.files.filter((value) => {return value!== file});
            },
        };
    }
</script>
