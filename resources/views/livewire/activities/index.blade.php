<div>
    <section class="page-title">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">home</a>
            </li>
            <li>Activities</li>
        </ul>
    </section>

    <section class="projects-section-two">
        <div class="auto-container">
            <div class="sec-title centered">
                <span class="icon flaticon-telephone"></span>
                <h2>Working <span>Activities</span></h2>
                <hr>
            </div>

            <div class="mixitup-gallery">
                <div class="filter-list row clearfix">

                    @foreach ($activities as $activitie)
                        @php
                            $values = explode(',', $activitie->photo);
                        @endphp
                        @foreach ($values as $photo)
                            <div class="gallery-block-two mix all extra interior col-lg-3 col-md-3 col-lg-3 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="{{ $photo }}" data-fancybox="gallery" data-caption="">
                                            <img src="{{ $photo }}" alt="" style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #F19B33; padding: 1px;"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
