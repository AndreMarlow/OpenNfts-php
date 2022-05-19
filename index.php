<?php
include_once "./subscribe.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="media.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="collect.css">
    <link rel="stylesheet" href="top-sell.css">
    <link rel="stylesheet" href="subscribe.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <section class="header">
        <section class="navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand fonts-nav" href="#">
                        <img src="img/svg-logo/eth-logo-nav.png" alt=""> Ocean<span class="style-logo-nft">NFT</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="28" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse header-nav" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link fonts-nav" href="#">Markets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fonts-nav" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fonts-nav" href="#">Community</a>
                            </li>
                        </ul>

                    </div>
                    <div class="media1">
                        <ul class="navbar-nav">
                            <li>
                                <a class="nav-link " href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg></a>
                            </li>
                            <li>
                                <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

        <section class="main-information">
            <div class="discover mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 left-cont">
                            <h1 class="discover">Discover, collect, and
                                <br> sell <span id="textes">Timeless</span>
                                NFTs
                            </h1>

                            <p class="mt-3 discover-info">The world’s first and largest digital marketplace for crypto
                                collectibles
                                and non- fungible tokens (NFTs). </p>

                            <div class="mt-4 d-flex btt">
                                <button class="btn-itd btn-color fonts-nav">
                                    Explore
                                    <svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </button>
                                <p id="textes" class="fonts-nav">Creat NFT`s</p>
                            </div>

                            <div class="cards-info mt-5">
                                <div id="textes2">
                                    <p class="fonts-table">35m+
                                    <p class="fonts-table-2">Artwork</p>
                                    </p>
                                </div>
                                <div class="line"></div>
                                <div id="textes2">
                                    <p class="fonts-table">18m+
                                    <p class="fonts-table-2">Auctions</p>
                                    </p>
                                </div>
                                <div class="line"></div>
                                <div id="textes2">
                                    <p class="fonts-table">500k+
                                    <p class="fonts-table-2">Artist</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center">
                            <img class="img-fluid bg-right-col" src="img/group1877.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="partners-information">
            <div class="parnters mt-5">
                <div class="container">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 parnters-info">
                        <div class="col">
                            <img class="img-fluid" src="img/svg-logo/binance-logo.svg" alt="binance-logo">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="img/svg-logo/ethlogo.svg" alt="ethlogo">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="img/svg-logo/blochainlogo.svg" alt="blochainlogo">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="img/svg-logo/bitmex.svg" alt="bitmex">
                        </div>
                    </div>
                </div>
        </section>
    </section> -->

    <section class="main">
        <section class="top-nft">
            <div class="mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 start-nav">
                            <h6 class="fonts-top-nft">Top NFT`s now</h6>
                            <a class="nav-link fonts-top-nft" href="#">View all
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="34" height="44" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="jurnalistes">
            <div class="container">
                <div class="row med-info">
                    <div style="width: 27rem">
                        <div class="card-img-top">
                            <img src="img/cardl.jpg" class="card-img-top" alt="cardl" />
                            <div class="card-body mt-3">
                                <div class="card-body-l col-6">
                                    <h5 class="fonts-apollo">Apollo Ent #1289 NFT</h5>
                                    <p class="card-text">
                                        <img class="jurna" src="img/svg-logo/jurn1.svg" alt="jurn1" />@jhonartist
                                        <img src="img/svg-logo/V.svg" style="margin-left: 7px" alt="" />
                                    </p>
                                    <p class="fonts-reserve">Reserve price</p>
                                    <div class="d-flex">
                                        <img src="img/svg-logo/etn9.svg" class="img-fluid me-2" width="80" height="25" alt="" />
                                        <img src="img/svg-logo/cash.svg" class="img-fluid" width="62" height="50" alt="" />
                                    </div>
                                </div>

                                <div class="card-body-r col-6">
                                    <p class="fonts-reserve">Auction Ends In</p>

                                    <div class="d-flex justify-content-center">
                                        <div class="card-text-cont timer">
                                            <div class="time" eapps-link="inner">
                                                <div eapps-link="hourse-0" data-numder="18">
                                                    <div class="timer-item-value">
                                                        <div class="item-value-base fonts-apollo">18</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-group-lable fonts-reserve" title="Hours">
                                                Hours
                                            </div>
                                        </div>
                                        <div class="card-text-cont timer">
                                            <div class="time" eapps-link="inner">
                                                <div eapps-link="hourse-0" data-numder="25">
                                                    <div class="timer-item-value">
                                                        <div class="item-value-base fonts-apollo">25</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-group-lable fonts-reserve" title="Hours">
                                                Mins
                                            </div>
                                        </div>
                                        <div class="card-text-cont timer">
                                            <div class="time" eapps-link="inner">
                                                <div eapps-link="hourse-0" data-numder="44">
                                                    <div class="timer-item-value">
                                                        <div class="item-value-base fonts-apollo">44</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-group-lable fonts-reserve" title="Hours">
                                                Secs
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-media">
                                        <button href="#" class="btn btn-place btn-color fonts-apollo">
                                            Place Bid
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media1" style="width: 27rem">
                        <div class="card-img-top">
                            <img src="img/cardl.jpg" class="card-img-top" alt="cardl" />
                            <div class="card-body mt-3">
                                <div class="card-body-l col-6">
                                    <h5 class="fonts-apollo">Apollo Ent #1289 NFT</h5>
                                    <p class="card-text">
                                        <img class="jurna" src="img/svg-logo/jurn1.svg" alt="jurn1" />@jhonartist
                                        <img src="img/svg-logo/V.svg" style="margin-left: 7px" alt="" />
                                    </p>
                                    <p class="fonts-reserve">Reserve price</p>
                                    <div class="d-flex">
                                        <img src="img/svg-logo/etn9.svg" class="img-fluid me-2" width="80" height="25" alt="" />
                                        <img src="img/svg-logo/cash.svg" class="img-fluid" width="62" height="50" alt="" />
                                    </div>
                                </div>

                                <div class="card-body-r col-6">
                                    <p class="fonts-reserve">Auction Ends In</p>

                                    <div class="d-flex justify-content-center">
                                        <div class="card-text-cont timer">
                                            <div class="time" eapps-link="inner">
                                                <div eapps-link="hourse-0" data-numder="18">
                                                    <div class="timer-item-value">
                                                        <div class="item-value-base fonts-apollo">18</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-group-lable fonts-reserve" title="Hours">
                                                Hours
                                            </div>
                                        </div>
                                        <div class="card-text-cont timer">
                                            <div class="time" eapps-link="inner">
                                                <div eapps-link="hourse-0" data-numder="25">
                                                    <div class="timer-item-value">
                                                        <div class="item-value-base fonts-apollo">25</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-group-lable fonts-reserve" title="Hours">
                                                Mins
                                            </div>
                                        </div>
                                        <div class="card-text-cont timer">
                                            <div class="time" eapps-link="inner">
                                                <div eapps-link="hourse-0" data-numder="44">
                                                    <div class="timer-item-value">
                                                        <div class="item-value-base fonts-apollo">44</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-group-lable fonts-reserve" title="Hours">
                                                Secs
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-media">
                                        <button href="#" class="btn btn-place btn-color fonts-apollo">
                                            Place Bid
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="med-2" style="width: 27rem">
                        <div class="card-img-top">
                            <img src="img/cardl.jpg" class="card-img-top" alt="cardl" />
                            <div class="card-body mt-3">
                                <div class="card-body-l col-6">
                                    <h5 class="fonts-apollo">Apollo Ent #1289 NFT</h5>
                                    <p class="card-text">
                                        <img class="jurna" src="img/svg-logo/jurn1.svg" alt="jurn1" />@jhonartist
                                        <img src="img/svg-logo/V.svg" style="margin-left: 7px" alt="" />
                                    </p>
                                    <p class="fonts-reserve">Reserve price</p>
                                    <div class="d-flex">
                                        <img src="img/svg-logo/etn9.svg" class="img-fluid me-2" width="80" height="25" alt="" />
                                        <img src="img/svg-logo/cash.svg" class="img-fluid" width="62" height="50" alt="" />
                                    </div>
                                </div>

                                <div class="card-body-r col-6">
                                    <p class="fonts-reserve">Auction Ends In</p>

                                    <div class="d-flex justify-content-center">
                                        <div class="card-text-cont timer">
                                            <div class="time" eapps-link="inner">
                                                <div eapps-link="hourse-0" data-numder="18">
                                                    <div class="timer-item-value">
                                                        <div class="item-value-base fonts-apollo">18</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-group-lable fonts-reserve" title="Hours">
                                                Hours
                                            </div>
                                        </div>
                                        <div class="card-text-cont timer">
                                            <div class="time" eapps-link="inner">
                                                <div eapps-link="hourse-0" data-numder="25">
                                                    <div class="timer-item-value">
                                                        <div class="item-value-base fonts-apollo">25</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-group-lable fonts-reserve" title="Hours">
                                                Mins
                                            </div>
                                        </div>
                                        <div class="card-text-cont timer">
                                            <div class="time" eapps-link="inner">
                                                <div eapps-link="hourse-0" data-numder="44">
                                                    <div class="timer-item-value">
                                                        <div class="item-value-base fonts-apollo">44</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-group-lable fonts-reserve" title="Hours">
                                                Secs
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-media">
                                        <button href="#" class="btn btn-place btn-color fonts-apollo">
                                            Place Bid
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="collect">
        <section class="top-nft">
            <div class="mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 start-nav">
                            <h6 class="fonts-top-nft">Top NFT`s now</h6>
                            <a class="nav-link fonts-top-nft" href="#">View all
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="34" height="44" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="collect-information">
            <div class="container">
                <div class="row collections">
                    <div class="col-4 media3">
                        <img class="img-fluid" src="img/coollebg.svg" alt="girl" />
                    </div>

                    <div class="col-8">
                        <div class="gr-btn-collections">
                            <button class="btn btn-color btn-collect media2">
                                Utility
                            </button>
                            <button class="btn btn-color btn-collect ">
                                Brands
                            </button>
                            <button class="btn btn-color btn-collect  media2">
                                Sports
                            </button>
                            <button class="btn btn-color btn-collect ">
                                Art
                            </button>
                            <button class="btn btn-color btn-collect  media2">
                                Collectibles
                            </button>
                            <button class="btn btn-color btn-collect ">
                                Photography
                            </button>
                            <button class="btn btn-color btn-collect  media2">
                                Brands
                            </button>
                            <button class="btn btn-color btn-collect ">
                                Utility
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="top-nft">
            <div class="mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 start-nav">
                            <h6 class="fonts-top-nft">Top NFT`s now</h6>
                            <a class="nav-link fonts-top-nft" href="#">View all
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="34" height="44" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="explore-collections">
            <div class="container">
                <div class="row med-info">
                    <div class="cards-group ex-coll" style="width: 27rem">
                        <div class="card-img-top">
                            <img src="img/carderbg.png" class="card-img-top" alt="cardl" />
                            <div class="card-body cards">
                                <img class="img-fluid icon-card" src="img/jurnalist.png" alt="ggg" />

                                <div>
                                    <h4 class="name">Jhones Nickey</h4>
                                    <p class="canr">
                                        @jhonartist <img src="img/svg-logo/V.svg" alt="kjj" />
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-ex-info">
                            <div>
                                <p class="text-ex-info">125</p>
                                <p class="text-ex-foll">Folowers</p>
                            </div>
                            <div>
                                <p class="text-ex-info">256</p>
                                <p class="text-ex-foll">Following</p>
                            </div>
                            <div>
                                <p class="text-ex-info">129</p>
                                <p class="text-ex-foll">Artworks</p>
                            </div>
                        </div>

                        <button class="btn btn-color btn-fol">Follow</button>
                    </div>
                    <div class="cards-group ex-coll med-2" style="width: 27rem">
                        <div class="card-img-top">
                            <img src="img/carderbg.png" class="card-img-top" alt="cardl" />
                            <div class="card-body cards">
                                <img class="img-fluid icon-card" src="img/codyfish.png" alt="" />

                                <div>
                                    <h4 class="name">Cody Fisher</h4>
                                    <p class="canr">
                                        @codyfishe <img src="img/svg-logo/V.svg" alt="" />
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-ex-info">
                            <div>
                                <p class="text-ex-info">356</p>
                                <p class="text-ex-foll">Folowers</p>
                            </div>
                            <div>
                                <p class="text-ex-info">456</p>
                                <p class="text-ex-foll">Following</p>
                            </div>
                            <div>
                                <p class="text-ex-info">89</p>
                                <p class="text-ex-foll">Artworks</p>
                            </div>
                        </div>

                        <button class="btn btn-color btn-fol">Follow</button>
                    </div>
                    <div class="cards-group ex-coll med-2" style="width: 27rem">
                        <div class="card-img-top">
                            <img src="img/carderbg.png" class="card-img-top" alt="cardl" />
                            <div class="card-body cards">
                                <img class="img-fluid icon-card" src="img/jero.png" alt="" />

                                <div>
                                    <h4 class="name">Jerome Bell</h4>
                                    <p class="canr">
                                        @jeromebt <img src="img/svg-logo/V.svg" alt="" />
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-ex-info">
                            <div>
                                <p class="text-ex-info">546</p>
                                <p class="text-ex-foll">Folowers</p>
                            </div>
                            <div>
                                <p class="text-ex-info">789</p>
                                <p class="text-ex-foll">Following</p>
                            </div>
                            <div>
                                <p class="text-ex-info">54</p>
                                <p class="text-ex-foll">Artworks</p>
                            </div>
                        </div>

                        <button class="btn btn-color btn-fol">Follow</button>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="top-sellers">
        <section class="top-sellers-nav">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="top-top-wl">
                            <h3 class="top-sel-h">
                                TopSellers this <span class="mon-color">Month</span>
                            </h3>
                            <p class="top-sel-p">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint.

                                <br> Velit officia consequat duis enim minim mollit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="top-seller-main">
            <div class="container mt-5">
                <div class="row">
                    <div class="carusel-main">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="group-mini-card">
                                        <div class="mini-card">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <p class="profit">+468.48%</p>
                                        </div>
                                        <div class="mini-card mt-4">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <h4 class="profit">+468.48%</h4>
                                        </div>
                                        <div class="mini-card mt-4">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <h4 class="profit">+468.48%</h4>
                                        </div>
                                        <div class="mini-card mt-4">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <h4 class="profit">+468.48%</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="group-mini-card">
                                        <div class="mini-card">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <p class="profit">+468.48%</p>
                                        </div>
                                        <div class="mini-card mt-4">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <h4 class="profit">+468.48%</h4>
                                        </div>
                                        <div class="mini-card mt-4">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <h4 class="profit">+468.48%</h4>
                                        </div>
                                        <div class="mini-card mt-4">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <h4 class="profit">+468.48%</h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <div class="group-mini-card">
                                        <div class="mini-card">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <p class="profit">+468.48%</p>
                                        </div>
                                        <div class="mini-card mt-4">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <h4 class="profit">+468.48%</h4>
                                        </div>
                                        <div class="mini-card mt-4">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <h4 class="profit">+468.48%</h4>
                                        </div>
                                        <div class="mini-card mt-4">
                                            <img class="img-fluid" src="img/icon-pres/pena.png" alt="pena">
                                            <div class="mini-card-face">
                                                <h3 class="carusel-name">Eleanor Pena</h3>
                                                <p class="carusel-col"><img src="img/svg-logo/logo-eth-seller.png" alt="">74875</p>
                                            </div>
                                            <h4 class="profit">+468.48%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="what-nft">
            <div class="container p-0 mt-5">
                <div class="row p-0 m-0">
                    <div class="col-12 p-0 m-0">
                        <img class="img-fluid" src="img/what-are.png" alt="">
                    </div>
                    <div class="container">
                        <div class=" what-are-info p-0 m-0">
                            <div class="what-are-info-con">
                                <h5>What are NFT`s ?</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur
                                    <br> adipiscing elit. Interdum quis amet, faucibus
                                    <br> lorem. Lectus amet odio quis sed adipiscing
                                    <br> adipiscing magna non. Nullam turpis faucibus
                                    <br> ridiculus suscipit. Et blandit suspendisse
                                    <br> curabitur eu congue dui ut.
                                </p>
                                <div>
                                    <a class="link" href="#">Learn more</a>
                                    <a class="link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                        </svg>
                                        Watch video
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="subscribe">
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-6">
                    <img src="img/bg-subscribe.png" alt="subscribe" class="img-fluid">
                </div>
                <div class="col-sm-10 col-lg-6 col-md-10 col-xl-6 right-container">
                    <div class="subscribe-box">
                        <h3>Subscribe to us</h3>

                        <p>Specially developed to help restore a more youthful
                            appearance with improved radiance and bounce.</p>
                        <form class="form-inline" action="index.php" method="POST">
                            <div class="form-group">
                                <?php
                                if (isset($_POST['email'])) {
                                    echo sendEmail($_POST['email']);
                                    echo storeToDatabase($_POST['email']);
                                }
                                ?>
                                <div class="foms">
                                    <div class="field">
                                        <input type="email" class="form-control" name="email" placeholder="Your email address" required>
                                    </div>
                                    <button class="btn btn-subcribe btn-color mb-2" type="submit" name="subscribe">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <footer class="py-5">
                <div class="row media3">

                    <div class="col-4">
                        <a class="nav-link fonts-nav" href="#">
                            <img src="img/svg-logo/eth-logo-nav.png" alt="eth-logo-nav"> Ocean<span class="style-logo-nft">NFT</span>
                        </a>
                        <p class="textes-footer-info">Lorem ipsum dolor amet, consectetur
                            <br> adipiscing elit. Eget nisl nunc quam ac
                            <br>s sed turpis volutpat. Cursus sed
                            <br> massa non nisi, placerat.

                        </p>
                    </div>
                    <div class="col-2">
                        <h5 class="footer-col-name">Market Place</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Support</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Legal</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Follow us</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>
                </div>

                <div class="accordion media4" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button footer-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Market Place
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex flex-column">
                                <a href="#" class="footer-link-text">Overview</a>
                                <a href="#" class="footer-link-text">Features</a>
                                <a href="#" class="footer-link-text">Tutorials</a>
                                <a href="#" class="footer-link-text">Pricing</a>
                                <a href="#" class="footer-link-text">Releases</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button footer-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collectibles
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex flex-column">
                                <a href="#" class="footer-link-text">Overview</a>
                                <a href="#" class="footer-link-text">Features</a>
                                <a href="#" class="footer-link-text">Tutorials</a>
                                <a href="#" class="footer-link-text">Pricing</a>
                                <a href="#" class="footer-link-text">Releases</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item last-accordion">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button footer-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Support
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex flex-column">
                                <a href="#" class="footer-link-text">Overview</a>
                                <a href="#" class="footer-link-text">Features</a>
                                <a href="#" class="footer-link-text">Tutorials</a>
                                <a href="#" class="footer-link-text">Pricing</a>
                                <a href="#" class="footer-link-text">Releases</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p class="footer-link-text">© 2021 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-light" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-light" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-light" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>