<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>
<div class="type-10">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-left">
                        <h2>
                            
                                WELCOME
                            
                        </h2>
                        <h6>
                            ON THURSDAY – 31 OCTOBER 2021
                        </h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-mid">
                        <img src="./images/image-1.png" alt="1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-right">
                            <h2>                            
                                CONTACT US                               
                            </h2>
                            <a href="#"><h6>NICK SMITH & SARAH BELLUCCI</h6></a>
                    </div>
                </div>
            </div>
        </div>
    </div>