@extends('layout')
@section('content')
<section class="evento">
		<h2><strong>Vanguart</strong> toca <span>Rubber Soul</span> (Beatles) | 17.10 | SEXTA</h2>
		<h3>O Vanguart tem mais de 10 anos de carreira, e vai apresentar o Rubber Soul, cl&aacute;ssico da maior banda de todos os tempos, no palco do Saloon. Uma noite &uacute;nica na vida de todo mundo que estiver presente.</h3>
		<p><a href="http://www.vanguart.com.br/">www.vanguart.com.br</a></p>
		<img src="{{ asset('assets/images/foto_grande.jpg')}}" width="100%" height="auto" />
		
{{Form::open(['url'=>'/evento','class' => 'cadastro'])}}
			<h4>Enviar nome para a lista do dia</h4>
			{{ HTML::ul($errors->all(), array('class'=>'errors'))}}
			{{Form::text('nome','',array('placeholder' => 'nome completo'))}}
			{{Form::text('tel','',array('placeholder' => 'rg'))}}
			{{Form::email('email','',array('placeholder' => 'email'))}}
           {{Form::submit('Enviar')}}
		   {{Form::close()}}

		
		<p>Uma noite em que bandas tocam discos que influenciaram diretamente o som que fazem.<br/> Toda sexta rola uma reinterpreta&ccedil;&atilde;o de um grande disco da hist&oacute;ria da m&uacute;sica.</p>
	</section>
	@stop	
	
