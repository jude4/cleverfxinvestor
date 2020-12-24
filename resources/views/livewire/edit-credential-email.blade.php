 <div class="row">
     <div class="cols-12 col-md-5">
         <div class="panel">
             <div class="panel-heading">
                 <center>
                     <img src="/images/logo-2.jpeg" width="95px" />
                 </center>
                 <div class="panel-title">
                     <center>
                         <b>{{ $subject }}</b>
                     </center>
                 </div>
             </div>
             <hr>
             <div class="panel-body">
                 <p class="text-center">
                     {{ $message }}
                 </p>
                @include('partials._mail_footer')
             </div>
             <div class="panel-footer bg-gray text-center">
                 Copyright &copy; 2020 cleverfxinvestor. All right reserved
             </div>
         </div>
     </div>

     <div class="cols-12 col-md-7">
         <div class="panel">
             <div class="panel-heading">
                 <div class="panel-title">
                     <center>
                         <b>Credential Confirmation email</b>
                     </center>
                 </div>
             </div>
             <div class="panel-body">
                 <form action="" method="POST" wire:submit.prevent="update">
                     @csrf
                     <div class="form-group">
                         <label for="subject">Subject</label>
                         <input type="text" wire:model="subjectField" name="subject" placeholder="" class="form-control"
                             required />
                     </div>
                     <div class="form-group">
                         <label for="message">Message</label>
                         <textarea name="message" wire:model="messageField" id="" class="form-control" cols="30"
                             rows="10" required></textarea>
                     </div>

                     <div class="form-group">
                         <button class="btn btn-success" type="submit" style="width: 100%">Update</button>
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
