@extends('layout')
@section('content')
<section id="home">
		<div class="dia">
			<h2>Vanguart</h2>
			<p>Toca <strong>Beatles</strong> | 17.10 | 21h</p>
			<a href="{{ url('evento')}}" class="link">&nbsp;</a>
			<img src="{{ asset('assets/images/foto_evento.jpg')}}" />		</div>
		<div class="dia">
			<h2>Vanguart</h2>
			<p>Toca <strong>Beatles</strong> | 17.10 | 21h</p>
			<a href="{{ url('evento_fechado')}}" class="link">&nbsp;</a>
			<img src="{{ asset('assets/images/foto_evento.jpg')}}" />		</div>
		<div class="dia">
			<h2>Vanguart</h2>
			<p>Toca <strong>Beatles</strong> | 17.10 | 21h</p>
			<a href="{{ url('evento_lista')}}" class="link">&nbsp;</a>
			<img src="{{ asset('assets/images/foto_evento.jpg')}}" />		</div>
               
			    @if(!empty($mixdata['tasks']))
				  @foreach($mixdata['tasks'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =1)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
		         <img src="{{ asset('assets/images/foto_breve.png')}}"/>		
		        </div>
				@endif
				 @if(!empty($mixdata['tasks1']))
				  @foreach($mixdata['tasks1'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =2)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>		
		        </div>
				@endif
				@if(!empty($mixdata['tasks2']))
				@foreach($mixdata['tasks2'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =3)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
		         <img src="{{ asset('assets/images/foto_breve.png')}}"/>		
		        </div>
				@endif
				
				                @if(!empty($mixdata['tasks3']))
				  @foreach($mixdata['tasks3'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =4)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
		         <a href="{{url('addevent',$parameters =4)}}"><img src="{{ asset('assets/images/foto_breve.png')}}"/></a>		
		        </div>
				@endif
				
				                @if(!empty($mixdata['tasks4']))
				  @foreach($mixdata['tasks4'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =5)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>		
		        </div>
				@endif
				
				                @if(!empty($mixdata['tasks5']))
				  @foreach($mixdata['tasks5'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =5)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>		
		        </div>
				@endif
				
				                @if(!empty($mixdata['tasks6']))
				  @foreach($mixdata['tasks6'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =5)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				
				
				                @if(!empty($mixdata['tasks7']))
				  @foreach($mixdata['tasks7'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =5)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				
				
				@if(!empty($mixdata['tasks8']))
				  @foreach($mixdata['tasks8'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =6)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				
				                @if(!empty($mixdata['tasks9']))
				  @foreach($mixdata['tasks9'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =7)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				
				
				                @if(!empty($mixdata['tasks10']))
				  @foreach($mixdata['tasks10'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =9)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				
				                @if(!empty($mixdata['tasks11']))
				  @foreach($mixdata['tasks11'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =10)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				
				  @if(!empty($mixdata['tasks12']))
				  @foreach($mixdata['tasks12'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =12)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				
				@if(!empty($mixdata['tasks13']))
				  @foreach($mixdata['tasks13'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =13)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				
				@if(!empty($mixdata['tasks14']))
				  @foreach($mixdata['tasks14'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =13)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				
				@if(!empty($mixdata['tasks15']))
				  @foreach($mixdata['tasks15'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =14)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				
				@if(!empty($mixdata['tasks16']))
				  @foreach($mixdata['tasks16'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =16)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				@if(!empty($mixdata['tasks17']))
				  @foreach($mixdata['tasks17'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =17)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				@if(!empty($mixdata['tasks18']))
				  @foreach($mixdata['tasks18'] as $task)
				   <div class="dia breve">
				  <h2><a href="{{ url('displayevent',$parameters =18)}}" >{{$task->eventname}}</a></h2>
				</div>
				@endforeach
				@else
				<div class="dia breve">
				<h2>Em Breve</h2>
<img src="{{ asset('assets/images/foto_breve.png')}}"/>
		        </div>
				@endif
				
	</section>
@stop