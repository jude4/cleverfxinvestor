<!-- Profile Pic Field -->
<v-card-text class="form-group">
    {!! Form::label('profile_pic', 'Profile Pic:') !!}
    <p>
           @if ($user->profile_pic == null)
                        <img src="{{ asset('img/custom/avatar.png') }}" class="img-circle"
                             alt="User Image"/ width="50px">
                    @else 
                        <img src="{{ Storage::url('app/profile_picture/'.$user->profile_pic) }}" class="img-circle"
                        alt="User Image"/  width="50px">
                @endif
                       
    </p>
</v-card-text>
<!-- Name Field -->
<v-card-text class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</v-card-text>
<v-divider></v-divider>
<!-- Email Field -->
<v-card-text class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</v-card-text>

<v-divider></v-divider>
<v-divider></v-divider>
<!-- Phone No Field -->
<v-card-text class="form-group">
    {!! Form::label('phone_no', 'Phone No:') !!}
    <p>{{ $user->phone_no }}</p>
</v-card-text>
<v-divider></v-divider>
<!-- Next of KINS No Field -->
<v-card-text class="form-group">
    {!! Form::label('Next of KINS', 'Next of KINS:') !!}
    <p>{{ $user->next_od_kins }}</p>
</v-card-text>

<v-divider></v-divider>
<!-- Beneficiary No Field -->
<v-card-text class="form-group">
    {!! Form::label('Beneficiary', 'Beneficiary:') !!}
    <p>{{ $user->beneficiary }}</p>
</v-card-text>
<v-divider></v-divider>

<!-- Address No Field -->
<v-card-text class="form-group">
    {!! Form::label('Address', 'Address:') !!}
    <p>{{ $user->address }}</p>
</v-card-text>


<v-divider></v-divider>
<!-- Identification Field -->
@if ($user->identity_proof != null || $user->residence_proof != null)
    <v-card-text class="form-group">


        @if ($user->identity_proof )
            {!! Form::label('identity_proof', 'Identity Proof:') !!}
            <p>
                <img src="{{ asset('storage/'.$user->identity_proof) }}" width="200px">
            </p>
        @endif
        @if ($user->residence_proof)
            {!! Form::label('residence proof', 'Residence Proof:') !!}
            <p>
                <img src="{{ asset('storage/'.$user->residence_proof) }}" width="200px">
            </p>
        @endif
    </v-card-text>
@endif

