<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('assets/images/homepage-one/icon.png')}}">

    <!--title  -->
    <title>Andalanku</title>


    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="{{asset('css/swiper10-bundle.min.css')}}">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="{{asset('css/bootstrap-5.3.2.min.css')}}">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="{{asset('css/aos-3.0.0.css')}}">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">



</head>

<body >


    <!--------------- header-section --------------->
    <header id="header" class="header">
        <div class="header-center-section d-none d-lg-block">
            <div class="container">
                <div class="header-center">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('assets/images/logos/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="header-cart-items">
                        <div class="header-search">
                            <button class="header-search-btn" onclick="modalAction('.search')">
                                <span>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.9708 16.4151C12.5227 17.4021 10.9758 17.9723 9.27353 18.0062C5.58462 18.0802 2.75802 16.483 1.05056 13.1945C-1.76315 7.77253 1.33485 1.37571 7.25086 0.167548C12.2281 -0.848249 17.2053 2.87895 17.7198 7.98579C17.9182 9.95558 17.5566 11.7939 16.5852 13.5061C16.4512 13.742 16.483 13.8725 16.6651 14.0553C18.2412 15.6386 19.8112 17.2272 21.3735 18.8244C22.1826 19.6513 22.2058 20.7559 21.456 21.4932C20.7697 22.1678 19.7047 22.1747 18.9764 21.4793C18.3623 20.8917 17.7774 20.2737 17.1796 19.6688C16.118 18.5929 15.0564 17.5153 13.9708 16.4151ZM2.89545 9.0364C2.91692 12.4172 5.59664 15.1164 8.91967 15.1042C12.2384 15.092 14.9138 12.3493 14.8889 8.98505C14.864 5.63213 12.1826 2.92508 8.89047 2.92857C5.58204 2.93118 2.87397 5.68958 2.89545 9.0364Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </button>
                            <div class="modal-wrapper search">
                                <div onclick="modalAction('.search')" class="anywhere-away"></div>

                                <!-- change this -->
                                <div class="modal-main">
                                    <div class="wrapper-close-btn" onclick="modalAction('.search')">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="red" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <!-- change this -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="mobile-menu d-block d-lg-none">
            <div class="mobile-menu-header d-flex justify-content-between align-items-center">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                    aria-controls="offcanvasWithBothOptions">
                    <span>
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="14" height="1" fill="#1D1D1D" />
                            <rect y="8" width="14" height="1" fill="#1D1D1D" />
                            <rect y="4" width="10" height="1" fill="#1D1D1D" />
                        </svg>
                    </span>
                </button>
                <a href="index.html" class="mobile-header-logo">
                    <img src="{{asset('assets/images/logos/logo.png')}}" alt="logo">
                </a>
                {{-- <a href="cart.html" class="header-cart cart-item">
                    <span>
                        <svg width="35" height="28" viewBox="0 0 35 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.4444 21.897C14.8444 21.897 13.2441 21.8999 11.6441 21.8963C9.79233 21.892 8.65086 21.0273 8.12595 19.2489C7.04294 15.5794 5.95756 11.9107 4.87166 8.24203C4.6362 7.4468 4.37783 7.25412 3.55241 7.25175C2.7786 7.24964 2.00507 7.25754 1.23127 7.24911C0.512247 7.24148 0.0157813 6.79109 0.000242059 6.15064C-0.0160873 5.48281 0.475637 5.01689 1.23232 5.00873C2.11121 4.99952 2.99089 4.99214 3.86951 5.01268C5.36154 5.04769 6.52014 5.93215 6.96393 7.35415C7.14171 7.92378 7.34055 8.49026 7.46382 9.07201C7.54968 9.47713 7.77881 9.49661 8.10566 9.49582C11.8335 9.48897 15.5611 9.49134 19.2889 9.49134C21.0825 9.49134 22.8761 9.48108 24.6694 9.49503C26.0848 9.50608 27.0907 10.4906 27.0156 11.7778C27.0006 12.0363 26.925 12.2958 26.8473 12.5457C26.1317 14.8411 25.4124 17.1351 24.6879 19.4279C24.1851 21.0186 23.0223 21.8826 21.3504 21.8944C19.7151 21.906 18.0797 21.897 16.4444 21.897Z"
                                fill="#6E6D79" />
                            <path
                                d="M12.4012 27.5161C11.167 27.5227 10.1488 26.524 10.1345 25.2928C10.1201 24.0419 11.1528 22.9982 12.3967 23.0066C13.6209 23.0151 14.6422 24.0404 14.6436 25.2623C14.6451 26.4855 13.6261 27.5095 12.4012 27.5161Z"
                                fill="#6E6D79" />
                            <path
                                d="M22.509 25.2393C22.5193 26.4842 21.5393 27.4971 20.3064 27.5155C19.048 27.5342 18.0272 26.525 18.0277 25.2622C18.0279 24.0208 19.0214 23.0161 20.2572 23.0074C21.4877 22.9984 22.4988 24.0006 22.509 25.2393Z"
                                fill="#6E6D79" />
                            <circle cx="26.9523" cy="8" r="8" fill="#a00808" />
                            <path
                                d="M23.7061 13V11.8864L27.1514 8.31676C27.5193 7.92898 27.8226 7.58925 28.0612 7.29759C28.3032 7.0026 28.4838 6.72254 28.6031 6.45739C28.7225 6.19223 28.7821 5.91051 28.7821 5.61222C28.7821 5.27415 28.7026 4.98248 28.5435 4.73722C28.3844 4.48864 28.1673 4.29806 27.8922 4.16548C27.6171 4.02959 27.3072 3.96165 26.9625 3.96165C26.5979 3.96165 26.2797 4.03622 26.008 4.18537C25.7362 4.33452 25.5274 4.54498 25.3815 4.81676C25.2357 5.08854 25.1628 5.40672 25.1628 5.77131H23.6962C23.6962 5.15151 23.8387 4.60961 24.1237 4.1456C24.4088 3.68158 24.7999 3.32197 25.297 3.06676C25.7942 2.80824 26.3593 2.67898 26.9923 2.67898C27.632 2.67898 28.1955 2.80658 28.6827 3.06179C29.1732 3.31368 29.556 3.65838 29.8311 4.09588C30.1062 4.53007 30.2438 5.0206 30.2438 5.56747C30.2438 5.94531 30.1725 6.31487 30.03 6.67614C29.8908 7.0374 29.6472 7.4401 29.2992 7.88423C28.9511 8.32505 28.4672 8.86032 27.8475 9.49006L25.824 11.608V11.6825H30.4078V13H23.7061Z"
                                fill="#F9FFFB" />
                        </svg>

                    </span>
                </a> --}}
            </div>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">

                <div class="offcanvas-body">
                    <div class="header-top">
                        <div class="shop-btn ms-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                            </button>
                        </div>
                    </div>
                    <div class="header-input">
                        <input type="text" placeholder="Search....">
                        <span>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.9708 16.4151C12.5227 17.4021 10.9758 17.9723 9.27353 18.0062C5.58462 18.0802 2.75802 16.483 1.05056 13.1945C-1.76315 7.77253 1.33485 1.37571 7.25086 0.167548C12.2281 -0.848249 17.2053 2.87895 17.7198 7.98579C17.9182 9.95558 17.5566 11.7939 16.5852 13.5061C16.4512 13.742 16.483 13.8725 16.6651 14.0553C18.2412 15.6386 19.8112 17.2272 21.3735 18.8244C22.1826 19.6513 22.2058 20.7559 21.456 21.4932C20.7697 22.1678 19.7047 22.1747 18.9764 21.4793C18.3623 20.8917 17.7774 20.2737 17.1796 19.6688C16.118 18.5929 15.0564 17.5153 13.9708 16.4151ZM2.89545 9.0364C2.91692 12.4172 5.59664 15.1164 8.91967 15.1042C12.2384 15.092 14.9138 12.3493 14.8889 8.98505C14.864 5.63213 12.1826 2.92508 8.89047 2.92857C5.58204 2.93118 2.87397 5.68958 2.89545 9.0364Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                    </div>

                    <div class="category-dropdown">
                        <ul class="category-list">
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="{{asset('assets/images/homepage-one/category-img/dresses.webp')}}"
                                                    alt="dress">
                                            </span>
                                            <span class="dropdown-text">
                                                Lighting

                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="{{asset('assets/images/homepage-one/category-img/bags.webp')}}"
                                                    alt="Bags">
                                            </span>
                                            <span class="dropdown-text">
                                                Bags
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="{{asset('assets/images/homepage-one/category-img/sweaters.webp')}}"
                                                    alt="sweaters">
                                            </span>
                                            <span class="dropdown-text">
                                                Sweaters
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="{{asset('assets/images/homepage-one/category-img/shoes.webp')}}"
                                                    alt="sweaters">
                                            </span>
                                            <span class="dropdown-text">
                                                Boots
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/gift.webp"
                                                    alt="gift">
                                            </span>
                                            <span class="dropdown-text">
                                                Gifts
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/sneakers.webp"
                                                    alt="sneakers">
                                            </span>
                                            <span class="dropdown-text">
                                                Sneakers
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/watch.webp"
                                                    alt="watch">
                                            </span>
                                            <span class="dropdown-text">
                                                Watches
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/ring.webp"
                                                    alt="ring">
                                            </span>
                                            <span class="dropdown-text">
                                                Gold Ring
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/cap.webp" alt="cap">
                                            </span>
                                            <span class="dropdown-text">
                                                Cap
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/glass.webp"
                                                    alt="glass">
                                            </span>
                                            <span class="dropdown-text">
                                                Sunglasses
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/baby.webp"
                                                    alt="baby">
                                            </span>
                                            <span class="dropdown-text">
                                                Baby Shop
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="header-bottom d-lg-block d-none">
            <div class="container">
                <div class="header-nav">
                    <div class="category-menu-section position-relative">
                        <div class="empty position-fixed" onclick="tooglmenu()"></div>
                        <button class="dropdown-btn" onclick="tooglmenu()">
                            <span class="dropdown-icon">
                                <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="14" height="1" />
                                    <rect y="8" width="14" height="1" />
                                    <rect y="4" width="10" height="1" />
                                </svg>
                            </span>
                            <span class="list-text">
                                All Categories
                            </span>
                        </button>
                        <div class="category-dropdown position-absolute" id="subMenu">
                            <ul class="category-list">
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item">
                                            <div class="dropdown-list-item">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/dresses.webp"
                                                        alt="dress">
                                                </span>
                                                <span class="dropdown-text">
                                                    Lighting
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" fill="#1D1D1D" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" fill="#1D1D1D" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-nav-menu">
                        <ul class="menu-list">
                            <li>
                                <a href="index.html">
                                    <span class="list-text">Home</span>
                                </a>
                            </li>
                            <li class="mega-menu">
                                <a href="product-sidebar.html">
                                    <span class="list-text">Shop</span>
                                </a>
                                <div class="shop-menu">
                                    <div class="menu-wrapper">
                                        <div class="menu-list">
                                            <h5 class="menu-title">Dresses</h5>
                                            <ul>
                                                <li><a href="product-sidebar.html">Shirt</a></li>
                                                <li><a href="product-sidebar.html">Skart</a></li>
                                                <li><a href="product-sidebar.html"> T-Shirt</a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-list">
                                            <h5 class="menu-title">Bags</h5>
                                            <ul>
                                                <li><a href="product-sidebar.html">HandBags</a></li>
                                                <li><a href="product-sidebar.html">Mobile Bags</a></li>
                                                <li><a href="product-sidebar.html">School Bags</a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-list">
                                            <h5 class="menu-title">Cosmetics</h5>
                                            <ul>
                                                <li><a href="product-sidebar.html">Liptics</a></li>
                                                <li><a href="product-sidebar.html">Foundation</a></li>
                                                <li><a href="product-sidebar.html"> Eye Liner</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="shop-menu-img">
                                        <img src="./assets/images/homepage-one/empty-wishlist.webp" alt="img">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="about.html">
                                    <span class="list-text">About</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact-us.html">
                                    <span class="list-text">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--------------- header-section-end --------------->

    <!--------------- hero-section --------------->
    <section id="hero" class="hero">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper hero-wrapper">
                <div class="swiper-slide hero-slider-one">
                    <div class="container">
                        <div class="col-lg-6">
                            <div class="wrapper-section" data-aos="fade-up">
                                <div class="wrapper-info">
                                    <h2 class="wrapper-details text-white">Semua Bisa Jadi Spektakuler, Kalau AndalanKu yang Urus.</h2>
                                    <h4 class="wrapper-details text-white">Alat Lengkap, Event Hebat!</h4>
                                    <a href="product-sidebar.html" class="shop-btn">Sewa Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero-slider-two">
                    <div class="container">
                        <div class="col-lg-6">
                            <div class="wrapper-section">
                                <div class="wrapper-info">
                                    <h2 class="wrapper-details text-white">Semua Bisa Jadi Spektakuler, Kalau AndalanKu yang Urus.</h2>
                                    <h4 class="wrapper-details text-white">Alat Lengkap, Event Hebat!</h4>
                                    <a href="product-sidebar.html" class="shop-btn">Sewa Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero-slider-three">
                    <div class="container">
                        <div class="col-lg-6">
                            <div class="wrapper-section">
                                <div class="wrapper-info">
                                    <h2 class="wrapper-details text-white">Semua Bisa Jadi Spektakuler, Kalau AndalanKu yang Urus.</h2>
                                    <h4 class="wrapper-details text-white">Alat Lengkap, Event Hebat!</h4>
                                    <a href="product-sidebar.html" class="shop-btn">Sewa Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!--------------- hero-section-end --------------->


    <!--------------- category-section--------------->
    <section class="product-category m-5">
        <div class="container">
            <div class="section-title">
                <h5>Semua Kategori</h5>
            </div>
            <div class="category-section">
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="100">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Sound System</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="200">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Lighting</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="300">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Alat Pesta</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="400">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Panggung</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="500">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Tenda</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="600">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Event Support</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="100">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Live Streaming</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="200">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Kamera</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="300">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">LED Screen</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="400">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Photobooth</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="500">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Kelistrikan</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="200">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/categoryLamp.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- category-section-end--------------->

    <!--------------- arrival-section--------------->
    <section class="product arrival">
        <div class="container">
            <div class="section-title">
                <h5>Semua Product</h5>
            </div>
            <div class="arrival-section">
                <div class="row g-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-1.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Lighting
                                    </a>
                                    <div class="price">
                                        <span class="new-price">Rp600.000,-</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Sewa Via WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- arrival-section-end--------------->

    <!--------------- top-sell-section--------------->
    <section class="product top-selling">
        <div class="container">
            <div class="section-title">
                <h5>Barang yang sering disewa</h5>
            </div>
            <div class="top-selling-section mb-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="product-wrapper" data-aos="fade-right">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-5.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#a00808" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Lampu
                                    </a>
                                    <p class="text-muted">lighting</p>
                                    <div class="price">
                                        <span class="new-price">Rp200.000,-</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Sewa Via WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- top-sell-section-end--------------->
    <!--------------- footer-section--------------->
    <section class="product footer">
        <div class="container">
            <div class="footer-service-section">
                <div class="row gy-4">
                    <div class="col-lg-3  col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 36 37" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1H5.63636V24.1818H35" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="square" />
                                        <path
                                            d="M8.72763 35.0021C10.4347 35.0021 11.8185 33.6183 11.8185 31.9112C11.8185 30.2042 10.4347 28.8203 8.72763 28.8203C7.02057 28.8203 5.63672 30.2042 5.63672 31.9112C5.63672 33.6183 7.02057 35.0021 8.72763 35.0021Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path
                                            d="M31.9073 35.0021C33.6144 35.0021 34.9982 33.6183 34.9982 31.9112C34.9982 30.2042 33.6144 28.8203 31.9073 28.8203C30.2003 28.8203 28.8164 30.2042 28.8164 31.9112C28.8164 33.6183 30.2003 35.0021 31.9073 35.0021Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path d="M34.9982 1H11.8164V18H34.9982V1Z" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="square" />
                                        <path d="M11.8164 7.17969H34.9982" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="square" />
                                    </svg>

                                </span>
                            </div>
                            <div class="service-content">
                                <h5 class="service-info service-title">Free Shipping</h5>
                                <p class="service-info service-details">When ordering over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 32 34" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M31 17.4492C31 25.6992 24.25 32.4492 16 32.4492C7.75 32.4492 1 25.6992 1 17.4492C1 9.19922 7.75 2.44922 16 2.44922C21.85 2.44922 26.95 5.74922 29.35 10.6992"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10" />
                                        <path d="M30.7 2L29.5 10.85L20.5 9.65" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="square" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-content">
                                <h5 class="service-info service-title">Free Return</h5>
                                <p class="service-info service-details">Get Return within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 32 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.6654 18.668H9.33203V27.0013H22.6654V18.668Z" stroke="#F9FFFB"
                                            stroke-width="2" stroke-miterlimit="10" stroke-linecap="square" />
                                        <path
                                            d="M12.668 18.6654V13.6654C12.668 11.832 14.168 10.332 16.0013 10.332C17.8346 10.332 19.3346 11.832 19.3346 13.6654V18.6654"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path
                                            d="M31 22C31 30.3333 24.3333 37 16 37C7.66667 37 1 30.3333 1 22V5.33333L16 2L31 5.33333V22Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-content">
                                <h5 class="service-info service-title">Secure Payment</h5>
                                <p class="service-info service-details">100% Secure Online Payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 32 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 13H5.5C2.95 13 1 11.05 1 8.5V1H7" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" />
                                        <path d="M25 13H26.5C29.05 13 31 11.05 31 8.5V1H25" stroke="#F9FFFB"
                                            stroke-width="2" stroke-miterlimit="10" />
                                        <path d="M16 28V22" stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10" />
                                        <path d="M16 22C11.05 22 7 17.95 7 13V1H25V13C25 17.95 20.95 22 16 22Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path d="M25 34H7C7 30.7 9.7 28 13 28H19C22.3 28 25 30.7 25 34Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-content">
                                <h5 class="service-info service-title">Best Quality</h5>
                                <p class="service-info service-details">Original Product Guarenteed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-section">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-order">
                            <div class="logo">
                                <img src="assets/images/logos/logoFooter.png" alt="logo">
                            </div>
                            <div class="footer-link order-link">
                                <ul>
                                    <li><a href="order.html">Track Order</a></li>
                                    <li><a href="cart.html">Delivery & Returns</a></li>
                                    <li><a href="about.html">Warranty</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="about-us">
                            <h4 class="footer-heading footer-title">
                                About Us
                            </h4>
                            <div class="footer-link about-link">
                                <ul>
                                    <li><a href="about.html">Rave’s Story</a></li>
                                    <li><a href="about.html">Work With Us</a></li>
                                    <li><a href="about.html">Coporate News</a></li>
                                    <li><a href="about.html">Investors</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="links">
                            <h4 class="footer-heading footer-title">
                                Useful Links
                            </h4>
                            <div class="footer-link useful-link">
                                <ul>
                                    <li><a href="about.html">Secure Payment</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="terms.html">Terms of Use</a></li>
                                    <li><a href="product-sidebar.html">Archived Products</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="contact-info">
                            <h4 class="footer-heading footer-title">
                                Contact Info
                            </h4>
                            <div class="footer-link contact-link">
                                <div class="address">
                                    <div class="icon">
                                        <span>
                                            <svg width="44" height="45" viewBox="0 0 44 45" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="21.9995" cy="22.9961" r="21.5" stroke="#424242"></circle>
                                                <g clip-path="url(#clip0_2343_13859)">
                                                    <path
                                                        d="M22.0218 13.9961C26.4153 14.0049 29.7134 17.7202 28.8665 21.6964C28.4484 23.66 27.5123 25.4261 26.3138 27.0614C25.1774 28.6116 23.9185 30.0879 22.6867 31.5779C22.2178 32.1454 21.804 32.1262 21.3001 31.5795C19.1664 29.2642 17.2295 26.8278 15.9102 24.0253C15.3696 22.8757 14.9978 21.6836 14.9995 20.4176C15.003 16.8701 18.1568 13.9881 22.0218 13.9961ZM22.0297 30.36C22.9045 29.2763 23.7479 28.3049 24.5037 27.2782C25.8116 25.5008 26.9568 23.6407 27.4616 21.5142C28.0739 18.934 26.466 16.3499 23.7566 15.5367C21.0149 14.713 18.0326 15.9324 16.8743 18.344C16.1858 19.777 16.3188 21.2091 16.8647 22.6413C17.6756 24.7695 18.9512 26.6632 20.399 28.4655C20.8889 29.0764 21.4226 29.6576 22.0297 30.36Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M24.7977 20.4357C24.7916 21.8486 23.5204 22.9982 21.9728 22.9886C20.4567 22.9797 19.2005 21.8197 19.1987 20.4253C19.1961 19.0148 20.4664 17.85 22.0043 17.8516C23.5432 17.8532 24.8029 19.0188 24.7977 20.4357ZM23.3953 20.4213C23.3953 19.7156 22.7873 19.1481 22.021 19.1384C21.2371 19.128 20.6011 19.702 20.6011 20.4213C20.6011 21.1253 21.2109 21.6937 21.9772 21.7033C22.7663 21.7121 23.3953 21.143 23.3953 20.4213Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2343_13859">
                                                        <rect width="14" height="18" fill="white"
                                                            transform="translate(14.9995 13.9961)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="details">
                                        <h4 class="footer-heading">Address:</h4>
                                        <p>4517 Washington Ave. Manchester, Kentucky 39495</p>
                                    </div>
                                </div>
                                <div class="phone address">
                                    <div class="icon">
                                        <span>
                                            <svg width="44" height="45" viewBox="0 0 44 45" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="21.9995" cy="22.9961" r="21.5" stroke="#424242"></circle>
                                                <g clip-path="url(#clip0_56_7)">
                                                    <path
                                                        d="M26.9779 30.9959C25.7937 30.9581 24.6221 30.5625 23.5005 30.0096C19.5679 28.0716 16.6582 25.1275 14.8109 21.1599C14.2944 20.0502 13.9265 18.8947 14.0112 17.6423C14.0558 16.9879 14.2937 16.4177 14.7489 15.9459C15.1954 15.4839 15.6439 15.0233 16.1124 14.5833C16.9448 13.8008 17.8545 13.7981 18.6795 14.5866C19.3846 15.2596 20.075 15.9492 20.7514 16.6514C21.5858 17.5175 21.5732 18.3743 20.7348 19.2431C20.3969 19.5935 20.051 19.9387 19.6925 20.2685C19.5419 20.4072 19.5299 20.5161 19.6205 20.692C20.257 21.9198 21.1526 22.9459 22.1916 23.8359C22.8434 24.3941 23.5884 24.8434 24.2909 25.3425C24.4555 25.46 24.5754 25.4295 24.7174 25.2814C25.1092 24.8753 25.5058 24.4704 25.9276 24.0954C26.6407 23.4616 27.5164 23.4689 28.2035 24.1259C28.9725 24.8607 29.7269 25.6113 30.4647 26.3772C31.1558 27.0953 31.1784 27.9907 30.5187 28.7333C30.0415 29.2709 29.5317 29.782 29.0105 30.2784C28.4727 30.7915 27.8003 30.9952 26.9779 30.9959ZM27.0239 30.1377C27.6637 30.1616 28.1902 29.9307 28.6247 29.4647C28.9645 29.1004 29.3198 28.7499 29.6703 28.3962C30.2688 27.7922 30.2734 27.4119 29.6796 26.8199C29.0365 26.1781 28.3921 25.5376 27.7463 24.8985C27.2265 24.3841 26.8546 24.3848 26.3241 24.9045C25.9203 25.3 25.5244 25.7036 25.1206 26.0985C24.7974 26.415 24.5148 26.4774 24.1316 26.2418C23.4165 25.8011 22.6768 25.3823 22.0303 24.8534C20.6835 23.7523 19.5132 22.4853 18.7561 20.8917C18.5062 20.3661 18.5576 20.1597 18.9861 19.7502C19.3706 19.3825 19.7545 19.0141 20.1243 18.6325C20.6122 18.1301 20.6115 17.7518 20.1237 17.2586C19.4472 16.5724 18.7641 15.8921 18.0764 15.2171C17.5952 14.7446 17.1827 14.7512 16.6922 15.2284C16.311 15.5994 15.9478 15.989 15.5586 16.3507C15.0221 16.8491 14.8255 17.4597 14.8695 18.1739C14.9275 19.117 15.2221 19.9964 15.6179 20.838C17.3853 24.5985 20.1457 27.402 23.8823 29.2424C24.8707 29.7302 25.9036 30.0959 27.0239 30.1377Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_56_7">
                                                        <rect width="17" height="17" fill="white"
                                                            transform="translate(13.9995 13.9961)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="details">
                                        <h4 class="footer-heading">Phone:</h4>
                                        <p>+880171889547</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <!--------------- footer-section-end--------------->














    <!--------------- jQuery ---------------->

    <script src="{{asset('assets/js/jquery_3.7.1.min.js')}}"></script>

    <!--------------- bootstrap-js ---------------->
    <script src="{{asset('assets/js/bootstrap_5.3.2.bundle.min.js')}}"></script>

    <!--------------- Range-Slider-js ---------------->
    <script src="{{asset('assets/js/nouislider.min.js')}}"></script>

    <!--------------- scroll-Animation-js ---------------->
    <script src="{{asset('assets/js/aos-3.0.0.js')}}"></script>

    <!--------------- swiper-js ---------------->
    <script src="{{asset('assets/js/swiper10-bundle.min.js')}}"></script>

    <!--------------- additional-js ---------------->
    <script src="{{asset('assets/js/shopus.js')}}"></script>


</body>

</html>
