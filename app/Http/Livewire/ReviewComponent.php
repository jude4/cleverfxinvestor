<?php

namespace App\Http\Livewire;

use App\Review;
use Livewire\Component;
use Livewire\WithPagination;

class ReviewComponent extends Component
{
    use WithPagination;

    public $successMessage;
    
    public function deleteReview($id)
    {
        $review = Review::find($id);
        $review->delete();

        $this->successMessage = 'Deleted';
    }

    public function publishedReview($id)
    {
        $review = Review::find($id);
        
        $review->is_published = !$review->is_published;
        $review->save();

        $this->successMessage = $review->is_published ? 'Published' : 'UnPublished';
    }
     
    public function render()
    {
        $reviews = Review::latest()->paginate(6);
        return view('livewire.review-component', compact('reviews'));
    }
}