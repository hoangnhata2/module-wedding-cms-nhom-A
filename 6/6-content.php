<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
     <div class="type-6" data-parallax="scroll" data-image-src="./images/6-1.png">
        <div class="container">
            <div class="row">
                <div class="bottle-parallax" data-parallax="scroll"></div>
                <div class="col-md-8">
                    <div class="push"></div>
                    <h3>Let your visitors</h3>
                    <h3>RSVP to the wedding</h3>
                </div>
                <div class="col-md-4">
                    <form action="#" class="form-attending">
                        <div class="form">
                            <h2>ARE YOU ATTENDING?</h2>
                            <h2>RSVP HERE</h2>
                            <div class="form-content">
                                <h4>Name:</h4>
                                <div class="your-name">
                                    <input type="text" class="input-name">
                                </div>
                                <h4>Guest:</h4>
                                <div class="guest">
                                    <select id="guest" class="guest-select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <h4>I am attending...</h4>
                                <div class="attending">
                                    <select id="attending" class="attending-select">
                                        <option value="All events">All events</option>
                                        <option value="Ceremony">Ceremony</option>
                                        <option value="Party">Party</option>
                                    </select>
                                </div>
                                <input type="submit" value="I am attending" class="submit-btn">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
        
