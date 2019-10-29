<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div class="type-5">
        <div class="container">
            <h2>The Wedding Events:</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services left">
                        <h3 class="services-title"><a href="#" title="Main Ceremony">Main Ceremony</a></h3>
                        <h4 class="services-main-info">16:00 - 17:00</h4>
                        <div class="services-content">
                            <h5>London, UK</h5>
                            <h5>10, Firs Avenue</h5>
                            <div class="push"></div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic officia, illum recusandae laudantium eum fuga. Blanditiis excepturi, et quas ad maiores natus sequi dignissimos quidem culpa error voluptatibus corporis dolore!</p>
                            <div class="push"></div>
                            <a href="#">Learn more →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="img-services">
                        <div class="top-img">
                            <img src="./images/photo1.png" alt="photo1">
                        </div>

                        <p class="bottom-img">
                            <img src="./images/element-4.svg" alt="photo2">
                        </p>

                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services right">
                        <h3 class="services-title"><a href="#" title="Wedding Party">Wedding Party</a></h3>
                        <h4 class="services-main-info">16:00 - 17:00</h4>
                        <div class="services-content">
                            <h5>London, UK</h5>
                            <h5>Brand Point Beach</h5>
                            <div class="push"></div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic officia, illum recusandae laudantium eum fuga. Blanditiis excepturi, et quas ad maiores natus sequi dignissimos quidem culpa error voluptatibus corporis dolore!</p>
                            <div class="push"></div>
                            <a href="#">Learn more →</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>