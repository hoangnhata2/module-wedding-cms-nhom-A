<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div class="type-26">
        <div class="container">
            <h2 class="title">Search Results for: <span class="key">test</span></h2>
            <div class="row">
                <div class="col-md-9">
                    <div class="post-article">
                        <h2 class="post-title"><a href="#">Standard Post Format</a></h2>
                        <div class="post-date">
                            <i class="fas fa-pencil-alt"></i>
                            <h5>August 9, 2013</h5>
                        </div>
                        <div class="clear"></div>
                        <div class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, consequatur ipsum! Dolores omnis consequuntur, corrupti, officiis iusto quasi nobis necessitatibus vero beatae assumenda, et maiores rerum debitis atque! Aliquid,
                            architecto.
                        </div>
                        <div class="post-meta">
                            <div class="author">
                                <i class="fas fa-pen-nib"></i><a href="#">Gary Jones</a>
                            </div>
                            <div class="comment">
                                <i class="fas fa-comment-dots"></i><span class="count">0</span> <a href="#">Comments</a>
                            </div>
                            <div class="category">
                                <i class="fas fa-folder"></i><a href="#">Advertisement</a>, <a href="#">Hobbies</a>
                            </div>
                            <div class="tag">
                                <i class="fas fa-tags"></i><a href="#">Obama</a>
                            </div>
                            <div class="love">
                                <div>
                                    <i class="fas fa-heart"></i>
                                    <span>7</span>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="post-article">
                        <h2 class="post-title"><a href="#">Standard Post Format</a></h2>
                        <div class="post-date">
                            <i class="fas fa-pencil-alt"></i>
                            <h5>August 9, 2013</h5>
                        </div>
                        <div class="clear"></div>
                        <div class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, consequatur ipsum! Dolores omnis consequuntur, corrupti, officiis iusto quasi nobis necessitatibus vero beatae assumenda, et maiores rerum debitis atque! Aliquid,
                            architecto.
                        </div>
                        <div class="post-meta">
                            <div class="author">
                                <i class="fas fa-pen-nib"></i><a href="#">Gary Jones</a>
                            </div>
                            <div class="comment">
                                <i class="fas fa-comment-dots"></i><span class="count">0</span> <a href="#">Comments</a>
                            </div>
                            <div class="category">
                                <i class="fas fa-folder"></i><a href="#">Advertisement</a>, <a href="#">Hobbies</a>
                            </div>
                            <div class="tag">
                                <i class="fas fa-tags"></i><a href="#">Obama</a>
                            </div>
                            <div class="love">
                                <div>
                                    <i class="fas fa-heart"></i>
                                    <span>7</span>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item ">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>