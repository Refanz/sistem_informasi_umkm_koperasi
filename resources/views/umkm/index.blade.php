@extends('layouts.main-umkm')

@section('container')

<!-- Section Sambutan -->
<section class="sambutan">
    <div class="gap-section">
        <div class="section-title">Sambutan Kepala Dinas</div>
        <div class="line-title"></div>
        <div class="row-item">
            <div class="sambutan-col1">
                <div>
                    <h3>Kepala Dinas Koperasi dan Usaha Mikro Kota Semarang</h3>
                    <img src="{{ asset('/img/img-umkm/kadis.jpg') }}" alt="foto kepala dinas">
                    <h3>Drs. AGUS WURYANTO, M.Si</h3>
                </div>
            </div>
            <div class="sambutan-col2">
                <h3>Assalamu'alaikum Wr. Wb.</h3>
                <p>Puji dan syukur kehadirat Allah SWT atas segala ridho-Nya, Dinas Koperasi dan Usaha Mikro menghadirkan tampilan baru pada website kami. Perkembangan teknologi informasi dan telekomunikasi telah membawa perubahan yang sangat mendasar terhadap kecepatan penyebaran informasi, sehingga sangat mudah dan cepat untuk diakses oleh masyarakat di belahan dunia manapun.
                </p>
                <p>Sebagai salah satu media informasi yang berisi potensi dan aktivitas Koperasi dan Usaha Mikro di Kota Semarang, website yang kami kembangkan memungkinkan para pihak yang memiliki kepentingan dalam memberikan kebijakan maupun para pihak yang memiliki kepentingan dalam menjalin bisnis dengan Koperasi dan Usaha Mikro di Kota Semarang dapat secara langsung berinteraksi.
                </p>
                <p>Harapan kami sederhana dengan media ini semoga Koperasi dan Usaha Mikro bisa mengikuti kemajuan teknologi informasi dan dapat berkompetisi, yang pada akhirnya Koperasi dan Usaha Mikro dapat tumbuh dan berkembang serta mampu mewujudkan sebagai pilar perekonomian di Kota Semarang khususnya dan seluruh Indonesia pada umumnya.
                </p>
                <h3>Wassalamu'alaikum Wr. Wb</h3>
            </div>
        </div>
    </div>
</section> <!-- End Section Sambutan -->

<!-- Section Videos -->
<section class="videos">
    <div class="gap-section">
        <div class="section-title">Video Kami</div>
        <div class="line-title"></div>
        <div class="row-item">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/eNIsmgNOZu4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Zf5N-KrBwTo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</section> <!-- End Section Videos -->

<!-- Section Link Web -->
<section class="link-web">
    <div class="gap-section">
        <div class="section-title">Tautan Situs Web</div>
        <div class="line-title"></div>
        <div class="row-item">
            <div class="link-web-col">
                <a target="_blank" href="https://silangitbumi.semarangkota.go.id/program/kegiatan-dinkop">
                    <h3>- Pelatihan UMKM -</h3>
                    <p>Sosialisasi dan Pelatihan untuk Anggota Gerai Kopimi dan Umum.</p>
                    </svg>
                </a>
            </div>

            <div class="link-web-col">
                <a target="_blank" href="https://silangitbumi.semarangkota.go.id/program/kredit-wibawa">
                    <h3>- Kredit Wibawa Online -</h3>
                    <p>Silahkan mendaftar <span class="bold">Gerai Kopimi</span> dan <span class="bold">SiLangit Bumi</span> terlebih dahulu.</p>
                </a>
            </div>

            <div class="link-web-col">
                <a target="_blank" href="https://koperasi.semarangkota.go.id/v2/publik/">
                    <h3>- Data Koperasi Online -</h3>
                    <p>Sistem Informasi Data Koperasi Kota Semarang (SIMDAKOP).</p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call To Action -->
<section class="cta" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url({{ asset('img/img-umkm/banner2.jpg') }});">
    <h1>Jika ada kendala, segera hubungi kami!</h1>
    <a href="/contact" class="primary-btn">kontak</a>
</section>

@endsection

