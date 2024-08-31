<?php

namespace App\Livewire;

use Illuminate\Support\Collection;
use Livewire\Attributes\Title;
use Livewire\Component;

use App\Models\Students as StudentModel;

use App\Traits\TableColumnProps;

class Students extends Component
{
    use TableColumnProps;

    public array|Collection $students;
    public array $columns;

    public function mount() {
        $this->students = StudentModel::all();

        $this->columns = [
                'name' => $this->setColumnProps('text'),
                'address' => $this->setColumnProps('text'),
                'status' => $this->setColumnProps('badge', 'primary'),
            ];
    }

    #[Title('Students Page')]
    public function render()
    {
        return view('livewire.students');
    }
}
