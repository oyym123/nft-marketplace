@extends('layouts.blank')
@section('title')
    首页
@stop
{{--@section('title_head')--}}
{{--    NFT Marketplace--}}
{{--@stop--}}
@section('header-class')
{{--    header-light scroll-light--}}
@stop

@section('content')

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="profile_banner" aria-label="section" class="text-light"
                 data-bgimage="url({{asset('images/author_single/author_banner.jpg')}}) top">
            <div id="particles-js"></div>
        </section>

        <!-- section close -->
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d_profile de-flex">
                            <div class="de-flex-col">
                                <div class="profile_avatar">
                                    <img src="{{asset('images/author_single/author_thumbnail.jpg')}}" alt="">
                                    <i class="fa fa-check"></i>
                                    <div class="profile_name">
                                        <h4>
                                            Monica Lucas
                                            <span class="profile_username">@monicaaa</span>
                                            <span id="wallet" class="profile_wallet">DdzFFzCqrhshMSxb9oW3mRo4MJrQkusV3fGFSTwaiu4wPBqMryA9DYVJCkW9n7twCffG5f5wX2sSkoDXGiZB1HPa7K7f865Kk4LqnrME</span>
                                            <button id="btn_copy" title="Copy Text">Copy</button>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="profile_follow de-flex">
                                <div class="de-flex-col">
                                    <div class="profile_follower">500 followers</div>
                                </div>
                                <div class="de-flex-col">
                                    <a href="#" class="btn-main">Follow</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="de_tab tab_simple">

                            <ul class="de_nav">
                                <li class="active"><span>On Sale</span></li>
                                <li><span>Created</span></li>
                                <li><span>Liked</span></li>
                            </ul>

                            <div class="de_tab_content">

                                <div class="tab-1">
                                    <div class="row">
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item">
                                                <div class="de_countdown" data-year="2021" data-month="9" data-day="16"
                                                     data-hour="8"></div>
                                                <div class="author_list_pp">
                                                    <a href="author.html">
                                                        <img class="lazy" src="{{asset('images/author/author-1.jpg')}}"
                                                             alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <a href="item-details.html">
                                                        <img src="{{asset('images/author_single/porto-1.jpg')}}"
                                                             class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="item-details.html">
                                                        <h4>Pinky Ocean</h4>
                                                    </a>
                                                    <div class="nft__item_price">
                                                        0.08 ETH<span>1/20</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item">
                                                <div class="author_list_pp">
                                                    <a href="author.html">
                                                        <img class="lazy" src="{{asset('images/author/author-1.jpg')}}"
                                                             alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <a href="item-details.html">
                                                        <img src="{{asset('images/author_single/porto-2.jpg')}}"
                                                             class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="item-details.html">
                                                        <h4>The Animals</h4>
                                                    </a>
                                                    <div class="nft__item_price">
                                                        0.06 ETH<span>1/22</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item">
                                                <div class="de_countdown" data-year="2021" data-month="9" data-day="14"
                                                     data-hour="8"></div>
                                                <div class="author_list_pp">
                                                    <a href="author.html">
                                                        <img class="lazy" src="{{asset('images/author/author-1.jpg')}}"
                                                             alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <a href="item-details.html">
                                                        <img src="{{asset('images/author_single/porto-3.jpg')}}"
                                                             class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="item-details.html">
                                                        <h4>Three Donuts</h4>
                                                    </a>
                                                    <div class="nft__item_price">
                                                        0.05 ETH<span>1/11</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>97</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item">
                                                <div class="author_list_pp">
                                                    <a href="author.html">
                                                        <img class="lazy" src="{{asset('images/author/author-1.jpg')}}"
                                                             alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <a href="item-details.html">
                                                        <img src="{{asset('images/author_single/porto-4.jpg')}}"
                                                             class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="item-details.html">
                                                        <h4>Graffiti Colors</h4>
                                                    </a>
                                                    <div class="nft__item_price">
                                                        0.02 ETH<span>1/15</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>73</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-2">
                                    <div class="row">

                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item">
                                                <div class="de_countdown" data-year="2021" data-month="9" data-day="14"
                                                     data-hour="8"></div>
                                                <div class="author_list_pp">
                                                    <a href="author.html">
                                                        <img class="lazy" src="{{asset('images/author/author-1.jpg')}}"
                                                             alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <a href="item-details.html">
                                                        <img src="{{asset('images/author_single/porto-3.jpg')}}"
                                                             class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="item-details.html">
                                                        <h4>Three Donuts</h4>
                                                    </a>
                                                    <div class="nft__item_price">
                                                        0.05 ETH<span>1/11</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>97</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item">
                                                <div class="de_countdown" data-year="2021" data-month="9" data-day="16"
                                                     data-hour="8"></div>
                                                <div class="author_list_pp">
                                                    <a href="author.html">
                                                        <img class="lazy" src="{{asset('images/author/author-1.jpg')}}"
                                                             alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <a href="item-details.html">
                                                        <img src="{{asset('images/author_single/porto-1.jpg')}}"
                                                             class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="item-details.html">
                                                        <h4>Pinky Ocean</h4>
                                                    </a>
                                                    <div class="nft__item_price">
                                                        0.08 ETH<span>1/20</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item">
                                                <div class="author_list_pp">
                                                    <a href="author.html">
                                                        <img class="lazy" src="{{asset('images/author/author-1.jpg')}}"
                                                             alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <a href="item-details.html">
                                                        <img src="{{asset('images/author_single/porto-2.jpg')}}"
                                                             class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="item-details.html">
                                                        <h4>The Animals</h4>
                                                    </a>
                                                    <div class="nft__item_price">
                                                        0.06 ETH<span>1/22</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nft item begin -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="nft__item">
                                                <div class="author_list_pp">
                                                    <a href="author.html">
                                                        <img class="lazy" src="{{asset('images/author/author-1.jpg')}}"
                                                             alt="">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                                <div class="nft__item_wrap">
                                                    <a href="item-details.html">
                                                        <img src="{{asset('images/author_single/porto-4.jpg')}}"
                                                             class="lazy nft__item_preview" alt="">
                                                    </a>
                                                </div>
                                                <div class="nft__item_info">
                                                    <a href="item-details.html">
                                                        <h4>Graffiti Colors</h4>
                                                    </a>
                                                    <div class="nft__item_price">
                                                        0.02 ETH<span>1/15</span>
                                                    </div>
                                                    <div class="nft__item_action">
                                                        <a href="#">Place a bid</a>
                                                    </div>
                                                    <div class="nft__item_like">
                                                        <i class="fa fa-heart"></i><span>73</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-3">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
    @parent

@stop
