<!-- Question Field -->
<div class="form-group">
    {!! Form::label('question', 'Title:') !!}
    <p>{{ $work->title }}</p>
</div>

<!-- Answer Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $work->description }}</p>
</div>

