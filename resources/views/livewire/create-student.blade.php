<x-slot:toolbar>

</x-slot:toolbar>

<section>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1 class="text-xl font-semibold mb-2">Create New Student</h1>

    <div class="mt-6 grid grid-cols-2 gap-4">
        <form wire:submit='create'>
            <ul class="grid grid-cols-1 gap-4">
                <li>
                    <x-rmntor.form.text-input name="studentForm.name" label="Full Name" placeholder="" :show-icon="false" />
                </li>
                <li class="grid grid-cols-2 gap-2">
                    <x-rmntor.form.number-input name="studentForm.gpa" label="GPA" placeholder="" :show-icon="false" />
                    <x-rmntor.form.number-input name="studentForm.gps" label="GPS" placeholder="" :show-icon="false" />
                </li>
                <li>
                    <x-rmntor.form.textarea name="studentForm.address" label="Home Address" placeholder="" :show-icon="false" />
                </li>
                <li>
                    <x-rmntor.form.select-input name="studentForm.status" label="Status"
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
        @if($errors->any())
        <span class="errors">
            <ul>
                @error('studentForm.name')
                <li><span class="text-danger text-xs">*{{$message}}</span></li>
                @enderror
                @error('studentForm.gpa')
                <li><span class="text-danger text-xs">*{{$message}}</span></li>
                @enderror
                @error('studentForm.gps')
                <li><span class="text-danger text-xs">*{{$message}}</span></li>
                @enderror
                @error('studentForm.status')
                <li><span class="text-danger text-xs">*{{$message}}</span></li>
                @enderror
                @error('studentForm.address')
                <li><span class="text-danger text-xs">*{{$message}}</span></li>
                @enderror
            </ul>
        </span>
        @endif
    </div>
</section>
