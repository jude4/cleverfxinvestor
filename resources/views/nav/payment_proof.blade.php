<v-dialog
v-model="dialog"
width="500"

>
<template v-slot:activator="{ on }">
<v-btn
    color="info lighten-2"
    dark
    v-on="on"
    default
    text
    class="bg-blue text-white"
    style="padding: 8px"
>
    UPLOAD PAYMENT PROOF
</v-btn>
</template>

<v-card>
<v-card-title
    class="headline grey lighten-2"
    primary-title
>
   UPLOAD PAYMENT PROOF
</v-card-title>

<v-form action="{{ url('deposite/payment_proof') }}" method="POST" enctype="multipart/form-data">
    @csrf
<v-card-text>
        <v-text-field
            type="file"
            name="payment_proof"
            value="{{ old('payment_proof') }}"
            required
        ></v-text-field>
</v-card-text>
@if ($errors->has('payment_proof'))
<p class="help is-danger text-danger text-center">{{ $errors->first('payment_proof') }}</p>
 @endif
<v-divider></v-divider>

<v-card-actions>
    <v-spacer></v-spacer>
    <v-btn
    color="info"
    text
    @click="dialog = false"
    class="bg-green text-white "
    style="padding: 8px"
    type="submit"

    >
    Update
    </v-btn>
</v-card-actions>
</v-form>

</v-card>
</v-dialog>
