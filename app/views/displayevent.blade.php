@extends('layout')
@section('content')
<section class="evento">
<ul>
@foreach($tasks as $task)
<li>Event name:{{$task->eventname}}  Date:{{$task->date}} </li>
@endforeach
</ul>
@stop