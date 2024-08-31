<x-slot:toolbar>
    <a href="/dashboard/students/new" class="px-4 py-2 flex items-center border border-primary text-sm rounded-xl bg-primary/10 hover:bg-primary/15">
        <span class="mr-3">
            <x-rmntor.icon name="new-student-icon" color="primary" />
        </span>
        <span>New Student</span>
    </a>
</x-slot:toolbar>

<section>
    {{-- In work, do what you enjoy. --}}
    <x-rmntor.table :table-data="$students" :columns="$columns" />
</section>
