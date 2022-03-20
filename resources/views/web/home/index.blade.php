@extends('layouts.blank')
@section('title')
    首页
@stop
{{--@section('title_head')--}}
{{--    NFT Marketplace--}}
{{--@stop--}}
@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="section-hero" aria-label="section" class="text-light overflow-hidden"
                 data-bgimage="url(images/background/2.jpg) top">
            <div id="particles-js"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="text_top">
                            <div class="spacer-double"></div>
                            <h1>{{trans('web.slogan')}} </h1>
                            <p class="lead">{{trans('web.intro')}}</p>
                            <div class="spacer-20"></div>
                            <a href="item/index" class="btn-main">{{trans('web.explore')}}</a>&nbsp;&nbsp;
                            <a href="item/mint" class="btn-main btn-white">{{trans('web.create')}}</a>
                            <div class="spacer-double"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section id="section-nfts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>{{trans('web.popular_items')}}</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeIn">
                    @foreach ($data['list'] as $value)
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item">
                                <div class="de_countdown" data-year="2022" data-month="9" data-day="16"
                                     data-hour="8" data-second></div>
                                <div class="author_list_pp">
                                    <a href="user/detail">
                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <a href="item/detail">
                                        <img src="images/items/static-1.jpg" class="lazy nft__item_preview" alt="">
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
            </div>
        </section>

        <section id="section-collections" data-bgcolor="#F7F4FD">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Hot Collections</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    <div id="collection-carousel" class="owl-carousel wow fadeIn">

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="images/collections/coll-1.jpg"
                                                               class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy" src="images/author/author-1.jpg" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html"><h4>Abstraction</h4></a>
                                <span>ERC-192</span>
                            </div>
                        </div>

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="images/collections/coll-2.jpg"
                                                               class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy" src="images/author/author-2.jpg" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html"><h4>Patternlicious</h4></a>
                                <span>ERC-61</span>
                            </div>
                        </div>

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="images/collections/coll-3.jpg"
                                                               class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy" src="images/author/author-3.jpg" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html"><h4>Skecthify</h4></a>
                                <span>ERC-126</span>
                            </div>
                        </div>

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="images/collections/coll-4.jpg"
                                                               class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy" src="images/author/author-4.jpg" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html"><h4>Cartoonism</h4></a>
                                <span>ERC-73</span>
                            </div>
                        </div>

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="images/collections/coll-5.jpg"
                                                               class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy" src="images/author/author-5.jpg" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html"><h4>Virtuland</h4></a>
                                <span>ERC-85</span>
                            </div>
                        </div>

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="images/collections/coll-6.jpg"
                                                               class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy" src="images/author/author-6.jpg" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html"><h4>Papercut</h4></a>
                                <span>ERC-42</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="section-popular">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Top Sellers</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    <div class="col-md-12 wow fadeIn">
                        <ol class="author_list">
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Monica Lucas</a>
                                    <span>3.2 ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-2.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Mamie Barnett</a>
                                    <span>2.8 ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-3.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Nicholas Daniels</a>
                                    <span>2.5 ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-4.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Lori Hart</a>
                                    <span>2.2 ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-5.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Jimmy Wright</a>
                                    <span>1.9 ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-6.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Karla Sharp</a>
                                    <span>1.6 ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-7.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Gayle Hicks</a>
                                    <span>1.5 ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-8.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Claude Banks</a>
                                    <span>1.3 ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-9.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Franklin Greer</a>
                                    <span>0.9 ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-10.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Stacy Long</a>
                                    <span>0.8 ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-11.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Ida Chapman</a>
                                    <span>0.6 ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_pp">
                                    <a href="author.html">
                                        <img class="lazy" src="images/author/author-12.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="author_list_info">
                                    <a href="author.html">Fred Ryan</a>
                                    <span>0.5 eth</span>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-steps" data-bgcolor="#F7F4FD">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Create and sell your NFTs</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_wallet"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">Set up your wallet</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                            </div>
                            <i class="wm icon_wallet"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_cloud-upload_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">Add your NFT's</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                            </div>
                            <i class="wm icon_cloud-upload_alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_tags_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">Sell your NFT's</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                            </div>
                            <i class="wm icon_tags_alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- content close -->

    <script type="text/javascript">
        {{--connect();--}}
        {{--// 连接服务端--}}
        {{--function connect() {--}}
        {{--    // 创建websocket--}}
        {{--    @if(PHP_OS == 'WINNT') //本地测试专用--}}
        {{--    ws = new WebSocket("ws://127.0.0.1:8081");--}}
        {{--    @else //线上环境--}}
        {{--    ws = new WebSocket("wss://api.95wx.cn/wss");--}}
        {{--    @endif--}}

        {{--    // 当有消息时根据消息类型显示不同信息--}}
        {{--    ws.onmessage =  function(event) {--}}
        {{--        //  console.log(event.data);--}}
        {{--    };--}}

        {{--    ws.onclose = function() {--}}
        {{--        console.log("连接关闭，定时重连");--}}
        {{--        //  connect();--}}
        {{--    };--}}
        {{--    ws.onerror = function() {--}}
        {{--        console.log("出现错误");--}}
        {{--    };--}}
        {{--}--}}
        {{--ws.onmessage =  function(event) {--}}
        {{--    var  data = JSON.parse(event.data);--}}
        {{--    //   console.log(data);return false;--}}
        {{--    if(data.length !==0){--}}
        {{--        data = data['content'][0];--}}
        {{--        console.log(data);--}}
        {{--    }--}}
        {{--}--}}


    </script>
    @parent
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>

    </script>
    <script type="text/javascript">
        setInterval(function () {
            $(".owl-next").trigger("click");
        }, 7000)
    </script>
@stop


