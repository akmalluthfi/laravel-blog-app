<nav id="sidebarMenu" class="pt-md-5 col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" >
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a
                    class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"
                    aria-current="page"
                    href="/dashboard"
                >
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts/*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file"></span>
                    My Posts
                </a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf 
                    <button type="submit" class="btn btn-link nav-link w-100 text-start text-danger"><span class="text-danger" data-feather="log-out"></span>Logout</button>
                </form>
            </li>
           
        </ul>
    </div>
</nav>