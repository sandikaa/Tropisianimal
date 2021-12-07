@extends('layout.main')

@section('container')
<div id="home">
    {{-- Tentang --}}
    <div id="bagian-tentang-home" class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-6 isi">
                <h6 class="fw-bold text-success">Tentang</h6>
                <h2 class="fw-bolder display-4 text-capitalize">membangun <br>komunitas hewan</h2>
                <p class="fw-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, laboriosam molestias est aperiam ullam animi illo! Illo quod distinctio dolore eveniet quae officiis, quos repellat!</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quas neque at nesciunt dolorem adipisci nemo accusamus, natus amet sunt asperiores temporibus dicta et ab alias unde rerum iste veritatis fugit blanditiis quidem obcaecati itaque quaerat! Explicabo, soluta? Officia, assumenda?</p>
                <button class="btn" style="background-color: green; padding: 10px; color: white;">baca selengkapnya <img src="aset/panah.svg" alt="arah-tombol"></button>
            </div>

            <div class="col-6 gambar">
                <img src="aset/x1/gajah-1.png" alt="gajah">
                <img src="aset/x1/komodo.png" alt="komodo">
                <img src="aset/x1/buaya.png" alt="buaya">
            </div>
        </div>
    </div>

    {{-- 4 kartu --}}
    <div id="bagian-pawprint-home">
        <div class="background-cover"></div>

        <div class="pawprint-judul container" style="padding-top: 50px;">
            <h1 class="fw-bold display-4 text-capitalize text-light">
                kami membawa anda <br>untuk mengetahui lebih dalam
            </h1>
        </div>

        <div class="pawprint-isi container d-flex" style="padding-top: 20px;">
            {{-- 1 --}}
            <div class="pawprint">
                <img src="aset/pawprint.svg" id="paw" alt="paw">
                <h5 class="fw-bold">Lorem ipsum dolor sit amet.</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nihil eveniet ea velit esse at?</p>
            </div>
            {{-- 2 --}}
            <div class="pawprint">
                <img src="aset/pawprint.svg" id="paw" alt="paw">
                <h5 class="fw-bold">Lorem ipsum dolor sit amet.</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nihil eveniet ea velit esse at?</p>
            </div>
            {{-- 3 --}}
            <div class="pawprint">
                <img src="aset/pawprint.svg" id="paw" alt="paw">
                <h5 class="fw-bold">Lorem ipsum dolor sit amet.</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nihil eveniet ea velit esse at?</p>
            </div>
            {{-- 4 --}}
            <div class="pawprint">
                <img src="aset/pawprint.svg" id="paw" alt="paw">
                <h5 class="fw-bold">Lorem ipsum dolor sit amet.</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nihil eveniet ea velit esse at?</p>
            </div>
        </div>
    </div>

    {{-- Berita --}}
    <div id="bagian-berita-home">
        <div class="container berita-judul">
            <h6 class="fw-bold text-success">Berita</h6>
            <h2 class="fw-bolder display-4 text-capitalize">baca berita terbaru kami <br>dalam tropisianimal</h2>
        </div>
        <div class="container berita-isi">
            {{-- 1-3 --}}
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="aset/x1/harimau.png" class="card-img-top" alt="harimau">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-capitalize">apa kabar kebun binatang <br>saat wabah covid 19?</h5>
                        <p class="card-text text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, facere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="aset/x1/burung-2.png" class="card-img-top" alt="burung">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-capitalize">anugerah dari hutan indonesia</h5>
                        <p class="card-text text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, facere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="aset/x1/badak.png" class="card-img-top" alt="badak">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-capitalize">10 hewan herbivora yang berbahaya</h5>
                        <p class="card-text text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, facere.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 4-6 --}}
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="aset/x1/harimau-2.png" class="card-img-top" alt="harimau_putih" height="251.883px">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-capitalize">4 penyakit yang ditularkan hewan ke manusia</h5>
                        <p class="card-text text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, facere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="aset/x1/penyu.png" class="card-img-top" alt="penyu">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-capitalize">terumbu karang: pengertian, jenis, sebaran, dan masalah</h5>
                        <p class="card-text text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, facere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="aset/x1/kancil.png" class="card-img-top" alt="kancil">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-capitalize">ternyata, tanduk rusa berasal dari sel kanker tulang</h5>
                        <p class="card-text text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, facere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Galeri --}}
    <div id="bagian-galeri-home">
        <div class="container galeri-judul">
            <h6 class="fw-bold text-success">Galeri</h6>
            <h2 class="fw-bolder display-4 text-capitalize">lihat lebih banyak hewan tropis <br>pada galeri kami</h2>
        </div>

        <div class="galeri-gambar d-flex">
            <div class="wadah">
                <img src="aset/x1/bunglon.png" alt="bunglon">
            </div>
            <div class="wadah">
                <img src="aset/x1/orangutan.png" alt="orangutan">
            </div>
            <div class="wadah">
                <img src="aset/x1/penyu-1.png" alt="penyu" height="240px">
            </div>
            <div class="wadah">
                <img src="aset/x1/burung-1.png" alt="burung">
            </div>
        </div>
        <button class="panah-kanan btn"><img src="aset/panah.svg" alt="panah"></button>
        <button class="panah-kiri btn"><img src="aset/panah.svg" alt="panah"></button>
    </div>
</div>
    
@endsection