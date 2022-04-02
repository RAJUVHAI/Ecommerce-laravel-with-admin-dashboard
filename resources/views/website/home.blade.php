@extends('layouts.webadmin')
@section('title', 'home')
@section('content')



             <section class="hero">
                 <div class="container">
                     <div class="row">
                         <div class="col-3">
                            
                         </div>
    
                     
                 <div class="col-lg-9">
                    <div class="hero__item set-bg" data-setbg="{{ asset('storage/product-image/'.$editbanner->image) }}">
                        <div class="hero__text">
                           
                        {!! $editbanner->desc_name !!}
                            
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                 </div>
                 </div>
                 </div>
             </section>


<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach ($category as $values)
                    
             
                <div class="col-lg-3">
                    <div class="categories__item set-bg"
                        data-setbg="{{ asset('storage/product-image/'.$values->image) }} ">
                        <h5><a href="#">{{$values->c_name}}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->


 <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach ($category as $value)
                                <li data-filter=".{{str_replace(' ', '-', strtolower(str_replace('&','',$value->c_name)));}}">{{$value->c_name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($product as $value)
                    @if($value->sub_id==0)

                        <div class="col-lg-3 col-md-4 col-sm-6 mix {{str_replace(' ', '-', strtolower(str_replace('&','',$value->c_name)));}}">
                        
                    @else
                                            @php 
                           $parent= DB::table('category_tb')
                                    ->where('id',$value->sub_id)
                                    ->value('c_name');
                        @endphp
                         <div class="col-lg-3 col-md-4 col-sm-6 mix {{str_replace(' ', '-', strtolower(str_replace('&','',$parent)));}}">      
                        
                    @endif
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg"
                                data-setbg="{{asset('storage/product-image/'.$value->image)}}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="{{route('addCart',['id'=>$value->id])}}"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">{{$value->p_name}}</a></h6>
                                <h5>${{$value->s_price}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
           
        </div>
    </section>
<!-- Featured Section End -->




<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="  {{ asset('website/ogani-master/img/banner/banner-1.jpg') }} " alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src=" {{ asset('website/ogani-master/img/banner/banner-2.jpg') }}  " alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-1.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-2.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-3.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-1.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-2.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-3.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-1.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-2.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/ img/latest-product/lp-3.jpg') }} "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-1.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-2.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-3.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-1.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-2.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-3.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-1.jpg') }} "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-2.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src=" {{ asset('website/ogani-master/img/latest-product/lp-3.jpg') }}  "
                                        alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->



@endsection
