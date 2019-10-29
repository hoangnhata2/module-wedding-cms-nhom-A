<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div class="type-21">
        <div class="container">
            <div class="row">
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
                    <h2>Our Website is Under Construction
                    </h2>
                </div>
            </div>

        </div>
    </div>
        
