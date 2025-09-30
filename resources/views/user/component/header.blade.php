<header data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-4 border-bottom">

            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/header/logo.png') }}"
                    alt="Logo"
                    class="img-fluid"
                    style="object-fit: cover; max-width: 250px;">
                </a>
            </div>

            <!-- Menu kanan -->
            <div class="d-flex gap-3 align-items-center">

                <!-- Category -->
                <div class="category-menu-section">
                    <!-- Desktop trigger -->
                    <button class="header-kategori text-nowrap d-none d-md-block" id="dropdownToggleDesktop">
                        <i class="fa-solid fa-list pe-2"></i>PILIH KATEGORI
                    </button>
                    <!-- Mobile trigger -->
                    <i class="fa-solid fa-bars d-md-none fs-2 text-danger" id="dropdownToggleMobile"></i>

                    <!-- Dropdown -->
                    <div class="category-dropdown" id="dropdownMenu">
                        <ul class="category-list list-unstyled m-0 p-0">
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
                                        <i class="fa-solid {{ $category['icon'] }} me-2"></i>
                                        <span>{{ $category['text'] }}</span>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
