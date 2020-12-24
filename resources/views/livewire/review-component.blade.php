<div>
    @if ($successMessage)
        <div class="panel-footer">
            <p class="alert alert-info" style="width: 50%">
                <i class="fa fa-check-circle fa-2x"></i>
                {{ $successMessage }}
                <i class="fa fa-close pull-right" wire:click="$set('successMessage', null)"></i>
            </p>
        </div>
    @endif
    <div class="row">
        @foreach ($reviews as $review)
            <div class="cols-6 col-md-4">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <center>
                                @if ($review->profile_pic)
                                    <img src="{{ asset('storage/' . $review->profile_pic) }}" class="avatar" />
                                @else
                                    <img src="/images/avatar.png" class="avatar" />

                                @endif
                            </center>
                        </div>
                    </div>
                    <hr>
                    <div class="panel-body text-center">
                        {{ $review->message }}
                        <p>
                            @if ($review->rating == 0)
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            @endif

                            @if ($review->rating == 1)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            @endif

                            @if ($review->rating == 2)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            @endif

                            @if ($review->rating == 3)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            @endif

                            @if ($review->rating == 4)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            @endif

                            @if ($review->rating == 5)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            @endif
                        </p>
                    </div>
                    <div class="panel-footer" style="padding: 20px">
                        20th June, 2020
                        @if ($review->is_published)
                            <span class="pull-right btn btn-success btn-sm"
                                wire:click="publishedReview({{ $review->id }})" style="margin-left: 8px" role="button">
                                <i class="fa fa-check-o fa-pull-right"></i>
                                Published
                            </span>
                        @else
                            <span class="pull-right btn btn-danger btn-sm"
                                wire:click="publishedReview({{ $review->id }})" style="margin-left: 8px" role="button">
                                <i class="fa fa-asterisk fa-pull-right"></i>
                                Unpblished
                            </span>
                        @endif
                        <a href="{{ route('reviews.edit', $review->id) }}">
                            <i class="fa fa-edit fa-2x fa-pull-right"></i>
                        </a>

                        <i class="fa fa-trash fa-2x fa-pull-right" wire:click="deleteReview({{ $review->id }})"
                            onclick="confirm('Are you sure?')" role="button"></i>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
