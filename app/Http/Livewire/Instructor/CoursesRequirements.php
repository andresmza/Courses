<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use App\Models\Requirement;
use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;

class CoursesRequirements extends Component
{
    public $course, $requirement, $name;

    protected $rules = [
        'requirement.name' => 'required'
    ];

    public function mount(Course $course){
        $this->course = $course;
        $this->requirement = new Requirement();
    }

    public function render()
    {
        return view('livewire.instructor.courses-requirements');
    }

    public function store(){

        $this->validate([
            'name' => 'required'
        ]);

        $this->course->requirements()->create([
            'name' => $this->name
        ]);

        $this->reset('name');
        $this->course = Course::find($this->course->id); //actualizar la info del curso
        
    }

    public function edit(Requirement $requirements){
        $this->requirement = $requirements;
    }

    public function update(){
        $this->validate();
        $this->requirement->save();

        $this->requirement = new Requirement(); //borrar las propiedades de requirements

        $this->course = Course::find($this->course->id); //actualizar la info del curso
    }

    public function destroy(Requirement $requirement){
        $requirement->delete();

        $this->course = Course::find($this->course->id); //actualizar la info del curso
    }
}
