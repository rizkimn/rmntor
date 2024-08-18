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
            ]
@endphp

<x-slot:toolbar>
    <div class="cta-btn grid grid-flow-col gap-2">
        <x-rmntor.download-button
            href="#download-document"
            text="Document"
        />
        <x-rmntor.select-input
            :options="$options"
        />
    </div>
    <x-rmntor.search-input
        placeholder="Temukan sesuatu..."
    />
</x-slot:toolbar>

<section>
    <h1>Hello World</h1>
</section>
