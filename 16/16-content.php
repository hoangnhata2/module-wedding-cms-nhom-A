<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>
<div class="type-18">
        <div class="container">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="gird-1">
                            <a href="#"></a><img src="./images/18-1.png" alt="1"></a>
                            <div class="middle">
                                <div class="icon"><i class="fas fa-eye"></i></div>
                            </div>
                        </div></div>
                    <div class="swiper-slide"><div class="gird-1">
                        <a href="#"></a><img src="./images/18-2.png" alt="2"></a>
                        <div class="middle">
                            <div class="icon"><i class="fas fa-eye"></i></div>
                        </div>
                    </div></div>
                    <div class="swiper-slide"><div class="gird-1">
                        <a href="#"></a><img src="./images/18-3.png" alt="3"></a>
                        <div class="middle">
                            <div class="icon"><i class="fas fa-eye"></i></div>
                        </div>
                    </div></div>
                    <div class="swiper-slide"><div class="gird-1">
                        <a href="#"></a><img src="./images/18-4.png" alt="4"></a>
                        <div class="middle">
                            <div class="icon"><i class="fas fa-eye"></i></div>
                        </div>
                    </div></div>
                    <div class="swiper-slide"><div class="gird-1">
                        <a href="#"></a><img src="./images/18-5.png" alt="5"></a>
                        <div class="middle">
                            <div class="icon"><i class="fas fa-eye"></i></div>
                        </div>
                    </div></div>

                </div>
                
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>