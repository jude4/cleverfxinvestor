<div class="table-responsive">
    <table class="table" id="fAQS-table">
        <thead>
            <tr>
                <th>Question</th>
        <th>Answer</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fAQS as $fAQ)
            <tr>
                <td>{{ $fAQ->question }}</td>
            <td>{{ $fAQ->answer }}</td>
                <td>
                    {!! Form::open(['route' => ['fAQS.destroy', $fAQ->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fAQS.show', [$fAQ->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('fAQS.edit', [$fAQ->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$fAQS->links()}}
</div>
