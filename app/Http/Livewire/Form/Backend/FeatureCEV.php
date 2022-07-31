<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Feature;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class FeatureCEV extends Component
{
    // Model Values
    public $logo, $title, $excerpt, $link;

    // Custom Values
    public $action, $isUploaded = false, $feature;

    protected $rules = [
        'logo' => '',
        'title' => '',
        'excerpt' => '',
        'link' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validatedData = $this->validate();

        Feature::create($validatedData);

        notify()->success('Feature Saved Successfully!');

        return $this->redirectRoute('admin.feature.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        Feature::where('id', $this->feature)->update($validatedData);

        notify()->success('Feature Updated Successfully!');

        return $this->redirectRoute('admin.feature.index');
    }

    public function mount($feature)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Feature::findOrFail($feature);
            $this->logo = $data->logo;
            $this->title = $data->title;
            $this->excerpt = $data->excerpt;
            $this->link = $data->link;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.feature-c-e-v');
    }
}
