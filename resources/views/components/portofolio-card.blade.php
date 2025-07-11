<style>
    @import url("https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700,800");

    body {
        min-height: 100vh;
        font-family: "Fira Sans", sans-serif;
    }

    .blog-slider {
        width: 95%;
        position: relative;
        max-width: 800px;
        margin: auto;
        background: #fff;
        box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
        padding: 25px;
        border-radius: 25px;
        height: 400px;
        transition: all 0.3s;
    }

    @media screen and (max-width: 992px) {
        .blog-slider {
            max-width: 680px;
            height: 400px;
        }
    }

    @media screen and (max-width: 768px) {
        .blog-slider {
            min-height: 500px;
            height: auto;
            margin: 180px auto;
        }
    }

    @media screen and (max-height: 500px) and (min-width: 992px) {
        .blog-slider {
            height: 350px;
        }
    }

    .blog-slider__item {
        display: flex;
        align-items: center;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__item {
            flex-direction: column;
        }
    }

    .blog-slider__item.swiper-slide-active .blog-slider__img img {
        opacity: 1;
        transition-delay: 0.3s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>* {
        opacity: 1;
        transform: none;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(1) {
        transition-delay: 0.3s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(2) {
        transition-delay: 0.4s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(3) {
        transition-delay: 0.5s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(4) {
        transition-delay: 0.6s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(5) {
        transition-delay: 0.7s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(6) {
        transition-delay: 0.8s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(7) {
        transition-delay: 0.9s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(8) {
        transition-delay: 1s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(9) {
        transition-delay: 1.1s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(10) {
        transition-delay: 1.2s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(11) {
        transition-delay: 1.3s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(12) {
        transition-delay: 1.4s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(13) {
        transition-delay: 1.5s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(14) {
        transition-delay: 1.6s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(15) {
        transition-delay: 1.7s;
    }

    .blog-slider__img {
        width: 300px;
        flex-shrink: 0;
        height: 300px;
        background-image: linear-gradient(147deg, #4b0082 0%, #6a5acd 74%);
        box-shadow: 0px 14px 80px rgba(75, 0, 130, 0.4);
        /* box-shadow: 4px 13px 30px 1px rgba(252, 56, 56, 0.2); */
        border-radius: 20px;
        transform: translateX(-80px);
        overflow: hidden;
    }

    .blog-slider__img:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(147deg, #4b0082 0%, #6a5acd 74%);
        border-radius: 20px;
        opacity: 0.8;
    }

    .blog-slider__img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        opacity: 0;
        border-radius: 20px;
        transition: all 0.3s;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__img {
            transform: translateY(-50%);
            width: 90%;
        }
    }

    @media screen and (max-width: 576px) {
        .blog-slider__img {
            width: 95%;
        }
    }

    @media screen and (max-height: 500px) and (min-width: 992px) {
        .blog-slider__img {
            height: 270px;
        }
    }

    .blog-slider__content {
        padding-right: 25px;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__content {
            margin-top: -80px;
            text-align: center;
            padding: 0 30px;
        }
    }

    @media screen and (max-width: 576px) {
        .blog-slider__content {
            padding: 0;
        }
    }

    .blog-slider__content>* {
        opacity: 0;
        transform: translateY(25px);
        transition: all 0.4s;
    }

    .blog-slider__code {
        color: #7b7992;
        margin-bottom: 15px;
        display: block;
        font-weight: 500;
    }

    .blog-slider__title {
        font-size: 24px;
        font-weight: 700;
        color: #0d0925;
        margin-bottom: 20px;
    }

    .blog-slider__text {
        color: #4e4a67;
        margin-bottom: 30px;
        line-height: 1.5em;
    }

    .blog-slider__button {
        display: inline-flex;
        background-image: linear-gradient(147deg, #4b0082 0%, #6a5acd 74%);
        /* background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%); */
        padding: 15px 35px;
        border-radius: 50px;
        color: #fff;
        /* box-shadow: 0px 14px 80px rgba(252, 56, 56, 0.4); */
        box-shadow: 0px 14px 80px rgba(75, 0, 130, 0.4);
        text-decoration: none;
        font-weight: 500;
        justify-content: center;
        text-align: center;
        letter-spacing: 1px;
    }

    @media screen and (max-width: 576px) {
        .blog-slider__button {
            width: 100%;
        }
    }

    .blog-slider .swiper-container-horizontal>.swiper-pagination-bullets,
    .blog-slider .swiper-pagination-custom,
    .blog-slider .swiper-pagination-fraction {
        bottom: 10px;
        left: 0;
        width: 100%;
    }

    .blog-slider__pagination {
        position: absolute;
        z-index: 21;
        right: 20px;
        width: 11px !important;
        text-align: center;
        left: auto !important;
        top: 50%;
        bottom: auto !important;
        transform: translateY(-50%);
    }

    @media screen and (max-width: 768px) {
        .blog-slider__pagination {
            transform: translateX(-50%);
            left: 50% !important;
            top: 205px;
            width: 100% !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 8px 0;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 5px;
        }
    }

    .blog-slider__pagination .swiper-pagination-bullet {
        width: 11px;
        height: 11px;
        display: block;
        border-radius: 10px;
        background: #062744;
        opacity: 0.2;
        transition: all 0.3s;
    }

    .blog-slider__pagination .swiper-pagination-bullet-active {
        opacity: 1;
        background: #6a5acd;
        height: 30px;
        box-shadow: 0px 0px 20px rgba(252, 56, 56, 0.3);
    }

    @media screen and (max-width: 768px) {
        .blog-slider__pagination .swiper-pagination-bullet-active {
            height: 11px;
            width: 30px;
        }
    }
</style>
<div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">
        @foreach ($projects as $project)
            <div class="blog-slider__item swiper-slide">
                <div class="blog-slider__img">
                    
                        <img src="{{ asset('storage/' . $project->image) }}" alt="">
                    </a>
                </div>
                <div class="blog-slider__content">
                    <span class="blog-slider__code">26 December 2019</span>
                    <div class="blog-slider__title">{{ $project->title }}</div>
                    <div class="blog-slider__text"> {{ Str::limit($project->description, 60) }} </div>
                    {{-- <div class="flex items-center mt-8 space-x-3">
                        <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                            <img src="{{ asset('images/user1.jpg') }}" width="40" height="40" alt="Avatar"
                                class="object-cover" />
                        </div>
                        <div>
                            <div class="text-lg font-medium dark:text-white">Sarah Steiner</div>
                            <div class="text-gray-600 dark:text-gray-400">VP Sales at Google</div>
                        </div>
                    </div> --}}
                    <a href="{{ route('project.show', ['id' => $project->id]) }}" class="blog-slider__button mt-5">READ MORE</a>
                </div>
            </div>
        @endforeach
        {{-- <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/jason-leung-798979-unsplash.webp"
                    alt="">
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">26 December 2019</span>
                <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
                <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae
                    voluptate repellendus magni illo ea animi?</div>
                <a href="#" class="blog-slider__button">READ MORE</a>
            </div>
        </div>

        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/alessandro-capuzzi-799180-unsplash.webp"
                    alt="">
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">26 December 2019</span>
                <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae
                    voluptate repellendus magni illo ea animi?</div>
                <a href="#" class="blog-slider__button">READ MORE</a>
            </div>
        </div> --}}

    </div>
    <div class="blog-slider__pagination"></div>
</div>
