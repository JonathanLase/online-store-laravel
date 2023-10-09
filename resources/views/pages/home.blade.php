@extends('layouts.app')

@section('title')
    Store Homepage
@endsection

@section('content')
    <div class="page-content page-home">
        <section class="store-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="zoom-in">
                        <div id="storeCarousel" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#storeCarousel" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#storeCarousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#storeCarousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/images/banner.jpg" class="d-block w-100" alt="..." />
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/banner.jpg" class="d-block w-100" alt="..." />
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/banner.jpg" class="d-block w-100" alt="..." />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#storeCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#storeCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>Trend Categories</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <a href="#" class="component-categories d-block text-decoration-none">
                            <div class="categories-image">
                                <img src="/images/categories-gadgets.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Gadgets</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="component-categories d-block text-decoration-none">
                            <div class="categories-image">
                                <img src="/images/categories-furniture.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Furniture</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                        <a href="#" class="component-categories d-block text-decoration-none">
                            <div class="categories-image">
                                <img src="/images/categories-makeup.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Make Up</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                        <a href="#" class="component-categories d-block text-decoration-none">
                            <div class="categories-image">
                                <img src="/images/categories-sneaker.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Sneaker</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                        <a href="#" class="component-categories d-block text-decoration-none">
                            <div class="categories-image">
                                <img src="/images/categories-tools.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Tools</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                        <a href="#" class="component-categories d-block text-decoration-none">
                            <div class="categories-image">
                                <img src="/images/categories-baby.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Baby</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>New Products</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/details/1" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="
                                            background-image: url('/images/products-apple-watch.jpg');
                                        ">
                                </div>
                            </div>
                            <div class="products-text">Apple Watch 4</div>
                            <div class="products-price">$890</div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <a href="/details/1" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="
                                            background-image: url('/images/products-orange-bogotta.jpg');
                                        ">
                                </div>
                            </div>
                            <div class="products-text">Orange Bogotta</div>
                            <div class="products-price">$94,509</div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <a href="/details/1" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="
                                            background-image: url('/images/products-sofa-ternyaman.jpg');
                                        ">
                                </div>
                            </div>
                            <div class="products-text">Sofa Ternyaman</div>
                            <div class="products-price">$1,409</div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <a href="/details/1" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="
                                            background-image: url('/images/products-bubuk-maketti.jpg');
                                        ">
                                </div>
                            </div>
                            <div class="products-text">Bubuk Maketti</div>
                            <div class="products-price">$225</div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <a href="/details/1" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="
                                            background-image: url('/images/products-tatakan-gelas.jpg');
                                        ">
                                </div>
                            </div>
                            <div class="products-text">Tatakan Gelas</div>
                            <div class="products-price">$45,184</div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <a href="/details/1" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="
                                            background-image: url('/images/products-mavic-kawe.jpg');
                                        ">
                                </div>
                            </div>
                            <div class="products-text">Mavic Kawe</div>
                            <div class="products-price">$503</div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                        <a href="/details/1" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="
                                            background-image: url('/images/products-black-edition-nike.jpg');
                                        ">
                                </div>
                            </div>
                            <div class="products-text">
                                Black Edition Nike
                            </div>
                            <div class="products-price">$70,482</div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                        <a href="/details/1" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="
                                            background-image: url('/images/products-monkey-toys.jpg');
                                        ">
                                </div>
                            </div>
                            <div class="products-text">Monkey Toys</div>
                            <div class="products-price">$783</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
