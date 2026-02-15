@extends('layout.guest')

@section('title')
Himpunan Mahasiswa Sistem Informasi - Cabang Cikarang
@endsection

@section('page_css')
<link rel="stylesheet" href="{{ asset('css/guest/index.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
@endsection

@section('content')
<!-- <div class="spinner-border text-primary" role="status">
  <span class="visually-hidden">Loading...</span>
</div> -->
<div id="heroSection" class="section">
    <div class="container">
        <div class="cl"></div>
        <div class="section-wrapper">
            <div class="text-wrapper">
                <div>
                    <x-usable.badge class="badge-lg badge-accent">HIMSI UBSI CIKARANG</x-usable.badge>
                </div>
                <div class="headline fs-5xlarge">
                    One Organization, One Family, One Goal, <span class="d-inline fs-5xlarge text-warning">Gold</span>.
                </div>
                <div class="description text-500">
                    Berkomitmen mencetak generasi unggul yang siap beradaptasi dengan transformasi digital melalui sinergi organisasi yang solid dan visi masa depan yang gemilang.
                </div>
            </div>
            <div class="cta d-flex align-items-center gap-16">
                <x-usable.button class="btn-lg btn-accent">Jelajahi</x-usable.button>
                <x-usable.button class="btn-lg btn-outline-accent">Daftar Anggota Baru</x-usable.button>
            </div>
        </div>
    </div>
