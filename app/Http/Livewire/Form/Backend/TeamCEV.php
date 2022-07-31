<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Team;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class TeamCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $name, $image, $qualification, $department, $about, $experience;

    // Custom Values
    public $action, $isUploaded = false, $team;

    protected $rules = [
        'name' => '',
        'image' => '',
        'qualification' => '',
        'department' => '',
        'about' => '',
        'experience' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if (gettype($this->image) != 'string') {
            $this->isUploaded = true;
        }
    }

    public function store()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('team_images');
        }

        Team::create($validatedData);

        notify()->success('Team Saved Successfully!');

        return $this->redirectRoute('admin.team.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('team_images');
        }

        Team::where('id', $this->team)->update($validatedData);

        notify()->success('Team Updated Successfully!');

        return $this->redirectRoute('admin.team.index');
    }

    public function mount($team)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Team::findOrFail($team);
            $this->name = $data->name;
            $this->image = $data->image;
            $this->qualification = $data->qualification;
            $this->department = $data->department;
            $this->about = $data->about;
            $this->experience = $data->experience;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.team-c-e-v');
    }
}
