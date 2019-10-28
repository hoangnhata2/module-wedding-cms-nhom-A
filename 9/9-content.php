<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>
<div class="type-9">
        <div class="container">
            <div class="tile">SELECTION OF PHOTOS OF SARAH & NICK:</div>


            <div class="row table-1">
                <div class="col-md-4">
                    <div class="gird-1">
                        <a href="#"></a><img src="./images/image-1.png" alt="1"></a>
                        <div class="middle">
                            <div class="icon"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gird-1">
                        <a href="#"></a><img src="./images/image-2.png" alt="1"></a>
                        <div class="middle">
                            <div class="icon"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gird-1">
                        <a href="#"></a><img src="./images/image-3.png" alt="1"></a>
                        <div class="middle">
                            <div class="icon"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row table-2">
                <div class="col-md-4">
                    <div class="gird-1">
                        <a href="#"></a><img src="./images/image-4.png" alt="1"></a>
                        <div class="middle">
                            <div class="icon"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gird-1">
                        <a href="#"></a><img src="./images/image-5.png" alt="1"></a>
                        <div class="middle">
                            <div class="icon"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gird-1">
                        <a href="#"></a><img src="./images/image-6.png" alt="1"></a>
                        <div class="middle">
                            <div class="icon"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="center">
                <a class="text-button" href="#">GO TO GALLERY</a>
            </p>
        </div>
    </div>