<?php

namespace App\Livewire;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AlumniComponent extends Component
{
    public int $classOf;

    public function mount()
    {
        $this->classOf = -1;
    }

    public function render()
    {
        return view('livewire.alumni-component',
        [
            'classes' => $this->getClasses(),
            'students' => $this->getStudents(),
        ]);
    }

    private function getClasses(): array
    {
        return DB::table('students')
            ->where('class_of', '<=', date('Y'))
            ->distinct('class_of')
            ->orderBy('class_of')
            ->pluck('class_of','class_of')
            ->toArray();
    }
    private function getStudents(): array
    {
        $operand = '>=';
        $classOf = -1;

        if($this->classOf > -1){

            $operand = '=';
            $classOf = $this->classOf;
        }

        return Student::query()
            ->where('class_of', $operand, $classOf)
            ->orderBy('last_name')
            ->orderBy('first_name')
            ->get()
            ->toArray();
    }
}
