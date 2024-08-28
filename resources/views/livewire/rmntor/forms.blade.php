@php
    $options = [
                [
                    'name' => "Option 1",
                    'slug' => "option-1",
                ],
                [
                    'name' => "Option 2",
                    'slug' => "option-2",
                ],
                [
                    'name' => "Option 3",
                    'slug' => "option-3",
                ],
                [
                    'name' => "Option 4",
                    'slug' => "option-4",
                ],
                [
                    'name' => "Option 5",
                    'slug' => "option-5",
                ],
                [
                    'name' => "Option 6",
                    'slug' => "option-6",
                ],
            ];
@endphp

<x-slot:toolbar>

</x-slot:toolbar>

<section>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <form action="#">
        <ul class="grid grid-cols-3 gap-4">
            <li>
                <x-rmntor.form.text-input label="Full Name" name="full-name" placeholder="Budi Arie Setiadi" :show-icon="false" />
            </li>
            <li class="flex items-end">
                <x-rmntor.form.select-input name="select" :options="$options" label="Pilih Pilihan" />
            </li>
        </ul>
    </form>
</section>
