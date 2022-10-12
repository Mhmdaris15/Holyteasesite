<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <nav class="navbar navbar-expand-lg">

        <div class="container-fluid">
            <div class="logo">
                <a class="navbar-brand" href="#"><img class="holylogo" src="/img/holytease-logo.png" alt="logo-holytease"></a>
                <a class="text" id="titlePage">love the skin you're in</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                <div class="menu-icon"></div>
                <div class="menu-icon"></div>
                <div class="menu-icon"></div>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {!! ($title == 'Home') ? 'active' : '' !!}" id="home" aria-current="page"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {!! ($title == 'Products') ? 'active' : '' !!}" id="product" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {!! ($title == 'Partnership') ? 'active' : '' !!}" id="partner"
                            href="/partnership">Partnership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#footer" >#GrowAndGlow</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</div>
