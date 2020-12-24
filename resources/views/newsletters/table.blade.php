<div class="table-responsive">
    <table class="table" id="newsletters-table">
        <thead>
            <tr>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($newsletters as $newsletter)
            <tr>
                <td>{{ $newsletter->email }}</td>
                <td>
                    {!! Form::open(['route' => ['newsletters.destroy', $newsletter->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('newsletters.show', [$newsletter->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

