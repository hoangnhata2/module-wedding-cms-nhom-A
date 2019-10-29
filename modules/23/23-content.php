<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>
<div class="type-23">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="table-1">
                        <h2>Archives</h2>
                        <ul>
                            <li><a href="#">August 2013</a></li>
                            <li><a href="#">July 2013</a></li>
                            <li><a href="#">June 2013</a></li>
                            <li><a href="#">May 2013</a></li>
                            <li><a href="#">March 2013</a></li>
                        </ul>
                    </div>
                    <div class="table-2">
                        <h2>Categories</h2>
                        <ul>
                            <li><a href="#">Advertisement</a></li>
                            <li><a href="#">Aristotle</a></li>
                            <li><a href="#">Hobbies</a></li>
                            <li><a href="#">Uncategorized</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>