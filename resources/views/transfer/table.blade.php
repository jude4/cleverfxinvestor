<h3>Transfers history</h3>

<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Transfered Amount</th>
                <th>Investment balance</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($histories as $history)
            <tr>
                <td>${{ number_format($history->amount) }}</td>
               
                <td>${{ number_format($history->amount) }}</td>
               
                <td>
                    {{ $history->created_at }}
                </td>
               
                
            </tr>
            @endforeach




        </tbody>
    </table>
</div>
    {{-- @endif
    @if (Auth::user()->role_id == 1)
    {{$users->links()}}
    @endif --}}
