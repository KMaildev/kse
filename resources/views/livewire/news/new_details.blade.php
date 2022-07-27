<div>
    <section class="page-title">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">home</a>
            </li>
            <li>Detail</li>
            <li>
                {{ $new->title ?? '' }}
            </li>
        </ul>
    </section>

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="inner-box">
                            <ul class="social-box">
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                        class="fa fa-facebook-f"></a>
                                </li>
                                <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.google.com/" class="fa fa-google"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                <li><a href="https://www.pinterest.com/" class="fa fa-pinterest-p"></a></li>
                                <li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
                            </ul>
                            <div class="image">
                                <img src="{{ $new->photo ?? '' }}" alt="" />
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>
                                        <span class="icon fa fa-user"></span>
                                        {{ $new->author ?? '' }}
                                    </li>
                                    <li>
                                        <span class="icon fa fa-calendar"></span>
                                        {{ $new->upload_date ?? '' }}
                                    </li>
                                </ul>
                                <h4>
                                    {{ $new->title ?? '' }}
                                </h4>
                                <p>
                                    {{ $new->description ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <!-- Post Widget -->
                        <div class="sidebar-widget post-widget">
                            <!-- Sidebar Title -->
                            <div class="title-box">
                                <h4>Recent Posts</h4>
                            </div>
                            <div class="widget-content">
                                @foreach ($recent_news as $recent_new)
                                    <div class="post">
                                        <div class="thumb">
                                            <a href="{{ route('new_detail', ['id' => $recent_new->id]) }}">
                                                <img src="{{ $recent_new->photo ?? '' }}" alt="">
                                            </a>
                                        </div>
                                        <h6>
                                            <a href="{{ route('new_detail', ['id' => $recent_new->id]) }}">
                                                {{ $recent_new->title ?? '' }}
                                            </a>
                                        </h6>
                                        <div class="post-date">
                                            {{ $recent_new->upload_date ?? '' }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @include('layouts.shared.useful_link')

                    </aside>
                </div>

            </div>
        </div>
    </div>
</div>
