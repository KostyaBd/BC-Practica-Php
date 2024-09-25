
{{--full screen picture with search bar in the middle--}}
<div class="hero__item set-bg" data-setbg="home/img/grocery_bg.png">

    <div class="search_container d-flex align-items-center justify-content-center">
        <div class="container-fluid">
            <div class="row search_div">
                <div class="col-9" style="padding: 0">
                    <div class="search_text">Search your products here!</div>
                </div>

                <div class="col-3" style="padding: 0">
                    <button class="search_button">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Carousel of offers -->
<section class="categories" style="margin-top: 30px">
    <div class="container-fluid">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="categories__item set-bg" data-setbg="home/img/offer-5.webp"></div>
                <div class="categories__item set-bg" data-setbg="home/img/offer-4.webp"></div>
                <div class="categories__item set-bg" data-setbg="home/img/offer-3.webp"></div>
                <div class="categories__item set-bg" data-setbg="home/img/offer-2.webp"></div>
                <div class="categories__item set-bg" data-setbg="home/img/offer-1.webp"></div>
            </div>
        </div>
    </div>
</section>

{{--Categories side bar that sticks when reaches top and products--}}
<section class="hero">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                @include('home.sidebar')
            </div>

            {{--            Right side from categories bar that will be moving--}}
            <div class="col-lg-9 products_section">

                @include('home.body')

            </div>
        </div>
    </div>
</section>
