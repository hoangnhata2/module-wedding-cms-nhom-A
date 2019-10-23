<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
     <div class="type-11">
        <div class="container">
            <h3 class="column-title">Featured posts</h3>
            <div class="push"></div>
            <div class="wrapper">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-content">
                                    <h2><a href="#" title="Propose to Sarah">Standard Post Format</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis assumenda quo sint ad nihil ducimus, iste minus nisi magnam esse incidunt harum. Voluptatum repellat praesentium, odit voluptas dicta natus impedit?</p>
                                    <h5 class="post-date">August 9, 2013</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-img">
                                    <img src="./images/2.png" alt="1" class="img-fluid">
                                </div>
                                <div class="post-content">
                                    <h2><a href="#" title="Propose to Sarah">Sweet Cakes</a></h2>
                                    <p>Aristotle made several efforts to explain how moral conduct contributes to the good life for…</p>
                                    <h5 class="post-date">July 29, 2013</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-img">
                                    <img src="./images/3.png" alt="1" class="img-fluid">
                                </div>
                                <div class="post-content">
                                    <h2><a href="#" title="Propose to Sarah">Having Coffee In Venice</a></h2>
                                    <p>Aristotle made several efforts to explain how moral conduct contributes to the good life for…</p>
                                    <h5 class="post-date">July 29, 2013</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-content">
                                    <div>
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                    <blockquote>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis aperiam iusto officiis exercitationem, optio necessitatibus, veniam soluta expedita, fugiat neque tempora aut animi magni recusandae. Provident veniam
                                        mollitia aperiam nostrum!</blockquote>
                                    <h5 class="post-date">July 29, 2013</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-img">
                                    <img src="./images/5.png" alt="1" class="img-fluid">
                                </div>
                                <div class="post-content">
                                    <h2><a href="#" title="Propose to Sarah">THe Day Before The Wedding</a></h2>
                                    <p>Aristotle made several efforts to explain how moral conduct contributes to the good life for…</p>
                                    <h5 class="post-date">July 29, 2013</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="frame-post">
                                <div class="post-img">
                                    <img src="./images/6.png" alt="1" class="img-fluid">
                                </div>
                                <div class="post-content">
                                    <h2><a href="#" title="Propose to Sarah">Planning My HoneyMoon</a></h2>
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
        </div>
    </div>
        
