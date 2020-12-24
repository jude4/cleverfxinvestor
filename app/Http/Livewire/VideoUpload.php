<?php

namespace App\Http\Livewire;

use App\Video;
use Livewire\Component;
use Livewire\WithPagination;

class VideoUpload extends Component
{
    use WithPagination;
    public $videoUrl, $successMessage;
    
    
    public function uploadVideo()
    {
        Video::create([
            'url' => $this->videoUrl
        ]);

        $this->successMessage = 'Upload successful';
        $this->resetField();


    }

    public function deleteVideo($id)
    {
        $video = Video::find($id);
        $video->delete();
        
        $this->successMessage = 'Deleted';
    }

    public function resetField()
    {
        $this->videoUrl = '';
    }

    public function render()
    {
        $videos = Video::latest()->paginate(6);
        
        return view('livewire.video-upload', compact('videos'));
    }
}