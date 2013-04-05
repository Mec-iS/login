@extends('layouts.default')

@section('title')Registrati @stop

@section('content')
    <h2>Registrati</h2>
    @foreach ($errors->all() as $message)
        <div class="alert alert-error">{{ $message }}</div>
    @endforeach
    {{ Form::open(array('url' => 'register', 'method' => 'POST', 'class' => 'form-horizontal')) }}
        <div class="control-group">
            {{ Form::label('nome', 'Nome', array('class' => 'control-label')) }}
            <div class="controls">{{ Form::text('nome', Input::old('nome')) }}</div>
        </div>
        <div class="control-group">
            {{ Form::label('cognome', 'Cognome', array('class' => 'control-label')) }}
            <div class="controls">{{ Form::text('cognome', Input::old('cognome')) }}</div>
        </div>
        <div class="control-group">
            {{ Form::label('citta', 'Città', array('class' => 'control-label')) }}
            <div class="controls">{{ Form::text('citta', Input::old('citta')) }}</div>
        </div>
        <div class="control-group">
            {{ Form::label('provincia', 'Provincia', array('class' => 'control-label')) }}
            <div class="controls">{{ Form::text('provincia', Input::old('provincia')) }}</div>
        </div>
        <div class="control-group">
            {{ Form::label('email', 'Indirizzo e-mail', array('class' => 'control-label')) }}
            <div class="controls">{{ Form::text('email', Input::old('email')) }}</div>
        </div>
        <div class="control-group">
            {{ Form::label('telefono', 'Telefono', array('class' => 'control-label')) }}
            <div class="controls">{{ Form::text('telefono', Input::old('telefono')) }}</div>
        </div>
        <div class="control-group">
            {{ Form::label('cf', 'Codice Fiscale', array('class' => 'control-label')) }}
            <div class="controls">{{ Form::text('cf', Input::old('cf')) }}</div>
        </div>
        <div class="control-group">
            {{ Form::label('password', 'Password', array('class' => 'control-label')) }}
            <div class="controls">{{ Form::text('password') }}</div>
        </div>
        <div class="control-group">
            {{ Form::label('password_confirmation', 'Ripeti Password', array('class' => 'control-label')) }}
            <div class="controls">{{ Form::text('password_confirmation') }}</div>
        </div>
        <div class="control-group">
            <b>Informativa sul trattamento dei dati personali</b>
            <p>Integrazione dell’Informativa ex art.13 D.Lgs 30 giugno 2003, n.196 La presente informativa integra quella già rilasciata, costituente la Privacy Policy del sito, pubblicato all’indirizzo ……………………………/privacy-policy/ </p>
            <p>I dati personali rilasciati con l’accesso a questo sito, anche sensibili perché idonei a rivelare gli orientamenti politici, nonché l’indirizzo IP (Internet Protocol) dell’apparecchiatura con la quale si è connessi, saranno trattati con modalità cartacee, elettroniche e telematiche, per le finalità di:</p>
            <ul>
                <li>poter inserire commenti sul sito;</li>
                <li>essere informati, anche mediante l’invio di newsletter e a mezzo e-mail, sull’attività dei comitati di FARE per Fermare il declino;</li>
                <li>consentire la partecipazione all’attività politica di FARE per Fermare il Declino.</li>
            </ul>
            <p>Il conferimento dei dati è facoltativo, tuttavia il mancato conferimento di quelli contrassegnati con * non consentirà di realizzare le finalità citate e potrebbero avere come conseguenza l’impossibilità di registrarsi al sito. I dati saranno trattati dai responsabili e incaricati di Italia.NET  ed eventualmente da società esterne designate responsabili del trattamento. Il responsabile designato è raggiungibile all’indirizzo e-mail privacy@netita.it, cui è possibile scrivere per ricevere le relative istanze, per l’esercizio dei diritti di cui all’art. 7 del Codice della Privacy (accesso, integrazione, correzione, cancellazione dei dati, ecc.) nonché per conoscere identità e sede dei responsabili del trattamento.</p>

            <b>Consenso ex artt. 23-26 D.Lgs 30 giugno 2003, n. 196</b>
            <label class="checkbox">
                <input type="checkbox" name="privacy">Letta l’informativa di cui sopra e la Privacy policy del sito, acconsento al trattamento dei miei dati personali, con le modalità ivi descritte.
            </label>
            <b>Consenso all’invio di newsletter o messaggi di posta elettronica non a scopo di pubblicità commerciale</b>
            <label class="checkbox">
                <input type="checkbox" name="privacy2">Letta l’informativa di cui sopra e la Privacy policy del sito, acconsento al trattamento dei miei dati personali,anche allo scopo dell’invio di newsletter o messaggi di posta elettronica non a scopo pubblicitario, per le altre finalità indicate.
            </label>
        </div>
        <div class="control-group">
            <div class="controls">{{ Form::submit('Registrati', array('class' => 'button')) }}</div>
        </div>
    {{ Form::close() }}
@stop
