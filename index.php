<?php
$data = require_once('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='assets/css/main.css'>
</head>
<body>
<div class="main-block">
    <div class="container-fluid main-header-block">
        <header class="container secondly-header-block">
            <div class="header-block-logo-nav row justify-content-between">
                <div class="header-block-logo">
                    <img src="<?php echo $data['siteLogo']?>" alt="Alecto">
                </div>
                <div class="header-block-nav row">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav header-block-nav-list">
                                <li class="nav-item  active header-block-nav-item">
                                    <a class="nav-link header-block-nav-link" href="<?php echo $data['mainMenu']['1']['url']?>"><?php echo $data['mainMenu']['1']['title']?> <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active header-block-nav-item">
                                    <a class="nav-link header-block-nav-link" href="<?php echo $data['mainMenu']['2']['url']?>"><?php echo $data['mainMenu']['2']['title']?><span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active header-block-nav-item">
                                    <a class="nav-link header-block-nav-link" href="<?php echo $data['mainMenu']['3']['url']?>"><?php echo $data['mainMenu']['3']['title']?><span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active header-block-nav-item">
                                    <a class="nav-link header-block-nav-link" href="<?php echo $data['mainMenu']['4']['url']?>"><?php echo $data['mainMenu']['4']['title']?><span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active header-block-nav-item">
                                    <a class="nav-link header-block-nav-link" href="<?php echo $data['mainMenu']['5']['url']?>"><?php echo $data['mainMenu']['5']['title']?><span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <button type="button" class="logo-nav-button">

                    </button>
                </div>
            </div>
            <div class="header-slider-block justify-content-between">
                <button type="button" class="left-arrow">
                </button>
                <div class="header-slider-motto-block">
                    <h1 class="header-slider-motto-block-title"><span class="highlighting"><?php echo $data['mainSlider']['1']['title']['main']?></span><?php echo $data['mainSlider']['1']['title']['second']?></h1>
                    <p class="header-slider-motto-block-paragraph"><?php echo $data['mainSlider']['1']['description']?></p>
                    <div class="header-slider-motto-block-button"><button type="button" class="secondly-button">
                            <?php echo $data['mainSlider']['1']['link']['text']?>
                    </button></div>
                    <div class="block-points">
                        <div class="block-painted-point">
                        </div>
                        <div class="block-point">
                        </div>
                        <div class="block-point">
                        </div>
                        <div class="block-point">
                        </div>
                        <div class="block-point">
                        </div>
                    </div>
                </div>
                <button type="button" class="right-arrow">
                </button>
            </div>
            <div class="bottom-arrow-block">
                <button type="button" class="bottom-arrow">
                </button>
            </div>
        </header>
    </div>
    <div class="about-block">
        <div class="container">
            <header class="main-header">
                <h2 class="main-title"><?php echo $data['mainAboutUs']['1']['title']?></h2>
                <p class="main-paragraph"><?php echo $data['mainAboutUs']['1']['description']?></p>
            </header>
            <ul class="row">
                <li class="col-lg-3 col-md-6">
                    <div class="about-list-item">
                        <a href="#"><div class="img-holder">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="53" height="53" viewBox="0 0 53 53">
                                <g>
                                    <g>
                                        <path class="svg-item"
                                              d="M47.88 27.323c-2.494 3.83-5.984 7.008-9.885 9.576-.377 6.21-3.523 11.99-8.64 15.64a2.493 2.493 0 0 1-2.395.274 2.49 2.49 0 0 1-1.503-1.886c-.378-2.235-1.381-4.712-2.86-7.215-1.656.453-3.264.82-4.77 1.08a2.484 2.484 0 0 1-2.185-.692l-6.75-6.748a2.488 2.488 0 0 1-.692-2.185A52.355 52.355 0 0 1 9.28 30.4c-2.5-1.477-4.976-2.481-7.212-2.858a2.488 2.488 0 0 1-1.61-3.899c3.649-5.117 9.43-8.263 15.638-8.642 2.567-3.901 5.746-7.392 9.575-9.885C32.934.387 41.565-.004 50.51-.004A2.487 2.487 0 0 1 53 2.483c0 8.59-.395 17.583-5.12 24.84zM28.89 47.542a16.596 16.596 0 0 0 4.552-8.012 55.788 55.788 0 0 1-6.786 2.91c.949 1.718 1.71 3.431 2.234 5.102zM5.455 24.108c1.668.523 3.381 1.285 5.098 2.232a55.923 55.923 0 0 1 2.91-6.784c-3.03.728-5.815 2.299-8.008 4.552zm22.93-14.823c-7.92 5.158-13.167 16.28-15.044 25.48l4.89 4.888c9.2-1.876 20.32-7.123 25.479-15.045 3.575-5.491 4.207-12.366 4.3-19.622-7.257.093-14.132.724-19.624 4.3zm7.197 12.276a4.147 4.147 0 1 1 0-8.293 4.147 4.147 0 0 1 0 8.293zM3.413 44.41a4.147 4.147 0 1 1 5.174 5.175l-5.94 1.8a.829.829 0 0 1-1.035-1.036z"/>
                                    </g>
                                </g>
                            </svg>
                        </div></a>
                        <h3 class="about-list-title">
                            <?php echo $data['mainAboutUs']['title']?>
                        </h3>
                        <p class="about-list-paragraph">
                            <?php echo $data['mainAboutUs']['description']?>
                        </p>
                    </div>
                </li>

                <li class="col-lg-3 col-md-6">
                    <div class="about-list-item">
                        <a href="#"><div class="img-holder">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="53" height="53" viewBox="0 0 53 53">
                                <g>
                                    <g>
                                        <path class="svg-item"
                                              d="M46.189 39.503c-1.367 2.348-4.18 3.551-8.063 3.551-1.536 0-3.25-.2-5.097-.58C30.903 49.202 27.5 53.01 23.5 53.01c-3.996 0-7.4-3.809-9.527-10.532-1.897.396-3.639.584-5.193.584-3.846 0-6.588-1.186-7.967-3.557-1.926-3.319-.39-7.986 4.195-13.006-4.583-5.02-6.12-9.686-4.196-13.004 1.906-3.277 6.642-4.31 13.158-2.969C16.098 3.8 19.502-.01 23.5-.01c3.998 0 7.403 3.81 9.53 10.537 2.056-.43 3.923-.624 5.577-.59 3.643.077 6.25 1.27 7.58 3.558 1.926 3.317.39 7.985-4.195 13.005 4.584 5.018 6.121 9.685 4.197 13.004zm-28.001-.598c1.649 6.653 4.134 9.133 5.312 9.133 1.036 0 3.08-1.916 4.68-6.896a55.357 55.357 0 0 1-5.762-2.33 62.717 62.717 0 0 1-4.676-2.434l-.07-.041c.16.868.312 1.744.516 2.568zM5.185 37.034c.472.813 2.928 1.554 7.616.61-.38-1.967-.693-3.991-.86-6.12a64.156 64.156 0 0 1-.187-4.606c-.52.453-1.025.907-1.497 1.36-4.749 4.565-5.63 7.791-5.072 8.756zm9.873-21.14c-6.173-1.715-9.33-.867-9.876.072-.485.837.128 3.398 3.434 7.062 1.34-1.152 2.8-2.29 4.379-3.394a64.335 64.335 0 0 1 4.606-2.93 40.87 40.87 0 0 0-2.543-.81zm13.755-1.8c-1.649-6.655-4.134-9.135-5.313-9.135-1.036 0-3.08 1.918-4.68 6.898a55.21 55.21 0 0 1 5.762 2.329 64.072 64.072 0 0 1 4.677 2.432l.07.043c-.16-.868-.313-1.745-.516-2.568zm1.27 8.923a59.889 59.889 0 0 0-3.358-2.103A60.268 60.268 0 0 0 23.5 19.21a60.172 60.172 0 0 0-3.224 1.705 59.527 59.527 0 0 0-3.359 2.104c-.067 1.15-.134 2.305-.134 3.48 0 1.178.067 2.333.134 3.483a59.472 59.472 0 0 0 3.359 2.101A57.19 57.19 0 0 0 23.5 33.79a57.44 57.44 0 0 0 3.225-1.706 60.22 60.22 0 0 0 3.358-2.102c.068-1.151.135-2.305.135-3.482 0-1.176-.067-2.33-.135-3.482zm-.681 13.277c.862.303 1.712.581 2.54.81 6.17 1.713 9.33.863 9.877-.07.485-.84-.13-3.4-3.433-7.064a56.838 56.838 0 0 1-4.38 3.395 64.547 64.547 0 0 1-4.604 2.93zm12.413-20.33c-.475-.813-2.929-1.555-7.616-.611.38 1.967.694 3.993.861 6.121.118 1.501.177 3.05.187 4.606a40.24 40.24 0 0 0 1.497-1.361c4.749-4.563 5.63-7.79 5.071-8.755zM23.5 29.814c-1.854 0-3.359-1.486-3.359-3.315 0-1.83 1.505-3.315 3.36-3.315 1.853 0 3.358 1.484 3.358 3.315 0 1.829-1.505 3.315-3.359 3.315z"/>
                                    </g>
                                </g>
                            </svg>
                        </div></a>
                        <h3 class="about-list-title">
                            <?php echo $data['mainAboutUs']['title']?>
                        </h3>
                        <p class="about-list-paragraph">
                            <?php echo $data['mainAboutUs']['description']?>
                        </p>
                    </div>
                </li>

                <li class="col-lg-3 col-md-6">
                    <div class="about-list-item">
                        <a href="#"><div class="img-holder">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="72" height="53" viewBox="0 0 72 53">
                                <g>
                                    <g>
                                        <path class="svg-item"
                                              d="M71.727 20.969l-8.47-19.08A3.178 3.178 0 0 0 60.353 0a3.18 3.18 0 0 0-3.098 2.473L48.888 39.33 37.88 12.57a3.174 3.174 0 1 0-5.859-.04L22.015 35.903 16.61 25.08a3.177 3.177 0 0 0-5.284-.615L.737 37.184a3.179 3.179 0 0 0 2.44 5.216c.98 0 1.859-.446 2.44-1.145l7.478-8.984 6.297 12.609a3.176 3.176 0 0 0 5.764-.17l9.726-22.72 11.945 29.038a3.178 3.178 0 0 0 6.036-.501l8.47-37.31 4.587 10.332a3.178 3.178 0 0 0 2.904 1.89 3.18 3.18 0 0 0 2.903-4.47z"/>
                                    </g>
                                </g>
                            </svg>
                        </div></a>
                        <h3 class="about-list-title">
                            <?php echo $data['mainAboutUs']['title']?>
                        </h3>
                        <p class="about-list-paragraph">
                            <?php echo $data['mainAboutUs']['description']?>
                        </p>
                    </div>
                </li>

                <li class="col-lg-3 col-md-6">
                   <div class="about-list-item">
                       <a href="#"><div class="img-holder">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="66" height="53" viewBox="0 0 66 53">
                                <g>
                                    <g>
                                        <path class="svg-item"
                                              d="M66 18.57a3.721 3.721 0 0 1-2.028 3.325l-10.805 5.472V39c0 7.18-9.029 13-20.167 13-11.138 0-20.166-5.82-20.166-13V27.367l-5.5-2.785V35.8a3.706 3.706 0 0 1 1.833 3.199c0 2.052-1.642 3.714-3.667 3.714S1.834 41.051 1.834 39c0-1.371.74-2.555 1.833-3.2V22.726l-1.638-.83A3.721 3.721 0 0 1 0 18.571a3.72 3.72 0 0 1 2.029-3.325L31.362.39c.494-.251 1.05-.391 1.638-.391.59 0 1.144.14 1.639.39l29.333 14.857A3.72 3.72 0 0 1 66 18.571zM47.667 30.153l-13.028 6.6a3.61 3.61 0 0 1-1.639.39 3.61 3.61 0 0 1-1.638-.39l-13.028-6.6V39c0 3.435 6.406 7.43 14.666 7.43 8.261 0 14.667-3.995 14.667-7.43zm10.57-11.581L33 5.789 7.763 18.57 33 31.353z"/>
                                    </g>
                                </g>
                            </svg>
                        </div></a>
                        <h3 class="about-list-title">
                            <?php echo $data['mainAboutUs']['title']?>
                        </h3>
                        <p class="about-list-paragraph">
                            <?php echo $data['mainAboutUs']['description']?>
                        </p>
                    </div>
                </li>
            </ul>
            <footer class="about-block-footer">
                <button class="btn btn-primary main-button">Learn more</button>
            </footer>
        </div>
    </div>
    <div class="lorem-block">
        <div class="lorem-block-top-fluid row container-fluid">
            <div class="lorem-block-top container">
                <div class="lorem-block-top-item offset-xl-6 col-xl-6 col-lg-12">
                    <h3 class="lorem-block-title">
                        <?php echo $data['loremIpsum']['title']?>
                    </h3>
                    <p class="lorem-block-paragraph">
                        <?php echo $data['loremIpsum']['description']?>
                    </p>
                    <button type="button" class="main-button">
                        <?php echo $data['mainSlider']['1']['link']['text']?>
                    </button>
                </div>
            </div>
        </div>

        <div class="lorem-block-bottom container">
            <div class="lorem-block-bottom-item col-xl-6 col-lg-12">
                <h3 class="lorem-block-title">
                    <?php echo $data['dolorSitAmet']['title']?>
                </h3>
                <p class="lorem-block-paragraph">
                    <?php echo $data['dolorSitAmet']['description']?>
                </p>
                <button type="button" class="main-button">
                    <?php echo $data['mainSlider']['1']['link']['text']?>
                </button>
            </div>
        </div>
    </div>
    <div class="opinion-main-block container-fluid">
        <div class="opinion-secondly-block container row justify-content-between align-items-center">
            <button class="left-arrow " >
            </button>
            <div class="opinion-item col-11 justify-content-center">
                <div class="opinion-item-img justify-content-center row">
                    <img src="<?php echo $data['opinion']['image']?>" alt="Adam_Czajkowski">
                </div>
                <p class="opinion-item-main-paragraph">
                    <span class="highlighting"> <?php echo $data['opinion']['title']['main']?></span><?php echo $data['opinion']['title']['second']?>
                </p>
                <p class="opinion-item-secondly-paragraph">
                    <span><?php echo $data['opinion']['description']['main']?></span><?php echo $data['opinion']['description']['second']?>
                </p>
                <div class="block-points">
                    <div class="block-painted-point">
                    </div>
                    <div class="block-point">
                    </div>
                    <div class="block-point">
                    </div>
                    <div class="block-point">
                    </div>
                    <div class="block-point">
                    </div>
                </div>
            </div>
            <button class="right-arrow">
            </button>
        </div>
    </div>
    <div class="services-block container justify-content-center">
        <header class="main-header ">
            <h2 class="main-title"><?php echo $data['services']['1']['title']?></h2>
            <p class="main-paragraph"><?php echo $data['services']['1']['description']?></p>
        </header>
        <div class="services-block-items row ">
            <div class="services-block-item col-xl-6 col-lg-12 row">
                <div class="portfolio-img">
                </div>
                <div class="services-block-item-text col-10">
                    <a href="#"><h3 class="services-block-item-text-title">
                            <?php echo $data['services']['2']['title']?>
                    </h3></a>
                    <p class="services-block-item-text-paragraph">
                        <?php echo $data['services']['2']['description']?>
                    </p>
                </div>
            </div>
            <div class="services-block-item col-xl-6 col-lg-12 row">
                <div class="portfolio-img">
                </div>
                <div class="services-block-item-text col-10">
                    <a href="#"><h3 class="services-block-item-text-title">
                            <?php echo $data['services']['3']['title']?>
                    </h3></a>
                    <p class="services-block-item-text-paragraph">
                        <?php echo $data['services']['3']['description']?>
                    </p>
                </div>
            </div>
            <div class="services-block-item col-xl-6 col-lg-12 row">
                <div class="portfolio-img">
                </div>
                <div class="services-block-item-text col-10">
                    <a href="#"><h3 class="services-block-item-text-title">
                            <?php echo $data['services']['4']['title']?>
                    </h3></a>
                    <p class="services-block-item-text-paragraph">
                        <?php echo $data['services']['4']['description']?>
                    </p>
                </div>
            </div>
            <div class="services-block-item col-xl-6 col-lg-12 row">
                <div class="portfolio-img">
                </div>
                <div class="services-block-item-text col-10">
                    <a href="#"><h3 class="services-block-item-text-title">
                            <?php echo $data['services']['5']['title']?>
                    </h3></a>
                    <p class="services-block-item-text-paragraph">
                        <?php echo $data['services']['5']['description']?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-block">
        <header class="main-header">
            <h2 class="main-title"> <?php echo $data['team']['title']?></h2>
            <p class="main-paragraph"> <?php echo $data['team']['description']?></p>
        </header>
        <div class="team-block-items row justify-content-center">
            <div class="team-block-main-item " >
                <?php echo $data['team']['name']?>
            </div>
            <div class="team-block-secondly-item ">
                <?php echo $data['team']['name']?>
            </div>
            <div class="team-block-main-item ">
                <?php echo $data['team']['name']?>
            </div>
            <div class="team-block-secondly-item ">
                <?php echo $data['team']['name']?>
            </div>
            <div class="team-block-main-item " >
                <?php echo $data['team']['name']?>
            </div>
            <div class="team-block-secondly-item ">
                <?php echo $data['team']['name']?>
            </div>
            <div class="team-block-main-item ">
                <?php echo $data['team']['name']?>
            </div>
            <div class="team-block-secondly-item ">
                <?php echo $data['team']['name']?>
            </div>
            <div class="team-block-main-item ">
                <?php echo $data['team']['name']?>
            </div>
            <div class="team-block-secondly-item ">
                <?php echo $data['team']['name']?>
            </div>
        </div>
    </div>
    <div class="pricing-block container">
        <header class="main-header">
            <h2 class="main-title"> <?php echo $data['pricing']['1']['title']?></h2>
            <p class="main-paragraph"><?php echo $data['pricing']['1']['description']?></p>
        </header>
        <div class="pricing-block-items row">
            <div class="pricing-block-main-item col-xl-3 col-lg-6 col-md-12">
                <div class="pricing-block-secondly-item justify-content-start">
                    <p class="pricing-block-price">
                        <?php echo $data['pricing']['2']['price']['main']?><span class="highlighting"><?php echo $data['pricing']['2']['price']['second']?></span>
                    </p>
                    <p class="pricing-block-comment">
                        <?php echo $data['pricing']['2']['title']?>
                    </p>
                    <p class="pricing-block-paragraph">
                        <?php echo $data['pricing']['2']['description']?>
                    </p>
                    <button type="button" class="pricing-block-button">
                        <span class="pricing-block-button-text"><?php echo $data['pricing']['button']?></span>
                        <div class="pricing-block-button-img">
                        </div>
                    </button>
                </div>
            </div>
            <div class="pricing-block-main-item col-xl-3 col-lg-6 col-md-12">
                <div class="pricing-block-secondly-item justify-content-start">
                    <p class="pricing-block-price">
                        <?php echo $data['pricing']['3']['price']['main']?><span class="highlighting"><?php echo $data['pricing']['3']['price']['second']?></span>
                    </p>
                    <p class="pricing-block-comment">
                        <?php echo $data['pricing']['3']['title']?>
                    </p>
                    <p class="pricing-block-paragraph">
                        <?php echo $data['pricing']['3']['description']?>
                    </p>
                    <button type="button" class="pricing-block-button">
                        <span class="pricing-block-button-text"><?php echo $data['pricing']['button']?></span>
                        <div class="pricing-block-button-img">
                        </div>
                    </button>
                </div>
            </div>
            <div class="pricing-block-main-item col-xl-3 col-lg-6 col-md-12">
                <div class="pricing-block-secondly-item justify-content-start">
                    <p class="pricing-block-price">
                        <?php echo $data['pricing']['4']['price']['main']?><span class="highlighting"><?php echo $data['pricing']['4']['price']['second']?></span>
                    </p>
                    <p class="pricing-block-comment">
                        <?php echo $data['pricing']['4']['title']?>
                    </p>
                    <p class="pricing-block-paragraph">
                        <?php echo $data['pricing']['4']['description']?>
                    </p>
                    <button type="button" class="pricing-block-button">
                        <span class="pricing-block-button-text"><?php echo $data['pricing']['button']?></span>
                        <div class="pricing-block-button-img">
                        </div>
                    </button>
                </div>
            </div>
            <div class="pricing-block-main-item col-xl-3 col-lg-6 col-md-12">
                <div class="pricing-block-secondly-item justify-content-start">
                    <p class="pricing-block-price">
                        <?php echo $data['pricing']['5']['price']['main']?><span class="highlighting"><?php echo $data['pricing']['5']['price']['second']?></span>
                    </p>
                    <p class="pricing-block-comment">
                        <?php echo $data['pricing']['5']['title']?>
                    </p>
                    <p class="pricing-block-paragraph">
                        <?php echo $data['pricing']['5']['description']?>
                    </p>
                    <button type="button" class="pricing-block-button">
                        <span class="pricing-block-button-text"><?php echo $data['pricing']['button']?></span>
                        <div class="pricing-block-button-img">
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="map-block container row">
        <div class="lorem-block-bottom-item">
            <h3 class="lorem-block-title">
                <?php echo $data['dolorSitAmet']['title']?>
            </h3>
            <p class="lorem-block-paragraph">
                <?php echo $data['dolorSitAmet']['description']?>
            </p>
            <button type="button" class="main-button">
                Learn more
            </button>
        </div>
        <div class="map col-xl-6 col-lg-12">
        </div>
    </div>
    <div class="footer-main-block container-fluid" >
        <footer class="footer-secondly-block ">
            <div class="footer-top container-fluid">
                <h4 class="footer-top-title">
                    <?php echo $data['footer']['title']['main']?> <span class="highlighting"><?php echo $data['footer']['title']['second']?></span><?php echo $data['footer']['title']['third']?>
                </h4>
                <button type="button" class="main-button">
                    <?php echo $data['footer']['button']?>
                </button>
            </div>
            <div class="footer-main-bottom">
                <div class="footer-secondly-bottom justify-content-around row">
                    <div class="footer-bottom-logo-block row ">
                        <img src="<?php echo $data['footer']['footerBot']['image']?>" alt="Alecto" class="footer-bottom-logo">
                        <p class="footer-secondly-bottom-paragraph">
                            <?php echo $data['footer']['footerBot']['title']?>
                        </p>
                    </div>
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav1">
                            <ul class="navbar-nav header-block-nav-list">
                                <li class="nav-item  active header-block-nav-item">
                                    <a class="nav-link header-block-nav-link" href="<?php echo $data['mainMenu']['1']['url']?>"><?php echo $data['mainMenu']['1']['title']?> <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active header-block-nav-item">
                                    <a class="nav-link header-block-nav-link" href="<?php echo $data['mainMenu']['2']['url']?>"><?php echo $data['mainMenu']['2']['title']?><span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active header-block-nav-item">
                                    <a class="nav-link header-block-nav-link" href="<?php echo $data['mainMenu']['3']['url']?>"><?php echo $data['mainMenu']['3']['title']?><span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active header-block-nav-item">
                                    <a class="nav-link header-block-nav-link" href="<?php echo $data['mainMenu']['4']['url']?>"><?php echo $data['mainMenu']['4']['title']?><span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active header-block-nav-item">
                                    <a class="nav-link header-block-nav-link" href="<?php echo $data['mainMenu']['5']['url']?>"><?php echo $data['mainMenu']['5']['title']?><span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>