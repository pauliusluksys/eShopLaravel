<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

    <div class="c-sidebar-brand d-lg-down-none">
        Laravel
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/">
                 Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('admin.categories')}}">
                Categories
            </a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('admin.products')}}">
                Products
            </a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"  href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                Logout
            </a>
        </li>

    </ul>
</div>

<form method="POST" id="logout-form" action="{{ route('logout') }}">
    @csrf
</form>
