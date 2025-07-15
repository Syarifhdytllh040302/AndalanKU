<header data-aos="fade-down" data-aos-duration="1000">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-4" style="border-bottom: 1px solid #eee;">
            <img src="{{ asset('img/header/logo.png') }}" alt="">
            <div class="d-flex gap-3">
                @php
                    $categories = [
                        ['img' => 'dresses.webp', 'text' => 'Dresses'],
                        ['img' => 'bags.webp', 'text' => 'Bags'],
                        ['img' => 'sweaters.webp', 'text' => 'Sweaters'],
                        ['img' => 'shoes.webp', 'text' => 'Boots'],
                        ['img' => 'gift.webp', 'text' => 'Gifts'],
                        ['img' => 'sneakers.webp', 'text' => 'Sneakers'],
                        ['img' => 'watch.webp', 'text' => 'Watches'],
                        ['img' => 'ring.webp', 'text' => 'Gold Ring'],
                        ['img' => 'cap.webp', 'text' => 'Cap'],
                        ['img' => 'glass.webp', 'text' => 'Sunglasses'],
                        ['img' => 'baby.webp', 'text' => 'Baby Shop'],
                    ];
                @endphp

                <div class="category-menu-section">
                    <button class="header-kategori" id="dropdownToggle">
                        <i class="fa-solid fa-list pe-2"></i>PILIH KATEGORI
                    </button>

                    <div class="category-dropdown" id="dropdownMenu">
                        <ul class="category-list">
                            @php
                                $categories = [
                                    ['icon' => 'fa-microphone', 'text' => 'Sound System'],
                                    ['icon' => 'fa-palette', 'text' => 'Dekorasi'],
                                    ['icon' => 'fa-lightbulb', 'text' => 'Lighting'],
                                    ['icon' => 'fa-warehouse', 'text' => 'Panggung'],
                                    ['icon' => 'fa-chair', 'text' => 'Kursi & Meja'],
                                    ['icon' => 'fa-tent', 'text' => 'Tenda Acara'],
                                    ['icon' => 'fa-tv', 'text' => 'LED TV / Projector'],
                                    ['icon' => 'fa-bullhorn', 'text' => 'MC & Entertainer'],
                                    ['icon' => 'fa-cake-candles', 'text' => 'Peralatan Ulang Tahun'],
                                    ['icon' => 'fa-glass-cheers', 'text' => 'Peralatan Pernikahan'],
                                    ['icon' => 'fa-people-group', 'text' => 'Kursi VIP & Sofa']
                                ];
                            @endphp

                            @foreach($categories as $category)
                            <li class="category-list-item">
                                <a href="#">
                                    <div class="dropdown-item d-flex align-items-center">
                                        <i class="fa-solid {{ $category['icon'] }} me-2 icon-left"></i>
                                        <span class="dropdown-text">{{ $category['text'] }}</span>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <button class="header-konsultasi">
                    <i class="fa fa-brands fa-whatsapp pe-2"></i>KONSULTASI VIA WHATSAPP
                </button>
            </div>
        </div>
    </div>
</header>
