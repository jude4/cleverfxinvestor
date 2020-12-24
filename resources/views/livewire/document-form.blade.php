<div>
    <div class="row">
        <div class="cols-12 col-md-5">
            <div class="panel">
                <div class="panel-body">
                    <ul>
                        <li><b>NEXT OF KINS(NAME):</b> <i>{{ $credential->name }}</i></li>
                        <li><b>NEXT OF KINS(E-MAIL ADDRESS): </b><i>{{ $credential->email }}</i></li>
                        <li><b>RELATIONSHIP WITH NEXT OF KINS:</b> <i>{{ $credential->relationship }}</i></li>
                        <li><b>PHONE NUMBER OF NEXT OF KINS:</b> <i>{{ $credential->phone }}</i></li>
                        <li><b>BENEFICIARY: </b><i>{{ $credential->beneficiary }}</i></li>
                        <li><b>ADDRESS OF NEXT OF KINS:</b> <i>{{ $credential->address }}</i></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="cols-12 col-md-7">
            <div class="panel">
                <div class="panel-heading">
                      
                </div>
                <div class="panel-body">
                    <form action="" wire:submit.prevent="SubmitDocument">
                        @csrf
                        <div class="form-group">
                            <label for="">Next of Kins(Name)</label>
                            <input type="text" wire:model="name" name="name" class="form-control" id="">
                            @error('name')
                                <spam class="text-danger">{{ $message }}</spam>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Next of Kins(Email address)</label>
                            <input type="email" name="" wire:model="email" class="form-control" id="">
                            @error('email')
                                <spam class="text-danger">{{ $message }}</spam>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Reletionship with Next of Kins</label>
                            <input type="text" name="" wire:model="relationship" class="form-control" id="">
                            @error('relationship')
                                <spam class="text-danger">{{ $message }}</spam>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Phone number of Next of Kins</label>
                            <input type="tel" name="" wire:model="phone" class="form-control" id="">
                            @error('phone')
                                <spam class="text-danger">{{ $message }}</spam>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Beneficiary</label>
                            <input type="text" name="" wire:model="beneficiary" class="form-control" id="">
                            @error('beneficiary')
                                <spam class="text-danger">{{ $message }}</spam>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Address of Next of Kins</label>
                            <input type="text" name="" wire:model="address" class="form-control" id="">
                            @error('address')
                                <spam class="text-danger">{{ $message }}</spam>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="form-control btn btn-success">Submit</button>
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
