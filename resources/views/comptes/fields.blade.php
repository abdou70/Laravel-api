<!-- Numcompte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numcompte', 'Numcompte:') !!}
    {!! Form::text('numcompte', null, ['class' => 'form-control']) !!}
</div>

<!-- Numagence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numagence', 'Numagence:') !!}
    {!! Form::text('numagence', null, ['class' => 'form-control']) !!}
</div>

<!-- Clerib Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clerib', 'Clerib:') !!}
    {!! Form::number('clerib', null, ['class' => 'form-control']) !!}
</div>

<!-- Ninea Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ninea', 'Ninea:') !!}
    {!! Form::text('ninea', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateouv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateouv', 'Dateouv:') !!}
    {!! Form::text('dateouv', null, ['class' => 'form-control']) !!}
</div>

<!-- Fraisouv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fraisouv', 'Fraisouv:') !!}
    {!! Form::text('fraisouv', null, ['class' => 'form-control']) !!}
</div>

<!-- Client Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client', 'Client:') !!}
    {!! Form::number('client', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('comptes.index') }}" class="btn btn-default">Cancel</a>
</div>
