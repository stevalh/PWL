@extends('layouts.template')
@section('content')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>Post Details</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Banner Ends Here -->

<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog-post-02.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>{{ $post->category->name }}</span>
                                    <a href="post-details.html">
                                        <h4>{{ $post->title }}</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="/about/{{ $post->user->id }}">{{ $post->user->name }}</a></li>
                                        <li><a href="#">{{ $post->created_at }}</a></li>
                                        {{-- <li><a href="#">10 Comments</a></li> --}}
                                    </ul>
                                </div>
                                {!! $post->content !!}
                            </div>
                        </div>

                        
                        <div class="col-lg-12">
                            <div class="sidebar-item submit-comment">
                                <div class="sidebar-heading">
                                    <h2>Your comment</h2>
                                </div>
                                <div class="content">
                                    <form id="comment" action="" method="POST">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <textarea name="message" rows="6" id="message"
                                                        placeholder="Type your comment" required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit"
                                                        class="main-button">Submit</button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sidebar-item comments">
                                <div class="sidebar-heading">
                                    <h2>4 comments</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <div class="author-thumb">
                                                <img src="images/comment-author-01.jpg" alt="">
                                            </div>
                                            <div class="right-content">
                                                <h4>Charles Kate<span>May 16, 2020</span></h4>
                                                <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla
                                                    condimentum eu quis leo.
                                                    Vestibulum id turpis porttitor sapien facilisis scelerisque.
                                                    Curabitur a nisl eu lacus
                                                    convallis eleifend posuere id tellus.</p>
                                            </div>
                                        </li>
                                        <li class="replied">
                                            <div class="author-thumb">
                                                <img src="images/comment-author-02.jpg" alt="">
                                            </div>
                                            <div class="right-content">
                                                <h4>Thirteen Man<span>May 20, 2020</span></h4>
                                                <p>In porta urna sed venenatis sollicitudin. Praesent urna sem, pulvinar
                                                    vel mattis eget.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author-thumb">
                                                <img src="images/comment-author-03.jpg" alt="">
                                            </div>
                                            <div class="right-content">
                                                <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                                                <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt
                                                    in, ultrices eget
                                                    ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat,
                                                    lobortis turpis ac,
                                                    molestie nibh.</p>
                                            </div>
                                        </li>
                                        <li class="replied">
                                            <div class="author-thumb">
                                                <img src="images/comment-author-02.jpg" alt="">
                                            </div>
                                            <div class="right-content">
                                                <h4>Thirteen Man<span>May 22, 2020</span></h4>
                                                <p>Mauris sit amet justo vulputate, cursus massa congue, vestibulum
                                                    odio. Aenean elit nunc,
                                                    gravida in erat sit amet, feugiat viverra leo.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Let's make your version post</h5>
                        <p class="card-text">Interested in making a post that helps a lot of people?</p>
                        <a href="{{ route('createpost') }}" class="btn btn-warning btn-block mt-2" role="button" style="background-color: #f48840; color: white;">Create A
                        Post</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection
