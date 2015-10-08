<!DOCTYPE html>
<html lang="pt">

<head>

  <meta http-equiv="Content-Type"
    content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
        <!-- Hammer reload -->
          <script>
            setInterval(function(){
              try {
                if(typeof ws != 'undefined' && ws.readyState == 1){return true;}
                ws = new WebSocket('ws://'+(location.host || 'localhost').split(':')[0]+':35353')
                ws.onopen = function(){ws.onclose = function(){document.location.reload()}}
                window.onbeforeunload = function() { ws = null }
                ws.onmessage = function(){
                  var links = document.getElementsByTagName('link');
                    for (var i = 0; i < links.length;i++) {
                    var link = links[i];
                    if (link.rel === 'stylesheet' && !link.href.match(/typekit/)) {
                      href = link.href.replace(/((&|\?)hammer=)[^&]+/,'');
                      link.href = href + (href.indexOf('?')>=0?'&':'?') + 'hammer='+(new Date().valueOf());
                    }
                  }
                }
              }catch(e){}
            }, 1000)
          </script>
        <!-- /Hammer reload -->
      
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" >
<link rel="stylesheet" href="{{ asset('assets/images/favicon.png') }}">
<link rel="stylesheet" href="{{ asset('assets/images/apple-touch-icon.png') }}" rel="apple-touch-icon">


  <title>Jack Daniel's Saloon</title>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/ie.css" />
  <![endif]-->

</head>

<body>
	<div class="container">
	<header>
		<a class="current logo" href="{{url('/')}}">Jack Daniel's Saloon</a>
	</header>


 @yield('content')
 </div>
	<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
	<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '488576231301755',
			xfbml      : true,
			version    : 'v2.4'
		});
	};
	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
 </body>
 </html>