@extends('layouts.main')
@section('main')

        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" data-background="../assets/img/hero/hero2.png">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>{{ $title }}</h2>
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
                            @if ($posts->count())

                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="../assets/img/blog/{{ $posts[0]->img }}" alt="">
                                    <div class="blog_item_date">
                                        <?php $time= strtotime($posts[0]->created_at)?>
                                        <h3> {{ date('d', $time)  }}</h3>
                                        <p> {{ date('M', $time)  }}</p>
                                    </div>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="/blog/{{ $posts[0]->slug }}">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{{ $posts[0]->title }}</h2>
                                    </a><br>
                                    <p> By.
                                    <a class="d-inline-block" href="/blog?user={{ $posts[0]->user->username }}">
                                         {{ $posts[0]->user->name }}
                                    </a> In Category <a href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p>
                                    <p>{{ $posts[0]->excerpt }}</p>
                                    <a href='blog/{{ $posts[0]->slug }}' class="btn btn-primary"> Read More</a>
                                </div>
                            </article>
                            <div class="container">
                                <div class="row">
                                    @foreach ( $posts->skip(1) as $post )
                                   <div class="col-md-6 mb-3">
                                    <div class="card blog_details">
                                        <img src="../assets/img/blog/{{ $post->img }}" class="card-img-top" >
                                        <div class="card-body">
                                          <h2 class="card-title blog-head">{{ $post->title }}</h2>
                                          <p>
                                            <small>
                                                By. <a href="/blog?user={{ $post->user->username }}" class="d-inline-block"> {{ $post->user->name }} </a>
                                                {{ $post->created_at->diffForHumans() }}
                                            </small>
                                          </p>
                                          <p class="card-text">{{ $post->excerpt }}</p>
                                          <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                                        </div>
                                      </div>
                                   </div>
                                   @endforeach
                                </div>
                            </div>
                            @else
                            <article class="blog-item">
                                <p class="text-center fs-3">No post found.</p>
                            </article>
                            @endif
                            <div class="d-flex justify-content-center">
                            {{ $posts->links() }}
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="/blog">
                                    @if (request('category'))
                                        <input type="hidden" name="category" value="{{ request('category') }}">
                                    @endif
                                    @if (request('user'))
                                        <input type="hidden" name="user" value="{{ request('user') }}">
                                    @endif
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'" name="search" value="{{ request('search') }}">
                                            <div class="input-group-append">
                                                <button class="btns" type="submit"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                                </form>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                                @foreach ($categories as $category  )
                                <ul class="list cat-list">
                                    <li>
                                        <a href="/blog?category={{ $category->slug }}" class="d-flex">
                                            <p>{{ $category->name }}</p>
                                            <p>({{ $category->posts->count('category_id') }})</p>
                                        </a>
                                    </li>
                                </ul>
                                @endforeach
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                                @foreach ( $sort as $s )
                                <div class="media post_item">
                                    <img src="../assets/img/post/post_1.png" alt="post">
                                    <div class="media-body">
                                        <a href="/blog/{{ $s->slug}}">
                                            <h3 style="color: #2d2d2d;">{{ $s->title }}</h3>
                                        </a>
                                        <?php $time= strtotime($s->published_at)?>
                                        <small>{{ date('M d , Y', $time) }}</small>
                                    </div>
                                </div>
                                @endforeach
                                <div class="d-flex justify-content-end">
                                {{ $sort->links() }}
                            </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Area End -->
@endsection