</div>
<div id="overviewHimsi" class="section bg-100">
    <div class="container">
        <div class="section-wrapper flex-row">
            <div class="brand-logo">
                <img src="{{ asset('logo/himsi.png') }}" height="300px" alt="">
            </div>
            <div class="text-wrapper">
                <div class="">
                    <x-usable.badge class="badge-md badge-accent">OVERVIEW</x-usable.badge>
                </div>
                <div class="headline fs-2xlarge">
                    APA ITU HIMSI?
                </div>
                <div class="text-500">
                    Himsi atau Himpunan Mahasiswa Sistem Informasi merupakan wadah organisasi mahasiswa program studi Sistem Informasi Universitas Bina Sarana Informatika. Himsi didirikan dengan tujuan untuk mewadahi mahasiswa dalam berkontribusi, bertanggungjawab, dan berprestasi dibidang akademik maupun non akademik.
                </div>
                <div class="">
                    <x-usable.button class="btn-md btn-primary">Selengkapnya Tentang Himsi</x-usable.button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="divisi" class="section">
    <div class="container">
        <div class="section-wrapper">
            <div class="text-wrapper">
                <div class="">
                    <x-usable.badge class="badge-md badge-accent">OUR TEAM</x-usable.badge>
                </div>
                <div class="headline fs-2xlarge">SATU VISI, BERAGAM KONTRIBUSI.</div>
                <div class="text-500">
                    Kenali empat pilar penggerak di balik setiap inovasi dan kegiatan HIMSI Cikarang.
                </div>
            </div>
            <div class="card-wrapper w-100 d-flex align-items-start gap-16">
                <div class="card p-12 rounded-24 gap-8" style="max-width: 18rem;">
                    <div class="card-img">
                        <img src="{{ asset('images/DSC_1464.JPG') }}" class="ratio ratio-4x3 rounded-12 shadow-vsm" alt="Divisi Himsi">
                    </div>
                    <div class="d-flex flex-column gap-20">
                        <div class="card-title">
                            <div class="fs-regular fw-medium text-700">Kominfo</div>
                            <div class="fs-small fst-italic text-500 fw-light lh-1">Komunikasi dan Informasi</div>
                        </div>
                        <div class="d-flex align-items-start gap-8">
                            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                                <div class="fs-small text-700">4</div>
                                <div class="fs-thin text-500">Anggota</div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                                <div class="fs-small text-700">2</div>
                                <div class="fs-thin text-500">Program kerja</div>
                            </div>
                        </div>
                        <div class="">
                            <div class="fs-small text-700">Description</div>
                            <div class="fs-small text-500">Kominfo atau Komunikasi dan Informasi merupakan divisi yang bertugas untuk mengelola komunikasi.</div>
                        </div>
                        <x-usable.button class="btn-md btn-primary">Lihat Selengkapnya</x-usable.button>
                    </div>
                </div>
                <div class="card p-12 rounded-24 gap-8" style="max-width: 18rem;">
                    <div class="card-img">
                        <img src="{{ asset('images/DSC_1464.JPG') }}" class="ratio ratio-4x3 rounded-12 shadow-vsm" alt="Divisi Himsi">
                    </div>
                    <div class="d-flex flex-column gap-20">
                        <div class="card-title">
                            <div class="fs-regular fw-medium text-700">Kominfo</div>
                            <div class="fs-small fst-italic text-500 fw-light lh-1">Komunikasi dan Informasi</div>
                        </div>
                        <div class="d-flex align-items-start gap-8">
                            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                                <div class="fs-small text-700">4</div>
                                <div class="fs-thin text-500">Anggota</div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                                <div class="fs-small text-700">2</div>
                                <div class="fs-thin text-500">Program kerja</div>
                            </div>
                        </div>
                        <div class="">
                            <div class="fs-small text-700">Description</div>
                            <div class="fs-small text-500">Kominfo atau Komunikasi dan Informasi merupakan divisi yang bertugas untuk mengelola komunikasi.</div>
                        </div>
                        <x-usable.button class="btn-md btn-primary">Lihat Selengkapnya</x-usable.button>
                    </div>
                </div>
                <div class="card p-12 rounded-24 gap-8" style="max-width: 18rem;">
                    <div class="card-img">
                        <img src="{{ asset('images/DSC_1464.JPG') }}" class="ratio ratio-4x3 rounded-12 shadow-vsm" alt="Divisi Himsi">
                    </div>
                    <div class="d-flex flex-column gap-20">
                        <div class="card-title">
                            <div class="fs-regular fw-medium text-700">Kominfo</div>
                            <div class="fs-small fst-italic text-500 fw-light lh-1">Komunikasi dan Informasi</div>
                        </div>
                        <div class="d-flex align-items-start gap-8">
                            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                                <div class="fs-small text-700">4</div>
                                <div class="fs-thin text-500">Anggota</div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                                <div class="fs-small text-700">2</div>
                                <div class="fs-thin text-500">Program kerja</div>
                            </div>
                        </div>
                        <div class="">
                            <div class="fs-small text-700">Description</div>
                            <div class="fs-small text-500">Kominfo atau Komunikasi dan Informasi merupakan divisi yang bertugas untuk mengelola komunikasi.</div>
                        </div>
                        <x-usable.button class="btn-md btn-primary">Lihat Selengkapnya</x-usable.button>
                    </div>
                </div>
                <div class="card p-12 rounded-24 gap-8" style="max-width: 18rem;">
                    <div class="card-img">
                        <img src="{{ asset('images/DSC_1464.JPG') }}" class="ratio ratio-4x3 rounded-12 shadow-vsm" alt="Divisi Himsi">
                    </div>
                    <div class="d-flex flex-column gap-20">
                        <div class="card-title">
                            <div class="fs-regular fw-medium text-700">Kominfo</div>
                            <div class="fs-small fst-italic text-500 fw-light lh-1">Komunikasi dan Informasi</div>
                        </div>
                        <div class="d-flex align-items-start gap-8">
                            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                                <div class="fs-small text-700">4</div>
                                <div class="fs-thin text-500">Anggota</div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                                <div class="fs-small text-700">2</div>
                                <div class="fs-thin text-500">Program kerja</div>
                            </div>
                        </div>
                        <div class="">
                            <div class="fs-small text-700">Description</div>
                            <div class="fs-small text-500">Kominfo atau Komunikasi dan Informasi merupakan divisi yang bertugas untuk mengelola komunikasi.</div>
                        </div>
                        <x-usable.button class="btn-md btn-primary">Lihat Selengkapnya</x-usable.button>
                    </div>
                </div>
            </div>
            <div class="position-relative d-flex align-items-center justify-content-center rounded-24 overflow-hidden p-40">
                <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center gap-40">
                    <div class="d-flex flex-column align-items-center justify-content-center gap-24" style="max-width: 800px;">
                        <div class="headline fs-3xlarge text-50 lh-1">BADAN PENGURUS HARIAN</div>
                        <div class="text-300 text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolore, perferendis architecto eos modi porro laboriosam vero animi a quasi placeat fugiat eaque ex blanditiis totam laudantium, magni corporis repudiandae.
                        </div>
                    </div>
                    <x-usable.button class="btn-md btn-primary">Lihat Selengkapnya</x-usable.button>
                </div>
                <div class="bph-background position-absolute"></div>
            </div>
        </div>
    </div>
