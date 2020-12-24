<div>
    <div class="container">
           @if ($successMessage)
                   <div class="panel-footer">
                       <p class="alert alert-info" style="width: 50%">
                           <i class="fa fa-check-circle fa-2x"></i>
                           {{ $successMessage }}
                           <i class="fa fa-close pull-right" wire:click="$set('successMessage', null)"></i>
                       </p>
                   </div>
               @endif
        <form action="" class="form pull-right" wire:submit.prevent="uploadPhoto">
            @csrf
            <div class="form-group" style="display: inline-flex">
                <input type="file" class="form-control" wire:model="photo" placeholder="" style="display: inline-flex"
                    required>
                <button class="btn btn-primary" style="display: inline-flex">upload</button>
            </div>
        </form>

    </div>

    <div class="container" justify="center" align="center">
        <div class="row" justify="center" align="center">
            <div cols="12" md="12" justify="center" align="center">
                @foreach ($photos as $photo)
                    <img data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                        data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50"
                        src="{{ asset('storage/' . $photo->image) }}" style="display: inline-flex; margin-left: 1px; margin-right: 1px" 
                        width="200" role="button" wire:click="deletePhoto({{ $photo->id }})" onclick="confirm('Are you sure')">
                @endforeach
            </div>

        </div>
        {{$photos->links()}}
    </div>
</div>
