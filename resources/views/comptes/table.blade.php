<div class="table-responsive">
    <table class="table" id="comptes-table">
        <thead>
            <tr>
                <th>Numcompte</th>
        <th>Numagence</th>
        <th>Clerib</th>
        <th>Ninea</th>
        <th>Dateouv</th>
        <th>Fraisouv</th>
        <th>Client</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($comptes as $compte)
            <tr>
                <td>{{ $compte->numcompte }}</td>
            <td>{{ $compte->numagence }}</td>
            <td>{{ $compte->clerib }}</td>
            <td>{{ $compte->ninea }}</td>
            <td>{{ $compte->dateouv }}</td>
            <td>{{ $compte->fraisouv }}</td>
            <td>{{ $compte->client }}</td>
                <td>
                    {!! Form::open(['route' => ['comptes.destroy', $compte->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('comptes.show', [$compte->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('comptes.edit', [$compte->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
