@extends('layouts.ieee')
        @section('title', 'My App')
@section('content')
<section>
<!-- <<<<<Slider>>>>>   -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/images/headerback_full.png" alt="...">
            <div class="carousel-caption">
                <h1>this is first title</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aliquid culpa sunt vitae saepe rerum recusandae similique enim doloremque ipsam ea, ipsum repellendus voluptatem temporibus quis, obcaecati necessitatibus aperiam possimus?</p>
            </div>
        </div>
        <div class="item">
            <img src="/images/headerback_full.png" alt="...">
            <div class="carousel-caption">
                <h1>this is second title</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aliquid culpa sunt vitae saepe rerum recusandae similique enim doloremque ipsam ea, ipsum repellendus voluptatem temporibus quis, obcaecati necessitatibus aperiam possimus?</p>
            </div>
        </div>
        <div class="item">
            <img src="/images/headerback_full.png" alt="...">
            <div class="carousel-caption">
                <h1>this is thied title</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aliquid culpa sunt vitae saepe rerum recusandae similique enim doloremque ipsam ea, ipsum repellendus voluptatem temporibus quis, obcaecati necessitatibus aperiam possimus?</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- <<<<<Slider>>>>>   -->
</section>
<!-- ================END Navbar And Slider================= -->

<div class="page-title-one">
    <div class="container text-center">
        <div class="col-md-10 col-sm-12 col-xs-12 page-title-place">
            <h2 class="page-title-one-text "><span>“</span>Our greatest weakness lied in giving up.
                The most certain way to succeed is always to try just one more time. <span>”</span><br><span>Thomas A. Edison</span></h2>
        </div>
    </div>
</div>
<!-- ======================Main Cards======================= -->
<section class="main-cards clearfix">
    <div class="container-fulied">
        <a href="">
            <div class="col-md-4 col-sm-4 col-xs-12 card text-center">
                <span class="glyphicon glyphicon-education card-glyph" aria-hidden="true"></span>
                <h4>Workshops</h4>
                <p>Join Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ratione tempora repudiandae saepe explicabo soluta quaerat ipsam enim illo animi, doloribus alias, nam dolore error molestias, adipisci beatae eum officiis!</p>
            </div>
        </a>
        <a href="">
            <div class="col-md-4 col-sm-4 col-xs-12 card text-center">
                <span class="glyphicon glyphicon-paperclip card-glyph" aria-hidden="true"></span>
                <h4>Access Articles</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere fuga, asperiores tempore, voluptatibus, officiis accusantium dolor voluptas deserunt sapiente quam error praesentium! Laudantium voluptas repellat impedit tempora ex distinctio quasi.</p>
            </div>
        </a>
        <a href="">
            <div class="col-md-4 col-sm-4 col-xs-12 card text-center">
                <span class="glyphicon glyphicon-film card-glyph" aria-hidden="true"></span>
                <h4>Mutimedia</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere fuga, asperiores tempore, voluptatibus, officiis accusantium dolor voluptas deserunt sapiente quam error praesentium! Laudantium voluptas repellat impedit tempora ex distinctio quasi.</p>
            </div>
        </a>
    </div>
</section>

<!-- =================== News & Articles ==================== -->
<div class="container-fluid">
    <!-- strat news column -->
    <div class="col-md-6 news-column">
        <div class="container-fulied">
            <div class="col-md-12">
                <div class="news-top-nav text-center">
                    <a href="">IACT NEWS</a>
                </div>
                <!-- strat news -->
                <div class="row news-row">
                    <div class="col-xs-6 col-sm-4 col-md-4 news-thumb">
                        <div class="thumbnail">
                            <img src="/images/no_image_available.png" alt="...">
                            <div class="caption">
                                <h5>Thumbnail label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima est, praesentium ipsum voluptatum vitae placeat suscipit, similique odio officiis porro</p>
                            </div>
                            <a href="#" class="btn btn-primary news-button btn-block btn-sm" role="button">Read more</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 news-thumb">
                        <div class="thumbnail">
                            <img src="/images/no_image_available.png" alt="...">
                            <div class="caption">
                                <h5>Thumbnail label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima est, praesentium ipsum voluptatum vitae placeat suscipit, similique odio officiis porro</p>
                            </div>
                            <a href="#" class="btn btn-primary news-button btn-block btn-sm" role="button">Read more</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 news-thumb">
                        <div class="thumbnail">
                            <img src="/images/no_image_available.png" alt="...">
                            <div class="caption">
                                <h5>Thumbnail label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima est, praesentium ipsum voluptatum vitae placeat suscipit, similique odio officiis porro</p>
                            </div>
                            <a href="#" class="btn btn-primary news-button btn-block btn-sm" role="button">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start article column -->
    <div class="col-md-6 articles-column">
        <div class="container-fulied">
            <div class="col-md-12">
                <div class="articles-top-nav text-center">
                    <a href="">TOP ARTICLES</a>
                </div>
                <!-- strat panel -->
                <div class="panel panel-default article-panel">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <!-- start article -->
                        <div class="media article">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/images/thumb.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body article-body">
                                <h5 class="media-heading">Media heading</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur consectetur, sed vitae autem sit minima, modi fugit? Architecto, modi rem laboriosam fuga ipsa nemo cupiditate magni. Illum nulla est nisi. <a href="">more...</a></p>
                            </div>
                        </div>
                        <!-- article 2 -->
                        <div class="media article">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/images/thumb.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body article-body">
                                <h5 class="media-heading">Media heading</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur consectetur, sed vitae autem sit minima, modi fugit? Architecto, modi rem laboriosam fuga ipsa nemo cupiditate magni. Illum nulla est nisi. <a href="">more...</a></p>
                            </div>
                        </div>
                        <!-- article 3 -->
                        <div class="media article">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/images/thumb.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body article-body">
                                <h5 class="media-heading">Media heading</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur consectetur, sed vitae autem sit minima, modi fugit? Architecto, modi rem laboriosam fuga ipsa nemo cupiditate magni. Illum nulla est nisi. <a href="">more...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===================== Subscription ===================== -->
<section>
    <div class="Subscription">
        <div class="container">
            <div class="subscribe-body clearfix">
                <div class="envelope-circle">
                    <span class="glyphicon glyphicon-envelope"></span>
                </div>
            </div>
            <!-- subscribe text -->
            <div class="col-md-8 subscribe-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore reprehenderit unde, rem at vitae fugiat repellat aliquam repellendus temporibus animi, voluptatem reiciendis odio architecto error quos nostrum et iure aliquid?</p>
            </div>
            <!-- subscribe form -->
            <div class="container subscribe-form">
                <form action="" class="text-center form-horizontal">
                    <div class="form-group form-subscribe form-group-lg subscribe-form-body">
                        <div class="col-md-7 form-inline subscribe-form-column">
                            <label for="email-subscribe" >Stay up to date!</label>
                            <input type="email" name="email" id="email-subscribe" class="form-control lg" placeholder="input your email here">
                            <button type="submit" class="btn btn-primary btn-lg" >subscribe</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@stop