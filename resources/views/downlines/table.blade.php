  <table class="table" id="users-table">
      <thead>
          <tr>
              <th>Name</th>
              {{-- <th>Role Id</th> --}}
              <th>Email</th>
              <th>Profile Pic</th>
              <th>Phone No</th>

              <th>Join date</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($downlines as $downline)
              <tr>
                  <td>{{ $downline->name }}</td>
                  {{-- <td>{{ $user->role_id }}</td>
                  --}}
                  <td>{{ $downline->email }}</td>
                  <td>
                      @if ($downline->profile_pic == null)
                          <img src="{{ asset('images/avatar.png') }}" class="img-circle" alt="User Image" /
                              width="20px">
                      @else
                          <img src="{{ asset('storage/' . $downline->profile_pic) }}" class="img-circle"
                              alt="User Image" / width="20px">
                      @endif

                  </td>
                  <td>{{ $downline->phone_no != null ? $downline->phone_no : '-' }}</td>


                  <td>{{ $downline->created_at->toFormattedDateString() }}</td>
                  <td>
                      <a href="{{ route('downlines.show', $downline->id) }}" class="btn btn-info">view</a>
                  </td>
              </tr>
          @endforeach
      </tbody>

    </table>
    
    {{ $downlines->links() }}