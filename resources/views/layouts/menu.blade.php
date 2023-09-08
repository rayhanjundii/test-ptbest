<li class="nav-item">
    <a href="{{ route('datadiris.index') }}"
       class="nav-link {{ Request::is('datadiris*') ? 'active' : '' }}">
        <p>Data Diri</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('cruds.index') }}"
       class="nav-link {{ Request::is('cruds*') ? 'active' : '' }}">
        <p>Cruds</p>
    </a>
</li>





