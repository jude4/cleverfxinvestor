<div>
    <div class="panel">
           @if($ukSuccessMessage)
    <div class="panel-footer">
        <p class="alert alert-success" style="width: 55%">
            <i class="fa fa-check-circle fa-2x"></i>
            Contact updated

            <i class="fa fa-close pull-right" wire:click="$set('ukSuccessMessage', null)"></i>
        </p>

    </div>
    @endif
        <div class="panel-body">
            <form method="POST" wire:submit.prevent="updateUkNumber">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="cols-12 col-md-10">
                            <div class="form-group">
                                <label for="ukNumber">
                                    UK Number
                                </label>
                                <input name="ukNumber" type="tel" style="width: 100%" wire:model="uk"
                                required    
                                class="form-control" placeholder="{{ $ukNumber }}">
                                @error('ukNumber')
                                    <p class="text-error">
                                        {{$message}}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="cols-12 col-md-2">
                            <button type="submit" class=" btn btn-sm btn-primary" style="margin-top: 28px">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="panel">
        <div class="panel-body">
            <form method="POST" wire:submit.prevent="updateArabicNumber">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="cols-12 col-md-10">
                            <div class="form-group">
                                <label for="arabic">
                                    Arabic Number
                                </label>
                                <input required name="arabicNumber" type="tel" style="width: 100%" wire:model="arabic"
                                    class="form-control" placeholder="{{ $arabicNumber }}">
                            </div>
                        </div>
                        <div class="cols-12 col-md-2">
                            <button type="submit" class=" btn btn-sm btn-primary" style="margin-top: 28px">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if($arabicSuccessMessage)
    <div class="panel-footer">
        <p class="alert alert-success" style="width: 55%">
            <i class="fa fa-check-circle fa-2x"></i>
            Contact updated

            
            <i class="fa fa-close pull-right" wire:click="$set('arabicSuccessMessage', null)"></i>

        </p>

    </div>
    @endif

</div>
