<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="logo">
                <a class="navbar-brand" href="#">Holytease.</a>
                <a class="text">love the skin you're in</a>
                <a class="empty"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {!! ($title == 'Home') ? 'active' : '' !!}" aria-current="page"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {!! ($title == 'Products') ? 'active' : '' !!}" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {!! ($title == 'Partnership') ? 'active' : '' !!}"
                            href="/partnership">Partnership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">#GrowAndGlow</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>