<div>
    <section class="page-title">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">home</a>
            </li>
            <li>Latest News</li>
        </ul>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-classic">
                        @foreach ($news as $new)
                            <div class="news-block-four">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="{{ route('new_detail', ['id' => $new->id]) }}">
                                            <img src="{{ $new->photo }}" alt="" /></a>
                                        <div class="post-date">
                                            {{ $new->upload_date ?? '' }}
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li>
                                                <span class="icon flaticon-email"></span>
                                                {{ $new->author ?? '' }}
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="{{ route('new_detail', ['id' => $new->id]) }}">
                                                {{ $new->title ?? '' }}
                                            </a>
                                        </h5>
                                        <div class="text">
                                            {{ Str::limit($new->description, 150) }}
                                        </div>
                                        <a href="{{ route('new_detail', ['id' => $new->id]) }}"
                                            class="more-detail theme-btn">Details
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Categories Widget -->
                        @include('layouts.shared.useful_link')
                        <!-- Subscribe Widget -->
                        <div class="sidebar-widget subscribe-widget">
                            <h5>
                                WE WOULD LIKE TO HEAR FROM YOU !
                            </h5>
                            <div class="email-form">
                                <center>
                                    <div class="form-group">
                                        <a href="{{ route('contact') }}" class="theme-btn btn-style-one">
                                            <span class="txt">Contact Now</span>
                                        </a>
                                    </div>
                                </center>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>
</div>
