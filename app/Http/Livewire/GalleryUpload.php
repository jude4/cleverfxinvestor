<?php

namespace App\Http\Livewire;

use App\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class GalleryUpload extends Component
{
    use WithPagination, WithFileUploads;

    public $photo, $successMessage;
    
    public function uploadPhoto()
    {
        $gallery = $this->photo->store('gallery');
        Gallery::create([
            'image'=> $gallery 
        ]);

        $this->successMessage = 'Photo added';
        
    }

    public function deletePhoto($id)
    {
        $photo = Gallery::find($id);
        $photo->delete();

        $this->successMessage = 'Photo deleted';
    }
    
    public function render()
    {
        $photos = Gallery::latest()->paginate(10);
        return view('livewire.gallery-upload', compact('photos'));
    }
}