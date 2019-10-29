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
            <div class="row">
                <div class="title">Simple Gallery</div>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">All</a></li>
                    <li><a data-toggle="tab" href="#menu1">Gallery</a></li>
                    <li><a data-toggle="tab" href="#menu2">Image - Video</a></li>
                    <li><a data-toggle="tab" href="#menu3">Image - Lightbox</a></li>
                    <li><a data-toggle="tab" href="#menu3">Image - Link</a></li>

                </ul>


                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="row table-1">
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-1.png" alt="1"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-2.png" alt="2"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-3.png" alt="3"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row table-1">
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-4.png" alt="4"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-5.png" alt="5"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-6.png" alt="6"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row table-1">
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-7.png" alt="7"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-8.png" alt="8"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-9.png" alt="9"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row table-1">
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-10.png" alt="10"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-11.png" alt="11"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-12.png" alt="12"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="row table-1">
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-4.png" alt="4"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-6.png" alt="6"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-7.png" alt="7"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row table-1">
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-1.png" alt="1"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-8.png" alt="8"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-9.png" alt="9"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="row table-1">
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-3.png" alt="3"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-5.png" alt="5"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-10.png" alt="10"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row table-1">
                            <div class="col-md-4">
                                <div class="gird-1">
                                    <a href="#"><img src="./images/18-12.png" alt="12"></a>
                                    <div class="middle">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>