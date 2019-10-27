<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div class="type-7">
        <div class="container">
            <h2 class="column-title">FROM THE BLOG</h2>
            <div class="push"></div>
            <div class="wrapper">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-img">
                                    <img src="./images/1.png" alt="1" class="img-responsive">
                                </div>
                                <div class="post-content">
                                    <h2><a href="#" title="Propose to Sarah">Propose to Sarah</a></h2>
                                    <p>Aristotle made several efforts to explain how moral conduct contributes to the good life for…</p>
                                    <h5 class="post-date">July 29, 2013</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-img">
                                    <img src="./images/2.png" alt="1" class="img-responsive">
                                </div>
                                <div class="post-content">
                                    <h2><a href="#" title="Sweer Cakes">Sweer Cakes</a></h2>
                                    <p>Aristotle made several efforts to explain how moral conduct contributes to the good life for…</p>
                                    <h5 class="post-date">July 29, 2013</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-img">
                                    <img src="./images/3.png" alt="1" class="img-responsive">
                                </div>
                                <div class="post-content">
                                    <h2><a href="#" title="Having Coffee In Venice">Having Coffee In Venice</a></h2>
                                    <p>Aristotle made several efforts to explain how moral conduct contributes to the good life for…</p>
                                    <h5 class="post-date">July 29, 2013</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-img">
                                    <img src="./images/4.png" alt="1" class="img-responsive">
                                </div>
                                <div class="post-content">
                                    <h2><a href="#" title="The Dinner">The Dinner</a></h2>
                                    <p>Aristotle made several efforts to explain how moral conduct contributes to the good life for…</p>
                                    <h5 class="post-date">July 29, 2013</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-img">
                                    <img src="./images/5.png" alt="1" class="img-responsive">
                                </div>
                                <div class="post-content">
                                    <h2><a href="#" title="The Day Before The Wedding">The Day Before The Wedding</a></h2>
                                    <p>Aristotle made several efforts to explain how moral conduct contributes to the good life for…</p>
                                    <h5 class="post-date">July 29, 2013</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-img">
                                    <img src="./images/6.png" alt="1" class="img-responsive">
                                </div>
                                <div class="post-content">
                                    <h2><a href="#" title="Planning My HoneyMoon">Planning My HoneyMoon</a></h2>
                                    <p>Aristotle made several efforts to explain how moral conduct contributes to the good life for…</p>
                                    <h5 class="post-date">July 29, 2013</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="row">
                <div class="bottom">
                    <p>
                        <img src="./images/element-2.svg" alt="illustratation5">
                    </p>
                    <a href="#" class="goto-btn">Go To Blog</a>
                </div>
            </div>
        </div>
    </div>
        
