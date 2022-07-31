<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Review;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class ReviewCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $name, $image, $extra, $message, $stars;

    // Custom Values
    public $action, $isUploaded = false, $review;

    protected $rules = [
        'name' => '',
        'image' => '',
        'extra' => '',
        'message' => '',
        'stars' => '',
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
            $validatedData['image'] = $this->image->store('review_images');
        }

        Review::create($validatedData);

        notify()->success('Review Saved Successfully!');

        return $this->redirectRoute('admin.review.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('review_images');
        }

        Review::where('id', $this->review)->update($validatedData);

        notify()->success('Review Updated Successfully!');

        return $this->redirectRoute('admin.review.index');
    }

    public function mount($review)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Review::findOrFail($review);
            $this->name = $data->name;
            $this->image = $data->image;
            $this->extra = $data->extra;
            $this->message = $data->message;
            $this->stars = $data->stars;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.review-c-e-v');
    }
}
