<li class="">
    <a href="/"><i class="fa fa-home"></i><span>Home</span></a>
</li>


<li class="{{ Request::is('dashboard*') ? 'active' : '' }}">
    <a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
</li>

@if (Auth::user()->role_id == 1)

    <li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}"><i class="fa fa-users"></i><span>Users</span></a>
    </li>

    <li class="{{ Request::is('accounts*') ? 'active' : '' }}">
        <a href="{{ route('accounts.index') }}"><i class="fa fa-money"></i><span>Wallet Addresse(s)</span></a>
    </li>

    <li class="{{ Request::is('user_wallets*') ? 'active' : '' }}">
        <a href="{{ route('user_wallets.index') }}"><i class="fa fa-money"></i><span>Users Wallet</span></a>
    </li>

    <li class="{{ Request::is('fAQS*') ? 'active' : '' }}">
        <a href="{{ route('fAQS.index') }}"><i class="fa fa-edit"></i><span>F A Q S</span></a>
    </li>

    <li class="{{ Request::is('conditions*') ? 'active' : '' }}">
        <a href="{{ route('conditions.index') }}"><i class="fa fa-edit"></i><span>Terms & Conditions</span></a>
    </li>

    <li class="{{ Request::is('sendmail*') ? 'active' : '' }}">
        <a href="{{ url('sendmail') }}"><i class="fa fa-envelope"></i><span>Send Mails</span></a>
    </li>

    
    <li class="{{ Request::is('miscellenous') ? 'active' : '' }}">
    <a href="{{ route('miscellenous.index') }}"><i class="fa fa-adjust"></i><span>Miscellenous</span></a>
</li>


    <li class="{{ Request::is('phone-number') ? 'active' : '' }}">
    <a href="{{ route('phone-number.index') }}"><i class="fa fa-phone"></i><span>Company Phone number</span></a>
</li>

 <li class="{{ Request::is('withdrawal-interval') ? 'active' : '' }}">
    <a href="{{ route('withdrawal-interval.index') }}"><i class="fa fa-clock-o"></i><span>Withdrawal interval</span></a>
</li>

 <li class="{{ Request::is('videos') ? 'active' : '' }}">
    <a href="{{ route('videos.index') }}"><i class="fa fa-file-video-o"></i><span>Videos</span></a>
</li>

 <li class="{{ Request::is('gallery') ? 'active' : '' }}">
    <a href="{{ route('gallery.index') }}"><i class="fa fa-camera"></i><span>Gallery</span></a>
</li>

 <li class="{{ Request::is('reviews') ? 'active' : '' }}">
    <a href="{{ route('reviews.index') }}"><i class="fa fa-feed"></i><span>Reviews</span></a>
</li>

 <li class="{{ Request::is('users-credentials') ? 'active' : '' }}">
    <a href="{{ route('users-credentials.index') }}"><i class="fa fa-credit-card"></i><span>Users Credentials</span></a>
</li>


@endif

@if (Auth::user()->role_id == 2)

    <li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}"><i class="fa fa-users"></i><span>My account</span></a>
    </li>


    <li class="{{ Request::is('accounts*') ? 'active' : '' }}">
        <a href="{{ route('accounts.index') }}"><i class="fa fa-money"></i><span>Deposit Addresse(s)</span></a>
    </li>

    <li class="{{ Request::is('withdraw*') ? 'active' : '' }}">
        <a href="{{ url('withdraw') }}"><i class="fa fa-dollar"></i><span>Withdraw</span></a>
    </li>

    <li class="{{ Request::is('deposit') ? 'active' : '' }}">
        <a href="{{ url('deposit') }}"><i class="fa fa-bank"></i><span>Deposit</span></a>
    </li>

     <li class="{{ Request::is('downlines') ? 'active' : '' }}">
        <a href="{{ url('downlines') }}"><i class="fa fa-bank"></i><span>My downlines</span></a>
    </li>

  
    <li class="{{ Request::is('transfer-funds') ? 'active' : '' }}">
    <a href="{{ url('transfer-funds') }}"><i class="fa fa-money"></i><span>Transfer funds</span></a>
</li>

  <li class="{{ Request::is('credentials') ? 'active' : '' }}">
    <a href="{{ route('credentials.index') }}"><i class="fa fa-credit-card"></i><span>Credentials</span></a>
</li>





@endif


<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{{ route('transactions.index') }}"><i class="fa fa-exchange"></i><span>Transactions</span></a>
</li>

  <li class="{{ Request::is('other-transactions') ? 'active' : '' }}">
    <a href="{{ url('other-transactions') }}"><i class="fa fa-exchange"></i><span>Other Transactions</span></a>
</li>



<li class="{{ Request::is('update_profile') ? 'active' : '' }}">
    <a href="{{ url('update_profile') }}"><i class="fa fa-user-circle"></i><span>Update Profile</span></a>
</li>

<li class="{{ Request::is('logout') ? 'active' : '' }}">
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out"></i><span>Logout</span>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </a>
</li>


