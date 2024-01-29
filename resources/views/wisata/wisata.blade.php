@extends('layouts.main')

@section('title')
    <title>Toba Vacation Destination | Jenis Wisata</title>
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

<!-- Banner Close Wisata -->
@section('wisata')
    <div class="container">
        <div id="filters" class="button-group">
            {{-- <button class="button" data-filter="*">all</button> --}}
            <button class="button" data-filter=".alam">Wisata Alam</button>
            <button class="button" data-filter=".rohani" id="alam">Wisata Rohani</button>
            <button class="button" data-filter=".budaya">Wisata Budaya</button>
            <button class="button" data-filter=".olahraga">Wisata Olahraga</button>
            <button class="button" data-filter=".pendidikan">Wisata Pendidikan</button>
        </div>

        <div class="grid" id="cGrid">
            <!-- Wisata Alam -->
            <div class="grid-item alam" data-category="alam">
                {{-- <h2 class="d-flex mx-2">
                    <a href="{{ route('alam.create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i>Tambah Pengajuan</a>
                </h2> --}}
                <div class="img-wrap">
                    <img src="images/course-a1.jpg" alt="courses picture">
                </div>
                <a href="https://goo.gl/maps/byRsr1qoMYEbrqff6" class="learn-desining-banner-course">Bukit Tarabunga lalala >>></a>
                <div class="box-body">
                    <p>Dari penatapan ini, pengunjung dapat melihat pemandangan Danau Toba yang begitu indah dan
                        menyegarkan pikiran.Wisata ini cocok untuk bersama keluarga.Bukit Tarabunga memang kaya
                        akan spot foto menarik</p>
                    <section>
                        <p><span>Lokasi:</span> Balige, Toba Samosir</p>
                        <p><span>Buka:</span> 24 Jam </p>
                        
                    </section>
                    {{-- <a href="#" class="justify content-center mb-5" font-size="600px">Edit</a> --}}
                    {{-- <div class="d-flex justify-content-center">
                        <a href="" class="btn btn-sm btn-info shadow mx-1">Edit</a>
                        <form class="mx-1" onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div> --}}
                </div>
            </div>

            {{-- <div class="grid-item alam" data-category="alam">
                <div class="img-wrap">
                    <img src="images/course-a2.jpg" alt="courses picture">
                </div>
                <a href="https://goo.gl/maps/PqqCic4FdiRm4eWF8" class="learn-desining-banner-course">Pantai Bul-Bul >>></a>
                <div class="box-body">
                    <p>Pantai Bulbul merupakan pantai berair tawar yang berada dipinggiran Danau Toba serta
                        memiliki pasir putih yang bersih dan landai. Bukan hanya itu, Pantai Bulbul merupakan
                        ikon yang dapat menunjukkan keindahan akan pemandangan perbukitan</p>
                    <section>
                        <p><span>Lokasi:</span> Desa Lumban Bul-Bul, Kecamatan Balige</p>
                        <p><span>Buka:</span> 6am-12am m</p>

                    </section>
                </div>
            </div>

            <div class="grid-item alam" data-category="alam">
                <div class="img-wrap">
                    <img src="images/course-a3.jpg" alt="courses picture">
                </div>
                <a href="https://goo.gl/maps/bd5PFhSUsWtGVaTp9" class="learn-desining-banner-course">Pantai Meat >>></a>
                <div class="box-body">
                    <p>pantai Meat merupakan pantai lembah yang dikelilingi hamparan sawah yang luas dan indah.
                        Pantai Meat adalah salah teluk danau yang memiliki air yang sangat jernih dimana
                        pengunjung atau wisatawan yang gemar berenang dan menyelam.
                    <section>
                        <p><span>Lokasi:</span> Lintong Nihuta,Kecamatan Tampahan</p>
                        <p><span>Buka:</span> 6am-12am </p>
                    </section>
                </div>
            </div>

            <div class="grid-item alam" data-category="alam">
                <div class="img-wrap">
                    <img src="images/course-a4.jpg" alt="courses picture">
                </div>
                <a href="https://goo.gl/maps/wbghfQ8mkAdYwhXY8" class="learn-desining-banner-course">Pantai Putih Parbaba
                    >>></a>
                <div class="box-body">
                    <p>Lokasi wisata ini menawarkan aneka wahana permainan danau seperti, banana boat yang memuat delapan
                        orang, jet ski, sepeda air, perahu dayung dan ban.Tarifnya sendiri bervariasi dengan durasi
                        tertentu
                    <section>
                        <p><span>Lokasi:</span> Pangururan,Kabupaten Samosir</p>
                        <p><span>Buka:</span> 6am-12am </p>
                    </section>
                </div>
            </div> --}}

            <!-- Wisata Rohani -->
            <div class="grid-item rohani" data-category="rohani">
                {{-- <h2 class="d-flex mx-2">
                    <a href="{{ route('wisata.create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i>Tambah Pengajuan</a>
                </h2> --}}
                <div class="img-wrap">
                    <img src="images/course-r1.jpg" alt="courses picture">
                </div>
                <a href="https://www.google.com/maps/place/Bukit+Sibea-Bea/@2.5507758,98.6732231,19.04z/data=!4m5!3m4!1s0x3031db06803ec9f5:0xc95cb1fb76492ad6!8m2!3d2.5506701!4d98.6735887?hl=id"
                    class="learn-desining-banner-course"> Bukit Sibea Bea >>></a>
                <div class="box-body">
                    <p>Bukit Sibea-bea merupakan kawasan wisata bukit yang ditata modern, sangat khas
                        dengan jalannya yang berliku-liku tetapi nyaman untuk dilintasi dan hadirnya sebuah
                        patung Yesus di puncak bukit</p>
                    <section>
                        <p><span>Lokasi:</span> Desa Partungko Naginjang, Kecamatan Harian Boho, Kabupaten
                            Samosir</p>
                        <p><span>Buka:</span> 6am-12am </p>

                    </section>
                </div>
            </div>

            <div class="grid-item rohani" data-category="rohani">
                <div class="img-wrap">
                    <img src="images/course-r2.jpg" alt="courses picture">
                </div>
                <a href="https://www.google.com/maps/place/Salib+Kasih+Siatas+Barita,+Tarutung/@2.0136817,99.0025724,18z/data=!4m9!1m2!2m1!1ssalib+kasih!3m5!1s0x302e6e25111ed67f:0xe4b3ef0bd51c93d8!8m2!3d2.0136817!4d99.0036667!15sCgtzYWxpYiBrYXNpaFoNIgtzYWxpYiBrYXNpaJIBEnRvdXJpc3RfYXR0cmFjdGlvbg?hl=id"
                    class="learn-desining-banner-course">Salib Kasih Tarutung >>></a>
                <div class="box-body">
                    <p>Salib Kasih adalah sebuah tempat wisata rohani yang dibuat untuk mengenang jasa
                        missionaris agama Kristen yang berasal dari Jerman Ingwer Ludwig Nommensen yang memulai
                        misinya di tanah Batak.</p>
                    <section>
                        <p><span>Lokasi:</span> Desa Situngkir, Simorangkir Julu, Kota Tarutung</p>
                        <p><span>Buka:</span> 6am-12am</p>
                    </section>
                </div>
            </div>

            <div class="grid-item rohani" data-category="rohani">
                <div class="img-wrap">
                    <img src="images/course-r3.jpg" alt="courses picture">
                </div>
                <a href="https://www.google.com/maps/search/wisata+iman+sidikalang/@2.7321752,98.3793953,17z/data=!3m1!4b1?hl=id"
                    class="learn-desining-banner-course">Taman Wisata Iman >>></a>
                <div class="box-body">
                    <p>Taman Wisata Iman Sitinjoatau biasa disingkat TWI adalah salah satu tempat wisata rohani
                        di Kabupaten Dairi. Di tempat wisata ini, semua rumah ibadah 6 agama di Indonesia ada di
                        tempat ini</p>
                    <section>
                        <p><span>Lokasi:</span> Desa Sitinjo, Kecamatan Sitinjo, Kabupaten Dairi,</p>
                        <p><span>Buka:</span> 6am-6:30pm</p>
                    </section>
                </div>
            </div>


            <!-- Wisata Budaya -->
            <div class="grid-item budaya" data-category="budaya">
                <div class="img-wrap">
                    <img src="images/course-b1.jpg" alt="courses picture">
                </div>
                <a href="https://goo.gl/maps/2T1r7UWzqms2j1R56" class="learn-desining-banner-course">Makam Guru Tatea
                    >>></a>
                <div class="box-body">
                    <p>Pusuk Buhit dianggap sebagai tempat asal muasal seluruh Suku Batak. Dalam
                        perkembangannya, nenek moyang Suku Batak menyebar ke delapan penjuru mata angin.
                    </p>
                    <section>
                        <p><span>Lokasi: </span>Desa Limbong-Sagala, Kecamatan Sianjur Mula-mula, Kabupaten
                            Samosir</p>
                        <p><span>Buka:</span> Terbuka Untuk Umum</p>

                    </section>
                </div>
            </div>

            <div class="grid-item budaya" data-category="budaya">
                <div class="img-wrap">
                    <img src="images/course-b2.jpg" alt="courses picture">
                </div>
                <a href="https://www.google.com/maps/place/Makam+Sisingamangaraja+XII/@2.3307778,99.0472416,17z/data=!3m1!4b1!4m5!3m4!1s0x302e04f319f283cf:0x82e9dddeb04e28cc!8m2!3d2.3307724!4d99.0494303?hl=id"
                    class="learn-desining-banner-course">Makam Sisingamangaraja</a>
                <div class="box-body">
                    <p>Raja Sisingamangaraja XII gugur pada 17 Juni 1907 di Kabupaten Dairi.
                        Sudah 112 tahun pahlawan nasional dari Tanah Batak itu gugur. Setiap tahunnya
                        hari bersejarah itu diperingati dengan ziarah.</p>
                    <section>
                        <p><span>Lokasi:</span> Jalan Pagar Batu, Kecamatan Balige, Kabupaten Toba Samosir</p>
                        <p><span>Buka:</span> 24 Jam</p>
                    </section>
                </div>
            </div>

            <div class="grid-item budaya" data-category="budaya">
                <div class="img-wrap">
                    <img src="images/course-b3.jpg" alt="courses picture">
                </div>
                <a href="https://goo.gl/maps/qzLnfWGjDwLiU4pz9" class="learn-desining-banner-course">Pasar Balige >>></a>
                <div class="box-body">
                    <p>Pasar Balige atau biasa disebut Onan Balige memiliki enam balairung atau bangsal dengan desain atap
                        dan ukiran khas rumah adat Batak.Anda dapat Belanja untuk membeli beberapa buah tangan.</p>
                    <section>
                        <p><span>Lokasi:</span> 4Jl. Sm Raja, Napitupulu Bagasan, Kec. Balige, Toba, Sumatera Utara</p>
                        <p><span>Buka:</span> 8am-6pm </p>
                    </section>
                </div>
            </div>

            <div class="grid-item budaya" data-category="budaya">
                <div class="img-wrap">
                    <img src="images/course-b4.jpg" alt="courses picture">
                </div>
                <a href="https://goo.gl/maps/Yhqv29pK385F3SpA6" class="learn-desining-banner-course">Monumen Sonakmalela >>
                </a>
                <div class="box-body">
                    <p>Jika anda bekunjung ke tempat ini maka anda dapat mengetahui sejarah marga Sonak Malele yang ada di
                        Balige dan Sonak Malela adalah seorang tokoh dalam marga Batak dari sub-suku Toba.</p>
                    <section>
                        <p><span>Lokasi : Napitupulu Bagasan, Balige</span>,Kabupaten Toba Samosir</p>
                        <p><span>Buka :</span> 08.00-17.00 </p>
                    </section>
                </div>
            </div>

            <!-- Wisata Olahraga -->
            <div class="grid-item olahraga" data-category="olahraga">
                <div class="img-wrap">
                    <img src="images/course-o1.jpg" alt="courses picture">
                </div>
                <a href="https://goo.gl/maps/66hscd1SWm5uuc9A6" class="learn-desining-banner-course">Kolam Renang >>></a>
                <div class="box-body">
                    <p>Kolam Berenang TB Silalahi Center merupapakan kolam renang yang sering dikunjungi wisatawan tidak hanya untuk berolahraga di air, namun kolam ini banyak dikunjungi untuk bermain di dalam air dan bersenang senang</p>
                    <section>
                        <p><span>Lokasi:</span> Balige</p>
                        <p><span>Buka:</span> 10.00-17.00 </p>
                    </section>
                </div>
            </div>

            <!-- Wisata Pendidikan -->
            <div class="grid-item pendidikan" data-category="pendidikan">
                <div class="img-wrap">
                    <img src="images/course-p1.jpg" alt="courses picture">
                </div>
                <a href="https://www.google.co.id/maps/place/Museum+Batak+Tb+Silalahi+Center/@2.3332099,99.0462281,17z/data=!3m1!4b1!4m5!3m4!1s0x30314bcb41946ac1:0xb21059a51abb5794!8m2!3d2.3332045!4d99.0484168"
                    class="learn-desining-banner-course">TB.Silalahi Center >>></a>
                <div class="box-body">
                    <p>Museum Pribadi TB. Silalahi atau yang diberi nama Museum Jejak Langkah dan Sejarah TB.
                        Silalahi yang dibangun sebagai wadah untuk memotivasi generasi muda untuk terus meraih
                        cita-cita.</p>
                    <section>
                        <p><span>Lokasi : Jl. Dr. Term Silalahi No.88</span>,Silalahi Pagar Batu,Balige</p>
                        <p><span>Buka :</span> 08.00-17.00 </p>
                    </section>
                </div>
            </div>

            <div class="grid-item pendidikan" data-category="pendidikan">
                <div class="img-wrap">
                    <img src="images/course-p2.jpg" alt="courses picture">
                </div>
                <a href="https://goo.gl/maps/Cq2A6zU6fj2jNT837" class="learn-desining-banner-course">Tugu D.I Panjaitan
                    >>></a>
                <div class="box-body">
                    <p>Tugu DI. Panjaitan. Adalah Pahlawan Indonesia Jenderal TNI Anumerta Donald Isaac Panjaiatan). Tugu
                        D.I Panjaitan ini pahlawan revolusi putra asli dari
                        Toba Samosir. </p>
                    <section>
                        <p><span>Lokasi:</span> Balige,Tobasa,Kabupaten Toba Samosir,Sumatera Utara</p>
                        <p><span>Buka:</span> 24 Jam</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
