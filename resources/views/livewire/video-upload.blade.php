<div>
    <div class="container">
        <form action="" class="form pull-right" wire:submit.prevent="uploadVideo">
            @csrf
            <div class="form-group" style="display: inline-flex">
                <input type="url" class="form-control" wire:model="videoUrl" placeholder="https://www.youtube.com/embed/tgbNymZ7vq" style="display: inline-flex" required>
                <button class="btn btn-primary" style="display: inline-flex">upload</button>
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
    <div class="container">
        <div class="row" justify="center" align="center">
           
            @foreach($videos as $video)
            <div class="cols-12 col-md-4" justify="center" align="center">
                <div class="panel">
                    <div class="panel-body">
                    <iframe height="315" src="{{ $video->url }}"></iframe>
                    </div>
                    <div class="panel-footer text-center" wire:click="deleteVideo({{ $video->id }})" role="button" style="background-color: #b17c2e; color: #fff">
                        <i class="fa fa-trash" ></i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
                {{$videos->links()}}
    </div>
</div>
