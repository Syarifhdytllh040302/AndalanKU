<section id="category-section">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <h2 class="mb-4 fw-semibold fs-3">KATEGORI PRODUK</h2>
            </div>
            <div class="col-lg-5 col-md-6">
                <h5 class="mb-4 text-end view-all">
                    <a href="#" class="text-decoration-none text-black align-self-center">
                        <span>Lihat Semua</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </h5>
            </div>
        </div>
        <div class="row d-flex justify-content-center flex-wrap gap-4 ps-2">
            @php $delay = 0; @endphp
            @foreach([
                ['img' => 'dummy-image.jpg', 'text' => 'Pendingin Ruangan'],
                ['img' => 'dummy-image.jpg', 'text' => 'Sound System'],
                ['img' => 'dummy-image.jpg', 'text' => 'Lighting'],
                ['img' => 'dummy-image.jpg', 'text' => 'Panggung'],
                ['img' => 'dummy-image.jpg', 'text' => 'Truss'],
                ['img' => 'dummy-image.jpg', 'text' => 'Perabot Event'],
                ['img' => 'dummy-image.jpg', 'text' => 'Alat Catering'],
                ['img' => 'dummy-image.jpg', 'text' => 'Dokumentasi'],
                ['img' => 'dummy-image.jpg', 'text' => 'Tenda & Partisi'],
                ['img' => 'dummy-image.jpg', 'text' => 'Souvenir'],
            ] as $category)
                <div class="col-lg-2 col-md-3 col-sm-4 col-6" data-aos="zoom-in" data-aos-delay="{{ $delay }}" data-aos-duration="500" data-aos-once="true">
                    <div class="border border-1 category-card p-2">
                        <div class="text-center py-2 px-1">
                            <img src="{{ asset('img/index/' . $category['img']) }}" alt="{{ $category['text'] }}" class="img-fluid mb-3" >
                            <h5 class="fs-6 fw-semibold">{{ $category['text'] }}</h5>
                        </div>
                    </div>
                </div>
                @php $delay += 100; @endphp
            @endforeach
        </div>
    </div>
</section>