</div>
<div id="kegiatanHimsi" class="section">
    <div class="container">
        <div class="section-wrapper">
            <div class="text-wrapper">
                <div class="">
                    <x-usable.badge class="badge-md badge-accent">ACTION</x-usable.badge>
                </div>
                <div class="headline fs-2xlarge">
                    WUJUDKAN TUJUAN MELALUI AKSI.
                </div>
                <div class="text-500">
                    Melihat lebih dekat bagaimana setiap divisi bersinergi untuk mencapai target emas organisasi.
                </div>
            </div>
            <div class="card-wrapper w-100 d-flex align-items-start gap-16">
                <div class="card card-link p-12 rounded-24 gap-8" style="max-width: 18rem;">
                    <div class="card-img">
                        <img src="{{ asset('images/DSC_1464.JPG') }}" class="ratio ratio-4x3 rounded-12 shadow-vsm" alt="Divisi Himsi">
                    </div>
                    <div class="d-flex flex-column gap-12">
                        <div class="fs-regular fw-medium text-700">Anniversary Himsi 14 tahun</div>
                        <div class="fs-small text-500">Kominfo atau Komunikasi dan Informasi merupakan divisi yang bertugas untuk mengelola komunikasi.</div>
                        <x-usable.button class="btn-md btn-primary">Lihat Selengkapnya</x-usable.button>
                    </div>
                </div>
                <div class="card card-link p-12 rounded-24 gap-8" style="max-width: 18rem;">
                    <div class="card-img">
                        <img src="{{ asset('images/DSC_1464.JPG') }}" class="ratio ratio-4x3 rounded-12 shadow-vsm" alt="Divisi Himsi">
                    </div>
                    <div class="d-flex flex-column gap-12">
                        <div class="fs-regular fw-medium text-700">Anniversary Himsi 14 tahun</div>
                        <div class="fs-small text-500">Kominfo atau Komunikasi dan Informasi merupakan divisi yang bertugas untuk mengelola komunikasi.</div>
                        <x-usable.button class="btn-md btn-primary">Lihat Selengkapnya</x-usable.button>
                    </div>
                </div>
                <div class="card card-link p-12 rounded-24 gap-8" style="max-width: 18rem;">
                    <div class="card-img">
                        <img src="{{ asset('images/DSC_1464.JPG') }}" class="ratio ratio-4x3 rounded-12 shadow-vsm" alt="Divisi Himsi">
                    </div>
                    <div class="d-flex flex-column gap-12">
                        <div class="fs-regular fw-medium text-700">Anniversary Himsi 14 tahun</div>
                        <div class="fs-small text-500">Kominfo atau Komunikasi dan Informasi merupakan divisi yang bertugas untuk mengelola komunikasi.</div>
                        <x-usable.button class="btn-md btn-primary">Lihat Selengkapnya</x-usable.button>
                    </div>
                </div>
                <div class="card card-link p-12 rounded-24 gap-8" style="max-width: 18rem;">
                    <div class="card-img">
                        <img src="{{ asset('images/DSC_1464.JPG') }}" class="ratio ratio-4x3 rounded-12 shadow-vsm" alt="Divisi Himsi">
                    </div>
                    <div class="d-flex flex-column gap-12">
                        <div class="fs-regular fw-medium text-700">Anniversary Himsi 14 tahun</div>
                        <div class="fs-small text-500">Kominfo atau Komunikasi dan Informasi merupakan divisi yang bertugas untuk mengelola komunikasi.</div>
                        <x-usable.button class="btn-md btn-primary">Lihat Selengkapnya</x-usable.button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="quote" class="section bg-100">
    <div class="container">
        <div class="section-wrapper align-items-center justify-content-center">
            <div class="slider-quote d-flex flex-column justify-content-center align-items-center">
                <div class="content-slider d-flex flex-column justify-content-center align-items-center gap-24">
                    <img src="{{ asset('avatar/me with himsi sq.jpg') }}" alt="" class="rounded-circle" style="width:60px;aspect-ratio: 1/1;">
                    <div class="fs-2xlarge text-center fst-italic text-700" style="max-width: 800px;">
                        "Himsi UBSI Cikarang adalah rumah kedua bagi saya, tempat di mana saya belajar, berkembang, dan berkontribusi bersama teman-teman hebat."
                    </div>
                    <div class="fs-small fw-medium">Ahmad Maulana Zuhdi<span class="fw-regular">,</span> <span class="fs-small fw-regular text-500">Koordinator Kominfo</span></div>
                </div>
            </div>
            <div class="show-content w-100 d-flex align-items-center justify-content-between">
                <div class="year-wrapper">
                    <div class="animation-bar"></div>
                    <div class="year-text fw-bold">2023</div>
                </div>
                <div class="year-wrapper">
                    <div class="animation-bar"></div>
                    <div class="year-text fw-bold">2024</div>
                </div>
                <div class="year-wrapper">
                    <div class="animation-bar"></div>
                    <div class="year-text fw-bold">2025</div>
                </div>
                <div class="year-wrapper">
                    <div class="animation-bar"></div>
                    <div class="year-text fw-bold">2026</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="faq" class="section">
    <div class="container">

    </div>
</div>
@endsection

@section('page_js')
<script src="{{ asset('js/guest/index.js') }}"></script>
@endsection