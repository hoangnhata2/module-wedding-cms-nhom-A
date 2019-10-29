<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div class="type-13">
        <div class="container">
            <h1 class="title">The ceremony</h1>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <h2 class="post-title">our love story</h2>
                    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus illo doloribus sint nam et, minus aut ut nesciunt recusandae veritatis pariatur, assumenda rerum? Sunt non maxime eum placeat obcaecati inventore?</p>
                    <div class="read">
                    <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <h2 class="post-title">Location</h2>
                    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus illo doloribus sint nam et, minus aut ut nesciunt recusandae veritatis pariatur, assumenda rerum? Sunt non maxime eum placeat obcaecati inventore?</p>
                    <div class="read">
                    <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <h2 class="post-title">Braidmaids</h2>
                    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus illo doloribus sint nam et, minus aut ut nesciunt recusandae veritatis pariatur, assumenda rerum? Sunt non maxime eum placeat obcaecati inventore?</p>
                    <div class="read">
                    <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <h2 class="post-title">Groomesmen</h2>
                    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus illo doloribus sint nam et, minus aut ut nesciunt recusandae veritatis pariatur, assumenda rerum? Sunt non maxime eum placeat obcaecati inventore?</p>
                    <div class="read">
                    <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

