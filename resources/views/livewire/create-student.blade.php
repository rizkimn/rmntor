<x-slot:toolbar>

</x-slot:toolbar>

<section>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1 class="text-xl font-semibold mb-2">Create New Student</h1>

    <div class="mt-6" style="width:666px">
        <form wire:submit='create'>
            <ul class="grid grid-cols-1 gap-4">
                <li>
                    <x-rmntor.form.text-input name="name" label="Full Name" placeholder="" :show-icon="false" />
                </li>
                <li class="grid grid-cols-2 gap-2">
                    <x-rmntor.form.number-input name="gpa" label="GPA" placeholder="" :show-icon="false" />
                    <x-rmntor.form.number-input name="gps" label="GPS" placeholder="" :show-icon="false" />
                </li>
                <li>
                    <x-rmntor.form.textarea name="address" label="Home Address" placeholder="" :show-icon="false" />
                </li>
                <li>
                    <x-rmntor.form.select-input name="status" label="Status"
                        :options="[
                            [
                                'name' => 'Aktif',
                                'slug' => 'aktif',
                            ],
                            [
                                'name' => 'Tidak Aktif',
                                'slug' => 'tidak aktif',
                            ],
                        ]"
                    />
                </li>
                <li>
                    <button type="submit" class="px-4 py-2 bg-main text-white rounded-md flex items-center">
                        <span>Send</span>
                        <span class="ml-3">
                            <x-rmntor.icon name="paper-plane-icon" color="white" width="18" height="18" />
                        </span>
                    </button>
                </li>
            </ul>
        </form>
    </div>
</section>
