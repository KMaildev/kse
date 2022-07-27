<div>
    <section class="page-title">
        <div class="content" style="background-image: url({{ asset('data/contact_bg.jpeg') }})">
            <div class="auto-container">
                <h1>Contact Us</h1>
            </div>
        </div>
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">home</a>
            </li>
            <li>Contact Us</li>
        </ul>
    </section>

    <section class="contact-page-section style-two">
        <div class="image-layer" style="background-image:url({{ asset('data/contact_bg1.jpeg') }})"></div>
        <div class="auto-container">
            <div class="title-box">
                <h2>Have Some Questions?</h2>
                <div class="text">
                    Thank you for your intrest in our services. Please filllout the form bellow or or
                    email us at <br> given id and we will get back to you promptly regarding your request.
                </div>
            </div>

            <div class="lower-section">
                <div class="row clearfix">

                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2>
                                Solar Panel
                                <br> Battery
                                <br> Inventor
                            </h2>
                            <div class="text">
                                Mobile Tower Post
                                Construction and M&E tasks with our utmost capacity and zealous dedication since 2009.
                            </div>
                            <div class="button-box">
                                <a class="btn-style-two theme-btn" href="{{ route('about') }}">
                                    <span class="txt">
                                        More About Us
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <h3>
                                    Interested in discussing?
                                </h3>
                                <div class="text">
                                    Alternatively, you may contact us by filling up the contact form. Our team will
                                    response you shortly.
                                </div>
                            </div>

                            <div class="default-form contact-form">
                                <form wire:submit.prevent="storeContact">
                                    <div class="form-group">
                                        <input type="text" wire:model="name" class="form-control" placeholder="Name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="text" wire:model="email" class="form-control"
                                            placeholder="Email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="text" wire:model="phone" class="form-control"
                                            placeholder="Phone">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="text" wire:model="subject" class="form-control"
                                            placeholder="Subject">
                                        @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="text" wire:model="message" class="form-control"
                                            placeholder="Message">
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group text-center">
                                        <button type="submit" class="theme-btn btn-style-four">
                                            <span class="txt">contact us now</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <span class="icon flaticon-maps-and-flags"></span>
                        <div class="text">
                            Pawsanhmwe Street, Thuwunna. Yangon, Myanmar
                        </div>
                        <br>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <span class="icon flaticon-email-3"></span>
                        <div class="text">
                            <a href="mailto:info@kaungsolar-kse.com">
                                info@kaungsolar-kse.com
                            </a>
                            <a href="mailto:service@kaungsolar-kse.com">
                                service@kaungsolar-kse.com
                            </a>
                            <a href="mailto:sale@kaungsolar-kse.com">
                                sale@kaungsolar-kse.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <span class="icon flaticon-telephone"></span>
                        <div class="text">
                            <a href="tel:+95 9 44259 2265">
                                +95 9 44259 2265
                            </a>
                            <br>
                            <a href="tel:+95 9 457 778696">
                                +95 9 457 778696
                            </a>
                        </div>
                        <br>
                    </div>
                </div>

            </div>

            <!-- Map Boxed -->
            <div class="map-boxed">
                <div class="map-outer">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.1597738051314!2d96.20272491498389!3d16.818428023390705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed47e80a120d%3A0x5433f71ef0868822!2sKaung%20Solar%20Energy!5e0!3m2!1sen!2smm!4v1658924668699!5m2!1sen!2smm"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </section>
</div>
