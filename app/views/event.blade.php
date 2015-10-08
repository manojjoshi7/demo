@extends('layout')
@section('content')
<section class="evento">
{{Form::open(['url'=>'/addevent','class' => 'cadastro'])}}
			<h4>Enter Event</h4>
			{{ HTML::ul($errors->all(), array('class'=>'errors'))}}
            {{Form::text('Event','',array('placeholder' => 'Enter Event'))}}
			{{Form::hidden('tablenum',$table, array('id' => 'invisible_id')) }}
			{{Form::input('date', 'date', null, ['placeholder' => 'Date'])}}
			{{Form::submit('submit')}}
		   {{Form::close()}}
	</section>		   
@stop