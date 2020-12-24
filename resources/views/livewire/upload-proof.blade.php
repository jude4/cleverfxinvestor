   
        <div class="col-12 col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    IDENTITY PROOF
                  
                    <button class="btn btn-success pull-right" wire:click.prevent="uploadIdentity">Upload</button>
                    <input type="file" style="width: 20%" name="" wire:model="identity" class="form-control pull-right"
                        id="" required>
                    @error('identity')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @if ($credential)
               <div class="panel-body">
                   <center>
                       <img src="{{ asset('storage/'.$credential->identity_proof) }}" height="30%" width="60%" />
                        <p class="text-danger">Please provide the font and back of valid photo
                                    ID(Passport, Driver's Licenses, National identification Card, e.t.c)
                                    Each document must show all 4 corners
                        </p>
                    </center>
                 
                </div>

                @else
                <div class="panel-body">
                    <center>
    
                        <div style="margin-top: 20%; margin-bottom: 20%">
                            <i class="fa fa-image fa-3x"></i>
                            <p >No image</p>
                            <p class="text-danger">Please provide the font and back of valid photo
                                    ID(Passport, Driver's Licenses, National identification Card, e.t.c)
                                    Each document must show all 4 corners
                        </p>
                        </div>
    
                    </center>
                </div>
                @endif
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
    
