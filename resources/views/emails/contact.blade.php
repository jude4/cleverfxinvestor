@component('mail::message')


<div class="pull-center bg-cover" >
    <ul>
        <li>Name:           {{ $contact->name }}</li>
        <li>E-mail Address: {{ $contact->email }}</li>
        <li>Message:        {{ $contact->message }}</li>
    </ul>
</div>

@endcomponent
