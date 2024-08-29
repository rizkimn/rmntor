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
    <form action="" method="GET">
        <ul class="grid grid-cols-3 gap-4">
            <li>
                <x-rmntor.form.text-input label="Full Name" name="full-name" placeholder="Budi Arie Setiadi" :show-icon="false" />
            </li>
            <li class="flex items-end">
                <x-rmntor.form.select-input name="select" :options="$options" label="Pilih Pilihan" name="pilihan" />
            </li>
            <li class="flex items-end justify-between">
                <x-rmntor.form.checkbox-input label="Check Input 1" name="check[]" value="check_1" index="1" />
                <x-rmntor.form.checkbox-input label="Check Input 2" name="check[]" value="check_2" index="2" />
                <x-rmntor.form.checkbox-input label="Check Input 3" name="check[]" value="check_3" index="3" />
            </li>
        </ul>
    </form>
</section>
