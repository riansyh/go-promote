<div class="nav">
    <header>
        <a href="/" class="Logo"><img src="/img/logo.png" alt=""></a>
        <ul class="satu">
            <li>
                <div class="home in">
                    <a href="/" class="nav-item">Home</a>
                </div>
            </li>
            <li>
                <div class="in">
                    <a href="/#produk" class="nav-item">Product</a>
                </div>
            </li>
            <li>
                <div class="in">
                    <a href="/#review" class="nav-item">Testimoni</a>
                </div>
            </li>
            <li>
                <div class="in">
                    <a href="/#bottom" class="nav-item">Contact</a>
                </div>
            </li>
            <li>
                <div class="nav-item-detail">
                    <a href="#" class="nav-detail">Detail</a>
                    <i class="fas fa-chevron-down"></i>
                    <ul class="intinya">
                        <div>
                            <li><a href="#">Syarat & ketentuan</a></li>
                        </div>
                        <div>
                            <li><a href="#">Biodata Pembuat</a></li>
                        </div>
                    </ul>
                </div>
            </li>
        </ul>
        <ul>
            <?php if (!session()->get('isLoggedIn')) : ?>
                <li>
                    <div class="loggin"><a href="/login" class="login">Login</a></div>
                </li>
                <li>
                    <div class="register"><a href="/register" class="info nav-item">Register</a></div>
                </li>
            <?php else : ?>
                <li>
                    <div class="in"><a href="/dashboard" class="info nav-item">Dashboard</a></div>
                </li>
                <li>
                    <div class="in"><a href="/Login/logout" class="warning nav-item">Logout</a></div>
                </li>
            <?php endif; ?>
        </ul>
        
</div>
</header>
</div>