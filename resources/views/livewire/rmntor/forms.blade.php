@php
    $options = [];
    for ($i=1; $i <= 6; $i++) {
        $options[] = ['name' => 'Pilihan '.$i, 'slug' => 'pilihan-'.$i];
    }
@endphp

<x-slot:toolbar>

</x-slot:toolbar>

<section>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <form wire:submit='send' class="flex flex-col items-start">
        <ul class="grid grid-cols-3 gap-4 w-full">
            <li>
                <x-rmntor.form.text-input label="Full Name" name="fullName" placeholder="Budi Arie Setiadi" />
            </li>
            <li>
                <x-rmntor.form.email-input name="email" />
            </li>
            <li>
                <x-rmntor.form.password-input name="password" minlength="6" />
            </li>
            <li>
                <x-rmntor.form.date-input name="date" label="Birth Date" />
            </li>
            <li>
                <x-rmntor.form.number-input name="number" placeholder="1336-66" />
            </li>
            <li class="pt-6">
                <x-rmntor.form.select-input :options="$options" label="Pilih Pilihan" name="pilihan" />
            </li>
            <li>
                <x-rmntor.form.textarea name="address" label="Home Address" rows="6" icon="house-icon" />
            </li>
            <li class="grid grid-cols-3 gap-2">
                <x-rmntor.form.checkbox-input label="Check Input 1" name="check" value="check_1" index="1" />
                <x-rmntor.form.checkbox-input label="Check Input 2" name="check" value="check_2" index="2" />
                <x-rmntor.form.checkbox-input label="Check Input 3" name="check" value="check_3" index="3" />
                <x-rmntor.form.checkbox-input label="Check Input 4" name="check" value="check_4" index="4" />
                <x-rmntor.form.checkbox-input label="Check Input 5" name="check" value="check_5" index="5" />
                <x-rmntor.form.checkbox-input label="Check Input 6" name="check" value="check_6" index="6" />
            </li>
            <li>
                <x-rmntor.form.file-upload name="fileInput" />
            </li>
        </ul>
        <button class="mt-6 px-4 py-2 bg-main text-white rounded-lg text-sm" type="submit">Submit</button>
    </form>
</section>
