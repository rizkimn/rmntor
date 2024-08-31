<?php

namespace App\Livewire\Rmntor;

use Livewire\Attributes\Title;
use Livewire\Component;

use App\Traits\TableColumnProps;

class Tables extends Component
{
    use TableColumnProps;

    public array $students;
    public array $studentColumns;
    public array $columns;

    public function mount()
    {
        $this->students = [
                [
                    "id"     => 6,
                    "nama"   => "Rizki M Nur",
                    "npm"    => "07352211106",
                    "status" => "aktif",
                    "ips"    => '2.4',
                    "ipk"    => '2.9',
                ],
                [
                    "id"     => 666,
                    "nama"   => "Alchemer",
                    "npm"    => "07352211666",
                    "status" => "tidak aktif",
                    "ips"    => '1.4',
                    "ipk"    => '2.9',
                ],
            ];

        $this->studentColumns = [
                'nama' => $this->setColumnProps('text'),
                'npm' => $this->setColumnProps('text'),
                'status' => $this->setColumnProps('badge', [
                        'success' => ':value=aktif',
                        'danger'  => ':value=tidak aktif',
                    ]),
                'ips' => $this->setColumnProps('text'),
                'ipk' => $this->setColumnProps('text'),
            ];
    }

    #[Title("Tables Page")]
    public function render()
    {
        return view('livewire.rmntor.tables');
    }
}
