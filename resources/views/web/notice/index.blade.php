@extends('layouts.blank')
@section('title')
    首页
@stop
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="text-light" data-bgimage="url({{asset('images/background/subheader.jpg')}}) top">
            <div id="particles-js"></div>
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Activity</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <!-- section begin -->
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="activity-list">
                            <li class="act_follow">
                                <img class="lazy" src="{{asset('images/author/author-1.jpg')}}" alt="">
                                <div class="act_list_text">
                                    <h4>Monica Lucas</h4>
                                    started following <a href="#">Gayle Hicks</a>
                                    <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                </div>
                            </li>
                            <li class="act_sale">
                                <img src="{{asset('images/items/thumbnail-2.jpg')}}" alt="">
                                <div class="act_list_text">
                                    <h4>Deep Sea Phantasy</h4>
                                    1 edition purchased by <a href="#">Stacy Long</a> for 0.001 ETH
                                    <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                </div>
                            </li>
                            <li class="act_like">
                                <img src="{{asset('images/items/thumbnail-7.jpg')}}" alt="">
                                <div class="act_list_text">
                                    <h4>Cute Astronout</h4>
                                    liked by <a href="#">Nicholas Daniels</a>
                                    <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                </div>
                            </li>
                            <li class="act_follow">
                                <img class="lazy" src="{{asset('images/author/author-2.jpg')}}" alt="">
                                <div class="act_list_text">
                                    <h4>Mamie Barnett</h4>
                                    started following <a href="#">Claude Banks</a>
                                    <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                </div>
                            </li>
                            <li class="act_offer">
                                <img src="{{asset('images/items/thumbnail-5.jpg')}}" alt="">
                                <div class="act_list_text">
                                    <h4>Purple Planet</h4>
                                    <a href="#">Franklin Greer</a> offered 0.002 ETH
                                    <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                </div>
                            </li>
                            <li class="act_follow">
                                <img class="lazy" src="{{asset('images/author/author-3.jpg')}}" alt="">
                                <div class="act_list_text">
                                    <h4>Nicholas Daniels</h4>
                                    started following <a href="#">Franklin Greer</a>
                                    <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                </div>
                            </li>
                            <li class="act_sale">
                                <img src="{{asset('images/items/thumbnail-4.jpg')}}" alt="">
                                <div class="act_list_text">
                                    <h4>Two Tigers</h4>
                                    1 edition purchased by <a href="#">Jimmy Wright</a> for 0.02 ETH
                                    <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                </div>
                            </li>
                            <li class="act_like">
                                <img src="{{asset('images/items/thumbnail-6.jpg')}}" alt="">
                                <div class="act_list_text">
                                    <h4>Cute Astronout</h4>
                                    liked by <a href="#">Karla Sharp</a>
                                    <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <span class="filter__l">Filter</span>
                        <span class="filter__r">Reset</span>
                        <div class="spacer-half"></div>
                        <div class="clearfix"></div>
                        <ul class="activity-filter">
                            <li class="filter_by_sales"><i class="fa fa-shopping-basket"></i>Sales</li>
                            <li class="filter_by_likes"><i class="fa fa-heart"></i>Likes</li>
                            <li class="filter_by_offers"><i class="fa fa-gavel"></i>Offers</li>
                            <li class="filter_by_followings"><i class="fa fa-check"></i>Followings</li>
                        </ul>

                    </div>

                </div>

            </div>
        </section>
        <!-- section close -->

    </div>
    <!-- content close -->
    @parent
@stop
