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
                    @guest
                        @if(!Auth::check())
                        <h4>Welcome to {{ $user->name }}'s Blogs</h4>
                        @endif
                        @else
                        <h4>My Blogs</h4>
                        <h2>see all the posts you made!</h2>
                        @endguest
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
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog-thumb-01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <a href="post-details.html">
                                        <h4>Donec tincidunt leo</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 31, 2020</a></li>
                                        <li><a href="#">12 Comments</a></li>
                                    </ul>
                                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a
                                        mauris sit amet
                                        eleifend.</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">Best Templates</a>,</li>
                                                    <li><a href="#">TemplateMo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog-thumb-02.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <a href="post-details.html">
                                        <h4>Suspendisse et metus</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 22, 2020</a></li>
                                        <li><a href="#">26 Comments</a></li>
                                    </ul>
                                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a
                                        mauris sit amet
                                        eleifend.</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">Best Templates</a>,</li>
                                                    <li><a href="#">TemplateMo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog-thumb-03.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <a href="post-details.html">
                                        <h4>Donec tincidunt leo</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 18, 2020</a></li>
                                        <li><a href="#">42 Comments</a></li>
                                    </ul>
                                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a
                                        mauris sit amet
                                        eleifend.</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">Best Templates</a>,</li>
                                                    <li><a href="#">TemplateMo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog-thumb-04.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <a href="post-details.html">
                                        <h4>Mauris ac dolor ornare</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 16, 2020</a></li>
                                        <li><a href="#">28 Comments</a></li>
                                    </ul>
                                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a
                                        mauris sit amet
                                        eleifend.</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">Best Templates</a>,</li>
                                                    <li><a href="#">TemplateMo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog-thumb-05.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <a href="post-details.html">
                                        <h4>Donec tincidunt leo</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 12, 2020</a></li>
                                        <li><a href="#">16 Comments</a></li>
                                    </ul>
                                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a
                                        mauris sit amet
                                        eleifend.</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">Best Templates</a>,</li>
                                                    <li><a href="#">TemplateMo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog-thumb-06.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <a href="post-details.html">
                                        <h4>Mauris ac dolor ornare</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 10, 2020</a></li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a
                                        mauris sit amet
                                        eleifend.</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">Best Templates</a>,</li>
                                                    <li><a href="#">TemplateMo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <ul class="page-numbers">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card " style="width: 18rem;">
                                <div class="card-header">
                                    Profile
                                </div>
                                <div class="row">
                                    <div class="col-1 col-lg-1"></div>
                                    <div class="col-8 col-lg-6"><img class="center"
                                            src="data:image/png;base64,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"
                                            class="rounded-circle" alt="...">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $user->name }}</h5> <!-- Nama -->
                                    <p class="card-text">Username: apapun</p> <!-- Username -->
                                    <p class="card-text">Email: {{ $user->email }}</p> <!-- Email -->
                                    @if(Auth::check())
                                    <div class="mt-2">
                                        <a href="#" class="card-link fa fa-cogs" style="color: #f48840;"></a>
                                        <a href="ml-3" style="color: #f48840;">Edit Profile</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
