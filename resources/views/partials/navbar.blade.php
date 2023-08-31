<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="navbar container my-1">
        <a class="navbar-brand" href="/">
            <img class="img" src="/img/LogoFC.svg" alt="FindKontraktor">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mt-3">
                <li class="nav-item mx-2">
                    <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">
                        <div class="text-center">
                            <i class="fa-solid fa-house fs-4 d-block"></i>
                            <p class="m-0">Home</p>
                      </div>
                    </a>
                    <div class="strip bg-dark"></div>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">
                        <div class="text-center">
                            <i class="fa-solid fa-users fs-4 d-block"></i>
                            <p class="m-0">Following</p>
                      </div>
                    </a>
                    <div class="strip bg-dark"></div>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">
                        <div class="text-center">
                            <i class="fa-solid fa-message fs-4 d-block "></i>
                            <p class="m-0">Messaging</p>
                      </div>
                    </a>
                    <div class="strip bg-dark"></div>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">
                        <div class="text-center">
                            <i class="fa-solid fa-inbox fs-4 d-block "></i>
                            <p class="m-0">Notifications</p>
                      </div>
                    </a>
                    <div class="strip bg-dark"></div>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link {{ ($active === "me") ? 'active' : '' }}" href="#">
                        <div class="text-center">
                            <img src="img/jennie.jpg" class="rounded-circle profile-picture" height="25" width="25" alt="Jennie">
                            <p class="m-0">Me <i class="fa-solid fa-caret-down"></i></p>
                      </div>
                    </a>
                    <div class="strip bg-dark"></div>
                </li>
            </ul>

            <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}">
                <button type="button" class="btn btn-dark">Sign Out</button>
            </a>
        </div>
    </div>
</nav>
