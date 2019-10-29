<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>

<div class="type-22">
        <div class="container">
            <div class="row">
                <div class="content">
                    <p>Aristotle made several efforts to explain how moral conduct contributes to the good life for
                        human agents, including the Eqikh EudaimonhV and the Magna Moralia, but the most complete
                        surviving statement of his views on morality occurs in the Eqikh Nikomacoi .</p>
                    <h3>Successful people ask better questions.</h3>
                    <p>But on Aristotle’s view, the lives of individual human beings are invariably linked together in a
                        social context. In the Peri PoliV he speculated about the origins of the state, described and
                        assessed the relative merits of various types of government, and listed the obligations of the
                        individual citizen.</p>
                    <h4>Luctus fermentum commodo</h4>
                    <p>Working from home meant we could vary snack and coffee breaks, change our desks or view, goof
                        off, drink on the job, even spend the day in pajamas, and often meet to gossip or share ideas.
                        On the other hand, we bossed ourselves around, set impossible goals, and demanded longer hours
                        than office jobs usually entail. It was the ultimate “flextime,” in that it depended on how
                        flexible we felt each day, given deadlines, distractions, and workaholic crescendos.</p>
                    <blockquote>
                        <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit.</p>
                    </blockquote>
                    <p>Integer vel libero arcu, egestas tempor ipsum. Vestibulum id dolor aliquet dolor fringilla
                        ornare. Nunc non massa erat. Vivamus odio sem, rhoncus vel bibendum vitae, euismod a urna.
                        Aliquam erat volutpat. Aenean non lorem arcu. Phasellus in neque nulla, sed sodales ipsum. Morbi
                        a massa sed sapien vulputate lacinia. Vivamus et urna vitae felis malesuada aliquet sit amet et
                        metus.</p>
                    <ul>
                        <li>Consectetur adipiscing elit vtae elit libero</li>
                        <li>Nullam id dolor id eget lacinia odio posuere erat a ante</li>
                        <li>Integer posuere erat dapibus posuere velit</li>
                    </ul>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don’t look even slightly
                        believable.</p>
                        <div class="text-box">
                            
                            <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                aliquet.<br>
                                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                                sem nibh id elit.<br>
                                Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
                                velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
                                consequat auctor eu in elit.</p>
                        </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything
                        embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend
                        to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla
                        adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur. Aliquam erat
                        volutpat. Nunc eu nibh nulla, id cursus arcu.</p>
                    <p><em>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;<br>
                            Nam at velit nisl. Aenean vitae est nisl. Cras molestie molestie nisl vel imperdiet. Donec
                            vel mi sem.</em></p>
                </div>
            </div>
        </div>
    </div>