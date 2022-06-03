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
                       @foreach($posts as $post)

                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('storage/'.$post->thumb) }}" alt="">
                                </div>
                                <div class="down-content">

                                    <div class="row">
                                        <div class="col-lg-10">
                                            <ul class="post-info">
                                                <a href="/searchcate/{{ $post->category->id }}"><span>{{ $post->category->name }}</span></a>
                                    <a href="/blog/{{ $post->id }}">
                                        <h4>{{ $post->title }}</h4>
                                    </a>
                                                <li><a href="/about/{{ $post->user->id }}">{{ $post->user->name }}</a></li>
                                                <li><a href="#">{{ $post->created_at }}</a></li>
                                                {{-- <li><a href="#">12 Comments</a></li> --}}
                                            </ul>
                                        </div>

                                        @if(Auth::check())
                                            @if(auth()->user()->id == $user->id)
                                        <div class="col-lg-2">
                                            <ul class="social-icons mt-5">
                                                <li><a href="/deletepost/{{ $post->id }}"><i class="fa fa-lg fa-trash" style="color: red"></i></a></li>
                                            </ul>
                                        </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                    {{ $posts->links() }}
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
                                <div class="row mt-3">
                                    <div class="col-2 col-lg-3"></div>
                                    <div class="col-8 col-lg-6">
                                        <img src="/storage/{{ $user->image }}" class="img-fluid" alt="...">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $user->name }}</h5> <!-- Nama -->
                                    <p class="card-text">Email: {{ $user->email }}</p> <!-- Email -->
                                    @if(Auth::check())
                                        @if(auth()->user()->id == $user->id)
                                    <div class="mt-2">
                                        <a href="/profile" class="card-link fa fa-cogs" style="color: #f48840;"></a>
                                        <a href="/profile" style="color: #f48840;">Edit Profile</a>
                                    </div>
                                        @endif
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
