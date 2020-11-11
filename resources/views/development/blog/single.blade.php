@include('development.includes.head')
@include('development.next.include.myhouseNav')





<div class="overflay mt-89 pb-670">
    <div class="d-flex justify-content-end mr-4 mt-3">
        <img src="http://myhouse.com/images/residential/x.svg" alt="">
    </div>
    <div class="container">
        <div class="text-center">
            <a href="{{ route("blog") }}">
                <div class="blog-fleche float-left">
                    <div class="d-flex">
                        <div>
                            <img src="{{ asset('images/residential/shape.svg') }}" alt="" class="fleche-back">
                        </div>
                        <div class="blog-text-back">Accueil blog</div>
                    </div>
                </div>
            </a>
            <div class="blog-titles text-uppercase">
                Blog
            </div>
        </div>
        <div class="blog-single-content">
            <div class="author-area">
                <div class="left-author d-inline-block">
                    Ecrit par
                </div>
                <div class="right-author d-inline-block">
                    10 Oct 2018
                </div>
                <div class="author-real text-center">
                    <div class="d-flex cube">
                        <div>
                            <img src="{{ asset('images/residential/bitmap.svg') }}" alt="" class="fleche-next">
                        </div>
                        <div class="blog-text-back">
                            <div class="float-left">
                                Amin Sadek
                            </div>
                            <div>
                                Décorateur d'intérieur
                            </div>
                        </div>
                    </div>
                    <div class="blog-stitle">
                        La maison Raoul en Inde
                    </div>
                </div>
            </div>
            <div class="blog-content-img text-center">
                <img src="{{ asset('images/residential/exterieur.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="blog-mt">
            <div class="row">
                <div class="col-md-6">
                    <p class="blog-p">
                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptartem
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior
                        architecto beatae vitae dicta sunt.doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                        et quasi ropeior architecto beatae vitae doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                        veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                        illo inventore veritatis et quasi ropeior architecto beatae vitae Culpa qui officia deserunt mollit anim id est laborum.
                        Sed ut perspiciatis unde omnis iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="blog-p">
                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                        sit voluptartem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                        veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae dicta
                        sunt.doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior
                        architecto beatae vitae Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                        omnis iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                        ab illo inventore veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae
                    </p>
                </div>
            </div>
        </div>
        <div class="blog-slider">
            <div class="carousel slide mb-5" data-ride="carousel" id="slider1">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#slider1" data-slide-to="0"></li>
                    <li data-target="#slider1" data-slide-to="1"></li>
                    <li data-target="#slider1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                            class="d-block img-fluid mx-auto"
                            src="{{ asset('images/residential/img.png') }}"
                            alt="First Slide"
                        />
                    </div>
                    <div class="carousel-item ">
                        <img
                            class="d-block img-fluid mx-auto"
                            src="{{ asset('images/residential/img.png') }}"
                            alt="Second Slide"
                        />
                    </div>
                    <div class="carousel-item ">
                        <img
                            class="d-block img-fluid mx-auto"
                            src="{{ asset('images/residential/img.png') }}"
                            alt="Third Slide"
                        />
                    </div>
                </div>
            </div>

        </div>
        <div class="blog-foot">
            <div class="blog-hr"></div>
        </div>
    </div>

</div>















@include('development.includes.footer')
