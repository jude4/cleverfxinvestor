<?php

namespace App\Http\Livewire;

use App\Review;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateReview extends Component
{
    use WithFileUploads;
    public $count, $setCount, $profilePic, $successMessage;
    public $starOne = false;
    public $starTwo = false;
    public $starThree = false;
    public $starFour = false;
    public $starFive = false;
    public $isPublished = false, $name, $message;

    public function increment($count, $star)
    {
        if ($this->setCount == null) {
            $this->setCount +=1; 
            $this->count = $count;
            $this->setStar($star);
            
        } else {
            $this->count = '';
            $this->setStar($star);
            $this->setCount = null;
        }
    }

    public function setStar($star)
    {
        if ($star == 1) {
            if ($this->starOne) {
                $this->starOne = false;
                $this->starTwo = false;
                $this->starThree = false;
                $this->starFour = false;
                $this->starFive = false;
                $this->count = '';
            } else {
                $this->starOne = true;
                $this->count = 1;
            }
        }

        if ($star == 2) {
            if ($this->starTwo) {
                $this->starTwo = false;
                $this->starThree = false;
                $this->starFour = false;
                $this->starFive = false;
                $this->count = 1;
            } else {
                $this->starTwo = true;
                $this->starOne = true;
                $this->count = 2;
               
            }
        }

        if ($star == 3) {
            if ($this->starThree) {
                $this->starThree = false;
                $this->starFour = false;
                $this->starFive = false;
                $this->count = 2;
            } else {
                $this->starThree = true;
                $this->starTwo = true;
                $this->starOne = true;
                $this->count = 3;
            }
        }

        if ($star == 4) {
            if ($this->starFour) {
                $this->starFour = false;
                $this->starFive = false;
                $this->count = 3;
            } else {
                $this->starFour = true;
                $this->starThree = true;
                $this->starTwo = true;
                $this->starOne = true;
                $this->count = 4;
            }
        }

        if ($star == 5) {
            if ($this->starFive) {
                $this->starFive = false;
                $this->count = 4;
            } else {
                $this->starFive = true;
                $this->starFour = true;
                $this->starThree = true;
                $this->starTwo = true;
                $this->starOne = true;
                $this->count = 5;
            }
        }
    }

    public function addReview()
    {

        $profilePicture = $this->profilePic ? $this->profilePic->store('review_profile_picture') : null;
   
        Review::create([
            'name' => $this->name,
            'message' => $this->message,
            'rating' => $this->count,
            'profile_pic' => $profilePicture,
            'is_published' => $this->isPublished ? $this->isPublished : false
        ]);

        $this->resetField();

        $this->successMessage = 'Review added';
    }

    public function resetField()
    {
        $this->count = '';
        $this->name = '';
        $this->message = '';
        $this->isPublished = false;
    }
    
    public function render()
    {
        return view('livewire.create-review');
    }
}