@extends('layouts.app')

@section('title', 'Beranda')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/guest/globals.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/guest/style.css') }}">
@endpush

@section('content')
    <div class="beranda-guest">

        <main class="dashboard-wrapper">

            {{-- Hero --}}
            <section class="hero-section" aria-labelledby="hero-title">

                <h1 class="text-wrapper-5" id="hero-title">
                    Reflektif
                </h1>

                <p class="p">
                    Ruang tenang untuk menulis, merefleksikan, dan berbagi jurnal.
                    Mulai langkah pertama merapikan pikiran Anda dalam kesunyian yang bermakna.
                </p>

                <div class="CTA-group">

                    <a class="primary-button" href="#">
                        <span class="text-wrapper-6">
                            Mulai Menulis
                        </span>
                    </a>

                    <a class="secondary-button" href="#public-garden">
                        <span class="text-wrapper-6">
                            Jelajahi Public Garden
                        </span>
                    </a>

                </div>

            </section>


            {{-- Divider --}}
            <img class="line" src="{{ asset('assets/guest/img/line.svg') }}" alt="" aria-hidden="true">


            {{-- Public Journal --}}
            <section class="recent-section" id="public-garden" aria-labelledby="recent-title">

                <div class="div-2">

                    <h2 class="text-wrapper-7" id="recent-title">
                        Jurnal Publik Terbaru
                    </h2>

                    <a class="text-wrapper-8" href="{{ route('garden.index') }}">
                        Lihat Semua
                    </a>

                </div>


                <div class="recent-grid">

                    {{-- Journal 1 --}}
                    <article class="journal-card">

                        <header class="div-2">

                            <div class="author-area">

                                <img class="img" src="{{ asset('assets/guest/img/rectangle.png') }}"
                                    alt="Foto profil Kirananda">

                                <span class="text-wrapper-9">
                                    Kirananda
                                </span>

                            </div>

                            <time class="text-wrapper-10" datetime="2026-09-25">
                                25 Sep 2026
                            </time>

                        </header>


                        <div class="card-body">

                            <h3 class="text-wrapper-11">
                                Membaca Filosofi Teras di Pagi Hari
                            </h3>

                            <p class="text-wrapper-12">
                                Konsep dikotomi kendali benar-benar memberikan ruang lega
                                di pikiran saya. Menyadari bahwa ekspektasi dosen atau nilai
                                ujian berada di luar kendali langsung saya membebaskan saya
                                untuk fokus pada apa yang bisa saya usahakan.
                            </p>

                        </div>


                        <div class="tags" aria-label="Tag jurnal">

                            <span class="tag">
                                <span class="text-wrapper-13">
                                    #stoikisme
                                </span>
                            </span>

                            <span class="tag">
                                <span class="text-wrapper-13">
                                    #buku
                                </span>
                            </span>

                            <span class="tag">
                                <span class="text-wrapper-13">
                                    #pagi
                                </span>
                            </span>

                        </div>

                    </article>


                    {{-- Journal 2 --}}
                    <article class="journal-card">

                        <header class="div-2">

                            <div class="author-area">

                                <img class="img" src="{{ asset('assets/guest/img/rectangle-2.png') }}"
                                    alt="Foto profil Nisa Ramadhani">

                                <span class="text-wrapper-9">
                                    Nisa Ramadhani
                                </span>

                            </div>

                            <time class="text-wrapper-10" datetime="2026-09-24">
                                24 Sep 2026
                            </time>

                        </header>


                        <div class="card-body">

                            <h3 class="text-wrapper-11">
                                Menemukan Kedamaian dalam Rutinitas Menyeduh Kopi
                            </h3>

                            <p class="text-wrapper-12">
                                Ada meditasi tersendiri saat memperhatikan air panas
                                mengalir perlahan di atas bubuk kopi. Aroma yang menguar,
                                tetesan yang lambat, mengajari saya arti dari hadir
                                seutuhnya di momen sekarang ini.
                            </p>

                        </div>


                        <div class="tags" aria-label="Tag jurnal">

                            <span class="tag">
                                <span class="text-wrapper-13">
                                    #mindfulness
                                </span>
                            </span>

                            <span class="tag">
                                <span class="text-wrapper-13">
                                    #kopi
                                </span>
                            </span>

                            <span class="tag">
                                <span class="text-wrapper-13">
                                    #hobi
                                </span>
                            </span>

                        </div>

                    </article>


                    {{-- Journal 3 --}}
                    <article class="journal-card">

                        <header class="div-2">

                            <div class="author-area">

                                <img class="img" src="{{ asset('assets/guest/img/image.png') }}"
                                    alt="Foto profil Albertus Pandu W.">

                                <span class="text-wrapper-9">
                                    Albertus Pandu W.
                                </span>

                            </div>

                            <time class="text-wrapper-10" datetime="2026-09-22">
                                22 Sep 2026
                            </time>

                        </header>


                        <div class="card-body">

                            <h3 class="text-wrapper-11">
                                Satu Tahun Belajar Desain UI/UX secara Otodidak
                            </h3>

                            <p class="text-wrapper-12">
                                Bermula dari coretan iseng, lalu memberanikan diri membuka
                                Figma setiap malam setelah pulang kerja. Konsistensi kecil
                                30 menit sehari ternyata menghasilkan portofolio pertama saya.
                            </p>

                        </div>


                        <div class="tags" aria-label="Tag jurnal">

                            <span class="tag">
                                <span class="text-wrapper-13">
                                    #desain
                                </span>
                            </span>

                            <span class="tag">
                                <span class="text-wrapper-13">
                                    #otodidak
                                </span>
                            </span>

                            <span class="tag">
                                <span class="text-wrapper-13">
                                    #karir
                                </span>
                            </span>

                        </div>

                    </article>

                </div>

            </section>


            {{-- CTA Footer Banner --}}
            <aside class="footer-banner" aria-labelledby="footer-title">

                <p class="text-wrapper-14" id="footer-title">
                    Bergabung dengan komunitas penulis reflektif
                </p>

                <p class="text-wrapper-15">
                    Tulis jurnal harian secara privat atau bagikan hangat
                    di Public Garden secara gratis.
                </p>

            </aside>

        </main>

    </div>
@endsection
