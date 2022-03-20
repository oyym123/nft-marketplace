@extends('layouts.blank')
@section('title')
    首页
@stop
{{--@section('title_head')--}}
{{--    NFT Marketplace--}}
{{--@stop--}}
@section('content')
    <!-- section begin -->
    <section aria-label="section">
        <div class="container">
            <div class="row wow fadeIn">
                <div class="col-lg-12">

                    <div class="items_filter">
                        <form action="blank.php" class="row form-dark" id="form_quick_search" method="post"
                              name="form_quick_search">
                            <div class="col text-center">
                                <input class="form-control" id="name_1" name="name_1" placeholder="search item here..."
                                       type="text"/> <a href="#" id="btn-submit"><i
                                        class="fa fa-search bg-color-secondary"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </form>

                        <div id="item_category" class="dropdown">
                            <a href="#" class="btn-selector">All categories</a>
                            <ul>
                                <li class="active"><span>All categories</span></li>
                                <li><span>Art</span></li>
                                <li><span>Music</span></li>
                                <li><span>Domain Names</span></li>
                                <li><span>Virtual World</span></li>
                                <li><span>Trading Cards</span></li>
                                <li><span>Collectibles</span></li>
                                <li><span>Sports</span></li>
                                <li><span>Utility</span></li>
                            </ul>
                        </div>

                        <div id="buy_category" class="dropdown">
                            <a href="#" class="btn-selector">Buy Now</a>
                            <ul>
                                <li class="active"><span>Buy Now</span></li>
                                <li><span>On Auction</span></li>
                                <li><span>Has Offers</span></li>
                            </ul>
                        </div>

                        <div id="items_type" class="dropdown">
                            <a href="#" class="btn-selector">All Items</a>
                            <ul>
                                <li class="active"><span>All Items</span></li>
                                <li><span>Single Items</span></li>
                                <li><span>Bundles</span></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- nft item begin -->
                <div class="row wow fadeIn">
                    @foreach ($data['list'] as $value)
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item">
                                <div class="de_countdown" data-year="2021" data-month="9" data-day="16"
                                     data-hour="8"></div>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="{{asset('images/author/author-1.jpg')}}" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <a href="/item/detail">
                                        <img src="{{asset('images/items/static-1.jpg')}}" class="lazy nft__item_preview"
                                             alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="item-details.html">
                                        <h4>{{$value['nft']['name'] }}</h4>
                                    </a>
                                    <div class="nft__item_price">
                                        {{ $value['itemList'][0]['item']['price'] }} ETH<span>1/20</span>
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
                    @endforeach
                    <div class="col-md-12 text-center">
                        <a href="#" id="loadmore" class="btn-main wow fadeInUp lead">Load more</a>
                    </div>
                </div>
                <!-- nft item end -->
            </div>
        </div>
    </section>
    </div>
    <!-- content close -->

    <a href="#" id="back-to-top"></a>

    <!-- content close -->
    @parent
@stop
