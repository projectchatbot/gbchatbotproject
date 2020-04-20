<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head><!-- Imports -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Willkommen zum Experiment</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chatbot.css') }}" rel="stylesheet">
</head>

<body>

        <!-- MAIN CONTENT -->
        <main>

          <div class="main-headline">
            <h1 class="hauptüberschrift">Anmeldung leicht gemacht - mit Chatbots!</h1>
          </div>

          <div class="description">
            <p>
              Es freut uns sehr, dass Sie sich entschieden haben, an der Umfrage teilzunehmen.<br>
              Es erwartet Sie eine gesamte Bearbeitungszeit von maximal 10 Minuten.<br> Sie haben nach vollständiger Beendigung der Umfrage die Chance, einen von <strong>3x 10€-Amazon-Gutscheinen</strong> zu gewinnen!<br>
              Ihnen werden nach dem Klicken auf den unteren Link 4 Fragen gestellt, um zu überprüfen, ob Sie die Aufgabe genau verstanden haben.
            </p>
          </div>

          <hr>

          <div class="anweisung">
            <h3> Sie können sich das Szenario folgendermaßen vorstellen:</h3>
            <p class="anw-text">1. Sie werden nach dem Beantworten der Fragen an einen Chatbot weitergeleitet, welcher ein Roboter ist, der Ihnen im Chat Fragen beantwortet.
              <br>Mit diesem Chatbot sollen Sie sich 4-5 Minuten beschäftigen.<br><br>
              2. Stellen Sie sich vor, der Chatbot sei ein/-e Mitarbeiter/-in zur Verwaltung der Anmeldung für
                Göttinger Sportvereine. Dabei ist das Ziel, dass Sie sich bei einem Sportverein anmelden.<br>
                Natürlich ist dies nur zu Testzwecken und Sie werden nicht tatsächlich in einem Verein angemeldet!<br><br>
                3. Sagen Sie dafür zunächst, was sie möchten (z.B. “In einem Verein anmelden”) und folgen Sie
                den Fragen des Chatbots. Am Ende wird dieser Sie nach Ihrer Telefonnummer fragen, bei der
                Sie eine beliebige angeben können (es muss nicht Ihre tatsächliche Telefonnummer sein).<br><br>
                4. Wenn Sie die Unterhaltung mit dem Chatbot erfolgreich durchgeführt haben, werden Sie
                zur Umfrage weitergeleitet.<br><br>
		5. <strong>Ganz wichtig</strong>: Sie können den Amazon Gutschein erst dann gewinnen, wenn Sie die Umfrage <strong>vollständig</strong> ausgefüllt haben.
		<br> Geben Sie dafür bitte Ihre (tatsächliche) E-Mail-Adresse an, damit wir Ihnen den Gutscheincode zusenden können, falls Sie diesen gewonnen haben sollten.
            </p>

          </div>

          <hr style="margin-top:20px;">

          <div style="margin: 0 120px 0 120px;">
            <p style="color: #ef7d00";>
              Alles klar, dann können wir beginnen! Klicken Sie unten rechts auf den Button, um zu den Fragen
              weitergeleitet zu werden.
            </p>
          </div>

          <div>
            <a href="/form">
              <button type="button" class="btn-fragen btn btn-primary">Hier geht's zu den Fragen</button>
            </a>
          </div>

        </main>

</body>

</html>
