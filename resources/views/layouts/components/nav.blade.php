<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('accounts.index') }}">Belimbing Bank</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('accounts.index') }}">Akun</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('customers.index') }}">Nasabah</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('deposito-types.index') }}">Tipe Deposito</a></li>
            </ul>
        </div>
    </div>
</nav>