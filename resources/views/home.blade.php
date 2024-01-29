@extends('layouts.main')

@section('title')
    <title>Toba Vacation Destination | Home</title>
@endsection

{{-- Carousel --}}
@section('content')
    <div class="banner">
        <div class="owl-four owl-carousel" itemprop="image">
            <img src="{{ asset('images/page-banner.png') }}" alt="Image of Bannner">
            <img src="{{ asset('images/page-banner2.jpg') }}" alt="Image of Bannner">
            <img src="{{ asset('images/page-banner3.jpg') }}" alt="Image of Bannner">
        </div>
        <div class="container" itemprop="description">
            <h1>Selamat Datang di Toba Vacation Destination</h1>
            <h3>Bersama Kami Manjakan Mata di Toba</h3>
        </div>
        <div id="owl-four-nav" class="owl-nav"></div>
    </div>
@endsection

<!-- Banner Close -->
@section('heading')
    <div class="container">
        <h2>Tempat Populer</h2>
    </div>
@endsection

<!-- Popular courses End -->
@section('learn')
    <div class="container">
        <div class="courses">
            <div class="owl-one owl-carousel">


            <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                    <div class="img-wrap" itemprop="image"><img src="{{ asset('hotel/hotel-a3.jpg') }}"
                            alt="courses picture">
                    </div>
                    <a href="https://goo.gl/maps/YTE5qiTSGuyXwZ919" class="learn-desining-banner" itemprop="name">Nabasa
                        Hotel >>></a>
                    <div class="box-body" itemprop="description">
                        <p>hotel Nabasa merupakan hotel yang terletak di daerah toba tepatnya di pinggir danau. dikarenakan
                            tempatnya yang sejuk dan menarik hotel ini banyak di kunjungi oleh turis dan dengan hotel ini
                            para turis juga dapat memanjakan mata melihat danau</p>
                        <section itemprop="time">
                            <p><span>Lokasi:</span> Balige</p>
                            <p><span>Buka:</span> 24 Hour</p>
                        </section>
                    </div>
                </div>

                <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                    <div class="img-wrap" itemprop="image"><img src="{{ asset('kuliner/kuliner-a2.jpg') }}"
                            alt="courses picture">
                    </div>
                    <a href="https://goo.gl/maps/C8M1dzM2t7fGT4Bt5" class="learn-desining-banner" itemprop="name">Fly Over
                        >>></a>
                    <div class="box-body" itemprop="description">
                        <p>fly over merupakan tempat makan yang banyak menyediakan makanan makanan khas daerah batak
                            terutama toba rumah makan fly over juga memiliki tempat yang strategis dan dapat dikunjungi
                            turis dan masyarakat dengan mudah</p>
                        <section itemprop="time">
                            <p><span>Lokasi:</span> laguboti</p>
                            <p><span>Buka:</span> 8am-11am </p>
                        </section>
                    </div>
                </div>

                <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                    <div class="img-wrap" itemprop="image"><img src="{{ asset('images/course-a4.jpg') }}"
                            alt="courses picture">
                    </div>
                    <a href="https://goo.gl/maps/wbghfQ8mkAdYwhXY8" class="learn-desining-banner" itemprop="name">Pantai
                        Putih
                        Parbaba
                        >>></a>
                    <div class="box-body" itemprop="description">
                        <p>Lokasi wisata ini menawarkan aneka wahana permainan danau seperti, banana boat yang memuat
                            delapan
                            orang, jet ski, sepeda air, perahu dayung dan ban.Tarifnya sendiri bervariasi dengan durasi
                            tertentu</p>
                        <section itemprop="time">
                            <p><span>Lokasi:</span> Pangururan,Kabupaten Samosir</p>
                            <p><span>Buka:</span> 8am-6am </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--  --}}

<!-- Closed WhyUs section -->
@section('heading2')
    <div class="container">
        <h2>Album</h2>
    </div>
@endsection

