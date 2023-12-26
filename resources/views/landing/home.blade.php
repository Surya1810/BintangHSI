@extends('landing.layout')

@section('title')
    Home
@endsection

@push('css')
@endpush

@section('content')
    <section>
        <!-- heroes -->
        <div class="bg-main">
            <div class="container h-100">
                <div class="row align-items-center h-75">
                    <div class="col-12 col-md-8">
                        <p class="mb-4"><span class="badge badge-secondary">Baru</span> Promo bergabung HSI</p>
                        <h1 class="d-none d-md-block display-3 mb-4" style="font-weight: 900">Ciptakan <span
                                style="color: #0195a5">10
                                Juta</span> <br> Agen
                            Pemasar</h1>

                        <h1 class="d-md-none display-1 mb-4" style="font-weight: 700">Ciptakan<br><span
                                style="color: #0195a5">10
                                Juta</span><br>Agen <br>
                            Pemasar</h1>
                        <p>Menciptakan 10 Juta Agen pemasar dibidang Ekonomi Kreatif (EKRAF) sebagai masa depan
                            bangsa.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pelajari HSI -->
        <div style="width: 100swh;height: 100svh">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="row d-flex justify-content-center gy-3">
                        <div class="col-lg-12 text-center px-5 mb-3">
                            <h1 class="display-3" style="font-weight: 700">Pelajari HSI</h1>
                            <p style="color: #0195a5">Anda dapat mempelajari apa itu HSI dimulai dari mengetahui VIsi
                                dan
                                Misi Perusahaan</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center">
                            <p><b>Visi</b></p>
                            <div class="card border-0 shadow-lg bg-hsi-secondary h-100">
                                <div class="card-body">
                                    <ul class="text-start fw-bold text-white">
                                        <li>Menghidupkan Kembali Ekonomi Kreatif.</li>
                                        <li>Ketahanan Pangan.</li>
                                        <li>Pemerataan ekonomi bagi seluruh mitra HSI.</li>
                                        <li>Proteksi GRATIS diata 20 s/d 400 juta dengan produk Syariah</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center">
                            <p><b>Misi</b></p>
                            <div class="card border-0 shadow-lg h-100">
                                <div class="card-body fw-bold">
                                    <p class="text-start">Menciptakan 10 Juta Agen pemasar dibidang Ekonomi Kreatif
                                        (EKRAF)
                                        sebagai masa depan
                                        bangsa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
