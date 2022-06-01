<nav class="navbar navbar-expand-sm navbar-light" style="background-color: var(--primary);">
    <div class="container">
        <a class="navbar-brand" href="javascript:void(0)"><?= app_name ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-center <?= ($title==="Home")?'active':'' ?>" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center <?= ($title==="About")?'active':'' ?>" href="/about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>