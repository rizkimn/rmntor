<x-slot:toolbar>

</x-slot:toolbar>

<section>
    {{-- In work, do what you enjoy. --}}
    <a href="/dashboard/students/new" class="px-4 py-2 border border-primary text-sm rounded-xl hover:bg-primary/5">New Student</a>
    <x-rmntor.table :table-data="$students" :columns="$columns" />
</section>
