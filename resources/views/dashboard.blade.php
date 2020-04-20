<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head><!-- Imports -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fragen zu Chatbots</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chatbot.css') }}" rel="stylesheet">
</head>

<body>

        <!-- MAIN CONTENT -->
        <main>

          <div class="main-headline">
            <h1 class="hauptüberschrift">Fragen zu Chatbots</h1>
          </div>

          <div class="description">
            <h4 style="color: red; font-size: 100%;">Bitte wählen Sie die richtige Antwort aus.</h4>
            <br>
            <h4 style="color: red; font-size: 100%;">Es gibt nur <strong>eine</strong> richtige Antwortmöglichkeit! </h4>
          </div>


          <div class="fragen">
            <form method="POST" action="{{ route('checkForm') }}">
              @csrf

              <div class="anweisung" style="padding: 15px 50px; margin-bottom: 15px;">
                <label for="question1" class="col-form-label">Frage 1: Für was möchten Sie sich anmelden?</label>
                <br>
                <select  id="question1" class="drop" name="question1" required>
                  <option value="" selected>auswählen..</option>
                  <option value="1">Kochkurs</option>
                  <option value="2">Sportverein</option>
                  <option value="3">Sprachschule</option>
                </select>
                <br><br>

                <label for="question2" class="col-form-label">Frage 2: Mit wem oder was werden Sie gleich interagieren?</label>
                <br>
                <select  id="question2" class="drop" name="question2" required>
                  <option value="" selected>auswählen..</option>
                  <option value="1">mit einem Dozenten</option>
                  <option value="2">mit einem Chatbot</option>
                  <option value="3">mit Niemandem</option>
                </select>
                <br><br>

                <label for="question3" class="col-form-label">Frage 3: Was braucht der Chatbot, um Ihnen das Anmeldeformular schicken zu können?</label>
                <br>
                <select  id="question3" class="drop" name="question3" required>
                  <option value="" selected>auswählen..</option>
                  <option value="1">Meinen Wohnort</option>
                  <option value="2">E-Mail Adresse</option>
                  <option value="3">Telefonnummer</option>
                </select>
                <br><br>
		<label for="question4" class="col-form-label">Frage 4: Wann können Sie einen Amazon Gutschein in Höhe von 10€ gewinnen?</label>
                <br>
                <select  id="question4" class="drop" name="question4" required>
                  <option value="" selected>auswählen..</option>
                  <option value="1">Sofort</option>
                  <option value="2">Wenn ich den Chatbot danach frage</option>
                  <option value="3">Erst nach vollständiger Beendigung der Umfrage</option>
                </select>
                <br><br>
              </div>


              <button type="submit" class="btn btn-fragen">
                  <span class="btn btn-primary" style="font-size: 15pt;">Abschicken</span>
              </button>
          </form>

        </div>



        </main>

        <div class="footer">
          Copyright @Uni Goettingen
        </div>


</body>

</html>
