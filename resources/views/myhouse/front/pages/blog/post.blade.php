@extends('myhouse.front.template')

@section('title')
    Blog
@stop

@section('content')
    <div class="overflay mt-89 pb-670">
        
        
        <a href={{ session('blogurl') }}>
            <div class="menu-wrap-x-button">
                <img src="http://myhouse.com/images/residential/single/x.svg" alt="">
            </div>       
        </a>

        <div class="container">
            <div class="blog-title text-center text-uppercase">
                Blog
            </div>
            <div class="blog-title-next mt-3">
                Les plus belles maisons du monde
            </div>
            <div class="blog-tools">
                <div class="clearfix">
                    <div class="float-left">
                        <img src="{{ asset('images/residential/tri.svg') }}" alt="" class="bimg" id="bimg">
                        <div class="filter-blog-dropdown" id="filter-blog-dropdown">
                            <div class="filter-blog-content">
                                <div class="filter-blog-content-content">
                                    <input type="radio" id="tri1" name="radio-groupss" checked>
                                    <label for="tri1">Aucun tri</label>
                                </div>
                                <div class="filter-blog-content-content mt-1">
                                    <input type="radio" id="tri2" name="radio-groupss">
                                    <label for="tri2">Date de mise en ligne</label>
                                </div>
                                <div class="filter-blog-content-content mt-1">
                                    <input type="radio" id="tri3" name="radio-groupss">
                                    <label for="tri3">Nombre de vues</label>
                                </div>
                                <div class="filter-blog-content-content mt-1">
                                    <input type="radio" id="tri4" name="radio-groupss">
                                    <label for="tri4">Du plus ancien au plus récent</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="form-group">
                            <input type="search" class="form-control blog-form rounded-pill" placeholder="Recherche par mot-clé">
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-widget">
                <div class="row" data-aos="fade-right">
                    <div class="col-md-4  aos-init aos-animate"  data-aos-duration="1000">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 aos-init aos-animate" data-aos-duration="1000">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 aos-init aos-animate" data-aos-duration="1000">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-670">
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-670">
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-670">
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-670">
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('blog-single') }}" style="text-decoration: none;">
                            <div class="widget">
                                <div class="widget-thumb"></div>
                                <div class="widget-body">
                                    <div class="widget-title">
                                        Excepteur sint occaecat cupidatat non proident sunt in culpa.
                                    </div>
                                    <div class="widget-content">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem.
                                    </div>
                                    <div class="widget-footer">
                                        <div class="widget-local">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/local.svg') }}" alt="">
                                                </div>
                                                <div class="widget-local-text">
                                                    Rachid Tahar <br>
                                                    Benjelloun
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-time">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('images/residential/time.svg') }}" alt="">
                                                </div>
                                                <div class="widget-time-text">12 Nov 2019</div>
                                            </div>
                                        </div>
                                        <div class="widget-category">
                                            Les plus Belles <br>
                                            maisons du monde
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
@stop
