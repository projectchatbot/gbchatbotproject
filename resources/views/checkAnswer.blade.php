<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head><!-- Imports -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Übersicht</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chatbot.css') }}" rel="stylesheet">
</head>

<body>

        <!-- MAIN CONTENT -->
        <main>

          <div class="main-headline">
            <h1 class="hauptüberschrift">Antwortübersicht</h1>
          </div>

          
	  

	  <br>

          @if($q1 == 1 && $q2 == 1 && $q3 == 1 && $q4 == 1)
	    <div class="description"> Super, Sie haben alle Fragen richtig beantwortet!<br>
            Klicken Sie nun unten rechts auf den Button, um mit dem Chatbot interagieren zu können.
	    </div>
	    <div style="margin: 0 120px 0 120px;">
	    <a href="https://chatbot-no4.herokuapp.com/">
	    <button type="button" class="btn-check btn btn-primary">Weiter zu dem Chatbot </button>
	    </a></div>
          @else
               <div class="check">
		<h4 style="color: yellow; font-size: 140%;">Sie haben leider nicht alle Fragen richtig beantwortet!</h4>
		<br>
	    </div>
	    <div class="description">Lesen Sie sich die Anleitung auf der Hauptseite bitte noch mal durch und versuchen Sie es noch einmal.</div>
	   <div style="margin: 0 120px 0 120px;">
	   <a href="/ ">
              <button type="button" class="btn-check btn btn-primary">Zurück zur Hauptseite </button>
            </a><div>
          @endif
	
	<br><br>


        </main>

        <div class="footer">
          Copyright @Uni Goettingen
        </div>


</body>

</html>
