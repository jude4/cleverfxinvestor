<div>
    <div class="row">
        <div class="cols-12 col-md-12">
            @if($successMessage)
                <p class="alert alert-success" style="width: 55%">
                    <i class="fa fa-check-circle fa-2x"></i>
                {{$successMessage}}

                    <i class="fa fa-close pull-right" wire:click="$set('successMessage', null)"></i>
                </p>
            @endif
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="display-5"><i class="fa fa-envelope-o"></i> Send Email Notification</h3>
                </div>

                <div class="panel-body">
                    <form action="{{ url('/send/custom/mail') }}" wire:submit.prevent="sendEmail" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="from">From</label>
                            <input class="form-control" type="text" value="support@cleverfxinvestor.com" disabled>
                        </div>

                        <div class="form-group">
                            <label for="Subject">Subject</label>
                            <input type="text" name="subject" wire:model="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="Email address">To</label>
                            @if ($recipient != 'single')
                                <select name="recipient" required wire:model="recipient" id="" class="form-control">
                                    <option>Choose recipient to send message to</option>
                                    <option value="multiple">All registered users</option>
                                    <option value="single">Single user</option>
                                </select>
                            @endif
                            @if ($recipient == 'single')
                                <input type="email" wire:model="email" name="email" class="form-control"
                                    placeholder="Enter email address" required>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="Message">Message</label>
                            <textarea name="message" wire:model="message" class="form-control" id="" cols="30" rows="10"
                                placeholder="Type message here..." required></textarea>
                        </div>

                        <div class="form-group">
                            <button class="form-control btn btn-success" style="width: 100%">
                                Send
                            </button>
                        </div>
                        {{-- <v-card-text>
                            <v-text-field type="text" name="from" label="From" value="support@cleverfxinvestor.com"
                                disabled required></v-text-field>
                        </v-card-text>
                        <v-card-text>
                            <v-text-field label="Subject" name="subject" required type="text"></v-text-field>
                        </v-card-text>
                        @if ($errors->has('phone_no'))
                            <p class="help is-danger text-danger text-center">{{ $errors->first('phone_no') }}</p>
                        @endif

                        </v-card-text>

                        <v-card-text class="form-group">

                            <v-card-text>
                                <v-text-field label="Enter Email address" name="email" type="text"></v-text-field>
                            </v-card-text>
                            <v-card-text>
                                <v-textarea name="message" placeholder="Type message here..."></v-textarea>
                            </v-card-text>
                            <v-card-actions>
                                <button type="submit" class="btn btn-primary btn-sm">Send</button>
                            </v-card-actions> --}}

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
