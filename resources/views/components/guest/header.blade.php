<header class="position-fixed w-100 d-flex align-items-center bg-light z-3">
    <div class="container py-0 border-0 d-flex align-items-center">
        <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center gap-8">
            <img src="{{ asset('logo/himsi.png') }}" height="45px" alt="Logo Himsi">
            <div class="bg-800" style="width: 1.6px; height: 35px;"></div>
            <div class="">
                <div class="fs-large fw-bold text-primary lh-1">HIMSI</div>
                <div class="fs-small lh-1 text-500">UBSI CIKARANG</div>
            </div>
        </a>
        <div class="w-100 d-flex align-items-center justify-content-end gap-16">
            <a href="" class="nav-link">Profil</a>
            <a href="" class="nav-link">Divisi</a>
            <a href="" class="nav-link">Kegiatan</a>
            <x-usable.button class="btn-md btn-accent">Masuk</x-usable.button>
        </d>
    </div>
</header>