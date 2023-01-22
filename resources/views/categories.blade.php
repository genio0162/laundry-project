@extends('layouts.main')
@section('main')

        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" data-background="../assets/img/hero/hero2.png">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Categories</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero End -->
        <!--? Blog Area Start-->

        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach ( $categories as $category )
                            <article class="blog_item">
                                <ul>
                                    <li style="circle">
                                        <h2><a href='/blog?category={{ $category->slug }}'>{{ $category->name }}</a></h2>
                                    </li>
                                </ul>
                            </article>
                            @endforeach
                            {{ $categories->links() }}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                            <div class="input-group-append">
                                                <button class="btns" type="button"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                                </form>
                            </aside>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Area End -->
@endsection

