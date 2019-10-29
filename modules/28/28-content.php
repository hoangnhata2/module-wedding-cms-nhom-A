<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div class="type-28">
        <div class="container">
            <h1 class="title">Our Story</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="push"></div>
                        <img src="./images/slider3.png" alt="1" class="image-story img-responsive">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-wrapper">
                        <div class="push"></div>
                        <h2>Music + Coffee = Love</h2>
                        <h4>You are what I never knew I always wanted</h4>
                        <p>Nick and I had known each other for about a year before we got together. We worked for the same company but were in separate departments. We knew each other only because we both got hired on at the same time and went through training
                            together. We would say hi to each other in the hall if we ever saw one another, but never really went out of our way to talk to one another.</p>
                        <p>One night a few of my coworkers invited me to a concert they were going to, they said a lot of work people would be there and it would be fun. I love music so I said ok! At the concert I was just sitting there enjoying the music
                            when Nick walked up to me and asked how I was enjoying the concert, I said it was great, and invited him to sit next to me. We got to talking and ended up talking for the rest of the concert.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>