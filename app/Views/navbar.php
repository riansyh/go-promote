<div class="nav">
    <div class="bg-nav"></div>
    <header class="nav-con">
        <a href="/" class="Logo"><img src="/img/logo.png" alt=""></a>
        <ul class="satu">
            <li>
                <div class="home in">
                    <a href="/" class="nav-item color-text-black">Home</a>
                </div>
            </li>
            <li>
                <div class="in">
                    <a href="/#produk" class="nav-item color-text-black">Product</a>
                </div>
            </li>
            <li>
                <div class="in">
                    <a href="/#review" class="nav-item color-text-black">Testimoni</a>
                </div>
            </li>
            <li>
                <div class="in">
                    <a href="/#bottom" class="nav-item color-text-black">Contact</a>
                </div>
            </li>
            <li>
                <div class="nav-item-detail ">
                    <a href="#" class="nav-detail color-text-black">Detail</a>
                    <i class="fas fa-chevron-down color-text-black"></i>
                    <ul class="intinya">
                        <div>
                            <li class="nav-con"><a href="/sk">Syarat & ketentuan</a></li>
                        </div>
                        <div>
                            <li class="nav-con"><a href="#">Tips dan Trik</a></li>
                        </div>
                    </ul>
                </div>
            </li>
        </ul>
        <ul>
            <li class="top-switch">

                <input type="checkbox" id="switch" <?php
                                                    helper('cookie');
                                                    if (get_cookie('theme') == 1) {
                                                        echo "checked";
                                                    }
                                                    ?> name="theme" class="switch" /><label for="switch" class="sw">
                </label>

            </li>
            <?php if (!session()->get('isLoggedIn')) : ?>
                <li>
                    <div class="login loggin"><a href="/login" class="color-text-black">Login</a></div>
                </li>
                <li>
                    <div class="register"><a href="/register" class="info nav-item">Register</a></div>
                </li>
            <?php else : ?>
                <?php if ($url = $_SERVER['REQUEST_URI'] === "/dashboard") : ?>
                    <li>
                        <div class="in"><a href="/profile" class="info nav-item">Profile</a></div>
                    </li>
                <?php else : ?>
                    <?php if (session()->get('level') === 2) : ?>
                        <li>
                            <div class="in"><a href="/admin" class="info nav-item">Admin</a></div>
                        </li>
                    <?php else : ?>
                        <li>
                            <div class="in"><a href="/dashboard" class="info nav-item">Dashboard</a></div>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
                <li>
                    <div class="in"><a href="/Login/logout" class="warning nav-item">Logout</a></div>
                </li>
            <?php endif; ?>
        </ul>

</div>
</header>
</div>