<div
    x-data="fileUpload()"
    x-on:drop.prevent="handleDrop($event)"
    x-on:dragenter.prevent="isDragging = true"
    x-on:dragleave.prevent="isDragging = false"
    :class="'w-full border border-main/30 border-dashed aspect-[4/3] rounded-xl hover:bg-main/5'"
    >
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <input type="file" name="name" id="input-file-name" class="hidden" accept="*" x-ref="fileInput" x-on:change="handleFileInput">

    <span class="upload-area cursor-pointer w-full h-full flex flex-col items-center justify-center" @click="$refs.fileInput.click()">
        <span class="w-full h-full flex items-center justify-center aspect-square relative opacity-30 hover:opacity-100 transition-all before:absolute before:w-full before:aspect-square before:bg-main/5 before:rounded-full before:scale-0 after:absolute after:w-full after:aspect-square after:bg-main/5 after:rounded-full after:scale-0 hover:before:scale-[0.3]  hover:after:scale-50 before:transition-all after:transition-all before:delay-75">
            <x-rmntor.icon name="upload-storage-icon" width="36" height="36" />
        </span>
        <template x-if="files.length">
            <ul class="mt-4 space-y-2">
                <template x-for="(file, index) in files" :key="index">
                    <li class="flex items-center justify-between p-2 rounded-md">
                        <span class="truncate w-32" x-text="file.name"></span>
                        <span class="text-sm text-black" x-text="humanFileSize(file.size)"></span>
                    </li>
                </template>
            </ul>
        </template>
    </span>

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
            }
        };
    }
</script>