@section('gallery')
    <div class="gallery-img-wrap">
        <a href="images/gallery-img1.jpg" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img1.jpg" alt="gallery-images">
        </a>
    </div>
    <div class="gallery-img-wrap">
        <a href="images/gallery-img2.png" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img2.png" alt="gallery-images">
        </a>
    </div>
    <div class="gallery-img-wrap">
        <a href="images/gallery-img3.png" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img3.png" alt="gallery-images">
        </a>
    </div>
    <div class="gallery-img-wrap">
        <a href="images/gallery-img4.jpg" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img4.jpg" alt="gallery-images">
        </a>
    </div>
    <div class="gallery-img-wrap">
        <a href="images/gallery-img5.jpg" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img5.jpg" alt="gallery-images">
        </a>
    </div>
    <div class="gallery-img-wrap">
        <a href="images/gallery-img6.png" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img6.png" alt="gallery-images">
        </a>
    </div>
    <div class="gallery-img-wrap">
        <a href="images/gallery-img7.png" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img7.png" alt="gallery-images">
        </a>
    </div>
    <div class="gallery-img-wrap">
        <a href="images/gallery-img8.png" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img8.png" alt="gallery-images">
        </a>
    </div>
    <div class="gallery-img-wrap">
        <a href="images/gallery-img9.png" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img9.png" alt="gallery-images">
        </a>
    </div>
    <div class="gallery-img-wrap">
        <a href="images/gallery-img10.png" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img10.png" alt="gallery-images">
        </a>
    </div>
    <div class="gallery-img-wrap">
        <a href="images/gallery-img11.png" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img11.png" alt="gallery-images">
        </a>
    </div>
    <div class="gallery-img-wrap">
        <a href="images/gallery-img12.png" data-lightbox="example-set"
            data-title="Click the right half of the image to move forward.">
            <img src="images/gallery-img12.png" alt="gallery-images">
        </a>
    </div>
@endsection


<!-- End of Events section -->
@section('heading3')
    <!-- <div class="container">
                                                                                                                                                            </div> -->
    <div class="container">
        <h4 class="article-subtitle">Contact Us</h4>
        <h2 class="head">Biografi Developer</h2>
        <div class="three owl-carousel owl-theme">
            <div class="customer-item" itemscope itemtype="http://schema.org/Rating">
                <div class="border">
                    <div class="customer">
                        <figure>
                            <img class="customer-img" src="images/customer-img1.jpg" alt="Person image">
                            <figcaption>
                                <span itemprop="author">F.Salmanso Pakpahan</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="customer-review">
                        <p itemprop="description">
                            "Mahasiswa D3 Teknologi | IT DEL"
                        </p>
                        <h3>Kota Tarutung</h3>
                        <li><a href="https://www.instagram.com/salmansopakpahan/?hl=en"><i class="fab fa-instagram"></i>
                                salmansopakpahan
                            </a></li>
                    </div>
                </div>
            </div>
            <div class="customer-item" itemscope itemtype="http://schema.org/Rating">
                <div class="border">
                    <div class="customer">
                        <figure>
                            <img class="customer-img" src="images/customer-img2.png" alt="Person image">
                            <figcaption>
                                <span itemprop="author">Jeremy F.M Pardede</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="customer-review">
                        <p itemprop="description">
                            "Mahasiswa D3 Teknologi | IT DEL"
                        </p>
                        <h3>Kota Balige</h3>
                        <li><a href="https://www.instagram.com/jeremy__pardede/"><i class="fab fa-instagram"></i>
                                jeremy__pardede</a></li>
                    </div>
                </div>
            </div>
            <div class="customer-item" itemscope itemtype="http://schema.org/Rating">
                <div class="border">
                    <div class="customer">
                        <figure>
                            <img class="customer-img" src="images/customer-img3.jpg" alt="Person image">
                            <figcaption>
                                <span itemprop="author">Andreas Arta P. Manik</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="customer-review">
                        <p itemprop="description">
                            "Mahasiswa D3 Teknologi | IT DEL"
                        </p>
                        <h3>Kota Binjai</h3>
                        <li><a href="https://www.instagram.com/andreas_arta12/"><i class="fab fa-instagram"></i>
                                andreas_arta12</a></li>
                    </div>
                </div>
            </div>
        </div>
    @endsection
