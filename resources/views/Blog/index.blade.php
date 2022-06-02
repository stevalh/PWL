@extends('layouts.template')
@section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel">
                @foreach($banners as $banner)
    
                <div class="item">
                    <img src={{ asset('storage/'.$banner->thumb) }} width= "370" height= "340" alt="">
                    <div class="item-content">
                        <div class="main-content">
                            <div class="meta-category">
                                <span>{{ $banner->category->name }}</span>
                            </div>
                            <a href="blog/{{ $banner->id }}">
                                <h4>{{ $banner->title }}</h4>
                            </a>
                            <ul class="post-info">

                                {{-- <li><a href="#">Admin</a></li> --}}
                                <li><a href="/about/{{ $banner->user->id }}">{{ $banner->user->name }}</a></li>
                                <li><a href="#">{{ $banner->created_at }}</a></li>
                                {{-- <li><a href="#">12 Comments</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>       
    @endforeach
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">


                            @foreach($posts as $post)
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                       <img src={{ asset('storage/'.$post->thumb) }} width= "370" height= "340" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>{{ $post->category->name }}</span>
                                        <a href="/blog/{{ $post->id }}">
                                            <h4>{{ $post->title }}</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="/about/{{ $post->user->id }}">{{ $post->user->name }}</a></li>
                                            <li><a href="#">{{ $post->created_at }}</a></li>
                                            {{-- <li><a href="#">12 Comments</a></li> --}}
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{ $posts->links() }}
                           
                            <div class="mb-5"></div>
                        </div>
                    </div>
                </div>
                
                {{-- //Sidebar --}}
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item search">
                                    <form id="search_form" name="gs" method="GET" action="#">
                                        <input type="text" name="q" class="searchText" placeholder="TYPE TO SEARCH..."
                                            autocomplete="on">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item recent-posts">
                                    <div class="sidebar-heading">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="post-details.html">
                                                    <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                                                    <span>May 31, 2020</span>
                                                </a></li>
                                            <li><a href="post-details.html">
                                                    <h5>Suspendisse et metus nec libero ultrices varius eget in risus
                                                    </h5>
                                                    <span>May 28, 2020</span>
                                                </a></li>
                                            <li><a href="post-details.html">
                                                    <h5>Swag hella echo park leggings, shaman cornhole ethical coloring
                                                    </h5>
                                                    <span>May 14, 2020</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item categories">
                                    <div class="sidebar-heading">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="#">- Website Coding</a></li>
                                            <li><a href="#">- Design</a></li>
                                            <li><a href="#">- Lifestyle</a></li>
                                            <li><a href="#">- Cooking</a></li>
                                        </ul>
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
