@extends('layouts.main')
@section('main')
  <main>
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
    <!--? Blog Area Start -->
    <section class="blog_area single-post-area section-padding">
     <div class="container">
      <div class="row">
       <div class="col-lg-8 posts-list">
        <div class="single-post">
         <div class="feature-img">
          <img class="img-fluid" src="../assets/img/blog/{{ $post->img }}" alt="">
        </div>
        <div class="blog_details">
          <h2 style="color: #2d2d2d;">{{ $post->title }}</h2>
          <p> By.
          <a class="d-inline-block" href="/blog?user={{ $post->user->username }}">
            {{ $post->user->name }}
          </a>
          in Category <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
          {{ $post->created_at->diffForHumans() }}
        </p>
         {!! $post->body !!}
     </div>
   </div>
   <div class="navigation-top">
     <div class="d-sm-flex justify-content-between text-center">
      <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
      people like this</p>
      <div class="col-sm-4 text-center my-2 my-sm-0">
      </div>
      <ul class="social-icons">
       <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
       <li><a href="#"><i class="fab fa-twitter"></i></a></li>
       <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
       <li><a href="#"><i class="fab fa-behance"></i></a></li>
     </ul>
   </div>
   <div class="navigation-area">
    <div class="row">
     <div
     class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
     <div class="thumb">
       <a href="#">
        <img class="img-fluid" src="../assets/img/post/preview.png" alt="">
      </a>
    </div>
    <div class="arrow">
     <a href="#">
      <span class="lnr text-white ti-arrow-left"></span>
    </a>
  </div>
  <div class="detials">
   <p>Prev Post</p>
   <a href="#">
    <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
  </a>
</div>
</div>
<div
class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
<div class="detials">
 <p>Next Post</p>
 <a href="#">
  <h4 style="color: #2d2d2d;">Telescopes 101</h4>
</a>
</div>
<div class="arrow">
 <a href="#">
  <span class="lnr text-white ti-arrow-right"></span>
</a>
</div>
<div class="thumb">
 <a href="#">
  <img class="img-fluid" src="../assets/img/post/next.png" alt="">
</a>
</div>
</div>
</div>
</div>
</div>
<div class="blog-author">
 <div class="media align-items-center">
  <img src="../assets/img/blog/author.png" alt="">
  <div class="media-body">
   <a href="#">
    <h4>Harvard milan</h4>
  </a>
  <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
  our dominion twon Second divided from</p>
</div>
</div>
</div>
<div class="comments-area">
 <h4>05 Comments</h4>
 <div class="comment-list">
  <div class="single-comment justify-content-between d-flex">
   <div class="user justify-content-between d-flex">
    <div class="thumb">
     <img src="../assets/img/blog/comment_1.png" alt="">
   </div>
   <div class="desc">
     <p class="comment">
      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
    </p>
    <div class="d-flex justify-content-between">
      <div class="d-flex align-items-center">
       <h5>
        <a href="#">Emilly Blunt</a>
      </h5>
      <p class="date">December 4, 2017 at 3:12 pm </p>
    </div>
    <div class="reply-btn">
     <a href="#" class="btn-reply text-uppercase">reply</a>
   </div>
 </div>
</div>
</div>
</div>
</div>
<div class="comment-list">
  <div class="single-comment justify-content-between d-flex">
   <div class="user justify-content-between d-flex">
    <div class="thumb">
     <img src="../assets/img/blog/comment_2.png" alt="">
   </div>
   <div class="desc">
     <p class="comment">
      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
    </p>
    <div class="d-flex justify-content-between">
      <div class="d-flex align-items-center">
       <h5>
        <a href="#">Emilly Blunt</a>
      </h5>
      <p class="date">December 4, 2017 at 3:12 pm </p>
    </div>
    <div class="reply-btn">
     <a href="#" class="btn-reply text-uppercase">reply</a>
   </div>
 </div>
</div>
</div>
</div>
</div>
<div class="comment-list">
  <div class="single-comment justify-content-between d-flex">
   <div class="user justify-content-between d-flex">
    <div class="thumb">
     <img src="../assets/img/blog/comment_3.png" alt="">
   </div>
   <div class="desc">
     <p class="comment">
      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
    </p>
    <div class="d-flex justify-content-between">
      <div class="d-flex align-items-center">
       <h5>
        <a href="#">Emilly Blunt</a>
      </h5>
      <p class="date">December 4, 2017 at 3:12 pm </p>
    </div>
    <div class="reply-btn">
     <a href="#" class="btn-reply text-uppercase">reply</a>
   </div>
 </div>
</div>
</div>
</div>
</div>
</div>
<div class="comment-form">
 <h4>Leave a Reply</h4>
 <form class="form-contact comment_form" action="#" id="commentForm">
  <div class="row">
   <div class="col-12">
    <div class="form-group">
     <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
     placeholder="Write Comment"></textarea>
   </div>
 </div>
 <div class="col-sm-6">
  <div class="form-group">
   <input class="form-control" name="name" id="name" type="text" placeholder="Name">
 </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
   <input class="form-control" name="email" id="email" type="email" placeholder="Email">
 </div>
</div>
<div class="col-12">
  <div class="form-group">
   <input class="form-control" name="website" id="website" type="text" placeholder="Website">
 </div>
</div>
</div>
<div class="form-group">
 <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
</div>
</form>
</div>
</div>
<div class="col-lg-4">
  <div class="blog_right_sidebar">
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
</aside>

</div>
</div>
</div>
</div>
</section>
<!-- Blog Area End -->
</main>
@endsection
