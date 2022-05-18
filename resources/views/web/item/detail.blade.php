@extends('layouts.blank')
@section('title')
    首页
@stop

{{--@section('title_head')--}}
{{--    NFT Marketplace--}}
{{--@stop--}}

@section('header-class')
    header-light scroll-light border-bottom
@stop

@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section aria-label="section" class="mt90 sm-mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="{{asset('images/items/big-1.jpg')}}" class="img-fluid img-rounded mb-sm-30" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="item_info">
                            Auctions ends in
                            <div class="de_countdown" data-year="2021" data-month="9" data-day="16" data-hour="8"></div>
                            <h2>Pinky Ocean</h2>
                            <div class="item_info_counts">
                                <div class="item_info_type"><i class="fa fa-image"></i>Art</div>
                                <div class="item_info_views"><i class="fa fa-eye"></i>250</div>
                                <div class="item_info_like"><i class="fa fa-heart"></i>18</div>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo.</p>

                            <h6>Creator</h6>
                            <div class="item_author">
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="{{asset('images/author/author-1.jpg')}}" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Monica Lucas</a>
                                </div>
                            </div>

                            <div class="spacer-40"></div>

                            <div class="de_tab tab_simple">

                                <ul class="de_nav">
                                    <li class="active"><span>Bids</span></li>
                                    <li><span>History</span></li>
                                </ul>

                                <div class="de_tab_content">

                                    <div class="tab-1">
                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="{{asset('images/author/author-1.jpg')}}"
                                                         alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid accepted <b>0.005 ETH</b>
                                                <span>by <b>Monica Lucas</b> at 6/15/2021, 3:20 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="{{asset('images/author/author-2.jpg')}}"
                                                         alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.005 ETH</b>
                                                <span>by <b>Mamie Barnett</b> at 6/14/2021, 5:40 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="{{asset('images/author/author-3.jpg')}}"
                                                         alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.004 ETH</b>
                                                <span>by <b>Nicholas Daniels</b> at 6/13/2021, 5:03 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="{{asset('images/author/author-4.jpg')}}"
                                                         alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.003 ETH</b>
                                                <span>by <b>Lori Hart</b> at 6/12/2021, 12:57 AM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-2">
                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="{{asset('images/author/author-5.jpg')}}"
                                                         alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.005 ETH</b>
                                                <span>by <b>Jimmy Wright</b> at 6/14/2021, 6:40 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="{{asset('images/author/author-1.jpg')}}"
                                                         alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid accepted <b>0.005 ETH</b>
                                                <span>by <b>Monica Lucas</b> at 6/15/2021, 3:20 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="{{asset('images/author/author-2.jpg')}}"
                                                         alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.005 ETH</b>
                                                <span>by <b>Mamie Barnett</b> at 6/14/2021, 5:40 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="{{asset('images/author/author-3.jpg')}}"
                                                         alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.004 ETH</b>
                                                <span>by <b>Nicholas Daniels</b> at 6/13/2021, 5:03 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="{{asset('images/author/author-4.jpg')}}"
                                                         alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.003 ETH</b>
                                                <span>by <b>Lori Hart</b> at 6/12/2021, 12:57 AM</span>
                                            </div>
                                        </div>
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
