<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Faq;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class FaqCEV extends Component
{
    // Model Values
    public $question, $answer;

    // Custom Values
    public $action, $isUploaded = false, $faq;

    protected $rules = [
        'question' => '',
        'answer' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validatedData = $this->validate();

        Faq::create($validatedData);

        notify()->success('FAQ Saved Successfully!');

        return $this->redirectRoute('admin.faq.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        Faq::where('id', $this->faq)->update($validatedData);

        notify()->success('FAQ Updated Successfully!');

        return $this->redirectRoute('admin.faq.index');
    }

    public function mount($faq)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Faq::findOrFail($faq);
            $this->question = $data->question;
            $this->answer = $data->answer;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.faq-c-e-v');
    }
}
