<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div class="type-1">
        <div class="container">
            <div class="first-row">
                <div class="logo-wrapper">
                    <a href="#" title="Nick & Sarah" class="logo">
                        <img src="./images/logo.png" alt="logo">
                    </a>
                    <div class="clearboth"></div>
                    <a href="#" title="Nick & Sarah" class="logo-title">
                        <div class="left-name">Nick</div>
                        <div class="name-delimiter">&</div>
                        <div class="right-name">Sarah</div>
                    </a>
                    <span class="logo-tagline">ARE GETTING MARRIED!</span>
                </div>
            </div>
            <div class="second-row">
                <div class="toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <nav id="main-menu">
                    <ul id="menu-main-menu" class="menu">
                        <li class="menu-item">
                            <a href="#" class="menu-item-a">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-item-a">The wedding</a>
                            <i class="fas fa-angle-down"></i>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Wedding Blog</a>
                                    <!-- <i class="fas fa-angle-right"></i>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="#" class="sub-menu-item-a">Newspaper Style</a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="#" class="sub-menu-item-a">Blog Post Format</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Our Story</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">The Ceremony</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">The Party</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Bridesmaids</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Groommens</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Contact us</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-item-a">Photo Album</a>
                            <i class="fas fa-angle-down"></i>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">the party</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Simple gallery</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-item-a">Guestbook</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-item-a">Templates</a>
                            <i class="fas fa-angle-down"></i>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Coming soon pages</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Maintenance mode</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Right SideBar</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Left Sidebar</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Two Sidebar</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Search</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="sub-menu-item-a">Page not found</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- <img src="https://the-wedding-day.vamtam.com/wp-content/themes/the-wedding-day/wpv_theme/assets/images/svg/menu-lines.svg" class="menu-lines"> -->
        </div>
    </div>

