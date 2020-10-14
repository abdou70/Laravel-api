<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $client->nom }}</p>
</div>

<!-- Prenom Field -->
<div class="form-group">
    {!! Form::label('prenom', 'Prenom:') !!}
    <p>{{ $client->prenom }}</p>
</div>

<!-- Adresse Field -->
<div class="form-group">
    {!! Form::label('adresse', 'Adresse:') !!}
    <p>{{ $client->adresse }}</p>
</div>

<!-- Telephone Field -->
<div class="form-group">
    {!! Form::label('telephone', 'Telephone:') !!}
    <p>{{ $client->telephone }}</p>
</div>

<!-- Datenaiss Field -->
<div class="form-group">
    {!! Form::label('datenaiss', 'Datenaiss:') !!}
    <p>{{ $client->datenaiss }}</p>
</div>

