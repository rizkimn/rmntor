<x-slot:toolbar></x-slot:toolbar>

<section class="overflow-auto">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h1>Students</h1>

    <x-rmntor.table :table-data="$students" :columns="$studentColumns" />
</section>
