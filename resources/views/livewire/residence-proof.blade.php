       <div class="col-12 col-md-6">
           <div class="panel">
               <div class="panel-heading">
                   PROOF OF RESIDENCE
                   <button class="btn btn-success pull-right" wire:click.prevent="uploadResidence">Upload</button>
                   <input type="file" style="width: 20%" name="" wire:model="residence" class="form-control pull-right"
                       id="">
                   @error('residence')
                       <p class="text-danger pull-right">{{ $message }}</p>
                   @enderror
               </div>
               @if ($credential)
                   <div class="panel-body">
                       <center>
                           <img src="{{ asset('storage/' . $credential->residence_proof) }}" height="30%" width="60%" />
                           <p class="text-danger">Please provide
                               a recent utility bill or bank statement from
                               the last 3 months that includes your full name and address.
                               Each document must show all 4 corners
                           </p>

                       </center>

                   </div>

               @else
                   <div class="panel-body">
                       <center>

                           <div style="margin-top: 20%; margin-bottom: 20%">
                               <i class="fa fa-image fa-3x"></i>
                               <p>No image</p>
                               <p class="text-danger">Please provide
                                   a recent utility bill or bank statement from
                                   the last 3 months that includes your full name and address.
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
