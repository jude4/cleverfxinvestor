<div>
    @if ($successMessage)
        <div class="panel-footer">
            <p class="alert alert-info" style="width: 50%">
                <i class="fa fa-check-circle fa-2x"></i>
                {{ $successMessage }}
                <i class="fa fa-close pull-right" wire:click.prevent="$set('successMessage', null)"></i>
            </p>
        </div>
    @endif
    <div class="row">
        @foreach ($credentials as $credential)
            <div class="cols-12 col-md-5">
                <div class="panel">
                    <div class="panel-heading">
                        <img src="{{ asset('storage/' . $credential->user()->first()->profile_pic) }}" class="avatar" />
                        <b>Name: {{ ucfirst($credential->user()->first()->name) }}</b>

                    </div>
                    <hr>
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

                    <div class="panel-footer text-right">
                        @if ($credential->status)
                            <button class="btn btn-success" disabled>
                                <i class="fa fa-check"></i>
                                Confirm
                            </button>
                        @else
                            <button wire:click="confirmCredential({{ $credential->id }}, {{ $credential->status }})"
                                class="btn btn-danger">
                                <i class="fa fa-close"></i>
                                Pending
                            </button>
                        @endif
                        <a href="{{ route('users-credentials.show', $credential->id) }}" class="text-danger ">View
                            more</button>
                    </div>

                </div>

            </div>

        @endforeach

    </div>
</div>
