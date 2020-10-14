
    

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{{ route('clients.index') }}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('comptes*') ? 'active' : '' }}">
    <a href="{{ route('comptes.index') }}"><i class="fa fa-edit"></i><span>Comptes</span></a>
</li>

