<div>
    <div class="container">
        <h2 class="text-center">Create Review</h2>
        <a href="{{ route('reviews.index') }}">
            <i class="fa fa-arrow-left fa-2x"></i>
        </a>
        <div class="row">

            <div class="cols-12 col-md-8 offset-md-2">
                <div class="panel">
                    <div class="panel-heading">

                    </div>
                    <div class="panel-body">
                        <form action="" wire:submit.prevent="addReview">
                            @csrf
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" wire:model="name" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="Rating">Rating</label>
                                @if ($count)
                                    {{ $count }} out of 5
                                @endif
                                <div class="form-control">
                                    {{-- <span wire:click="increment(1)"
                                        @click="starOne ? starOne = false : starOne = true" role="button"
                                        :class="starOne ? 'checked fa fa-star' : 'fa fa-star' "></span>
                                    <span wire:click="increment(2)"
                                        @click="starTwo ? starTwo = false : starTwo = true; starOne = true"
                                        role="button" :class="starTwo ? 'checked fa fa-star' : 'fa fa-star' "></span>
                                    <span wire:click="increment(3)"
                                        @click="starThree ? starThree = false : starThree = true; starTwo = true; starOne = true"
                                        role="button" :class="starThree ? 'checked fa fa-star' : 'fa fa-star' "></span>
                                    <span wire:click="increment(4)"
                                        @click="starFour ? starFour = false : starFour = true; starThree = true; starTwo = true; starOne = true"
                                        role="button" :class="starFour ? 'checked fa fa-star' : 'fa fa-star' "></span>
                                    <span wire:click="increment(5)"
                                        @click="starFive ? starFive = false : starFive = true; starFour = true; starThree = true; starTwo = true; starOne = true"
                                        role="button" :class="starFive ? 'checked fa fa-star' : 'fa fa-star' "></span>
                                    --}}
                                    <span wire:click="increment(1, 1)" role="button"
                                        class="{{ $starOne ? 'checked fa fa-star' : 'fa fa-star' }}"></span>
                                    <span wire:click="increment(2, 2)" role="button"
                                        class="{{ $starTwo ? 'checked fa fa-star' : 'fa fa-star' }}"></span>
                                    <span wire:click="increment(3, 3)" role="button"
                                        class="{{ $starThree ? 'checked fa fa-star' : 'fa fa-star' }}"></span>
                                    <span wire:click="increment(4, 4)" role="button"
                                        class="{{ $starFour ? 'checked fa fa-star' : 'fa fa-star' }}"></span>
                                    <span wire:click="increment(5, 5)" role="button"
                                        class="{{ $starFive ? 'checked fa fa-star' : 'fa fa-star' }}"></span>
                                </div>

                            </div>

                            <div class="form-group">
                                <label>Feedback</label>
                                <textarea name="message" wire:model="message" placeholder="Type here..."
                                    class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="cols-6 col-md-6">
                                        <label for="">Published review</label>
                                        <input type="checkbox" name="isPublished" class="form-control-checkbox" id=""
                                            wire:model="isPublished">
                                    </div>
                                    <div class="cols-6 col-md-6">
                                        <input type="file" wire:model="profilePic" name="profilePic"
                                            class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="form-control btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>

                    @if ($successMessage)
                        <div class="panel-footer">
                            <p class="alert alert-info" style="width: 50%">
                                <i class="fa fa-check-circle fa-2x"></i>
                                {{ $successMessage }}
                                <i class="fa fa-close pull-right" wire:click="$set('successMessage', null)"></i>
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
