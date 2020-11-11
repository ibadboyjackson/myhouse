<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tab Styles Inspiration</title>
    <meta
        name="description"
        content="Tab Styles Inspiration: A small collection of styles for tabs"
    />
    <meta
        name="keywords"
        content="tabs, inspiration, web design, css, modern, effects, svg"
    />
    <meta name="author" content="Codrops" />

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('development/css/style.css') }}">




    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<svg class="hidden">
    <defs>
        <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z" />
    </defs>
</svg>

<div class="row">
    <div class="col-md-6">
        <section>
            <div class="tabs tabs-style-shape">
                <nav>
                    <ul>
                        <li>
                            <a href="#section-shape-1">
                                <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                    <use xlink:href="#tabshape"></use>
                                </svg>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#section-shape-2">
                                <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                    <use xlink:href="#tabshape"></use>
                                </svg>
                                <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                    <use xlink:href="#tabshape"></use>
                                </svg>
                                <span>Design</span>
                            </a>
                        </li>
                        <li>
                            <a href="#section-shape-3">
                                <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                    <use xlink:href="#tabshape"></use>
                                </svg>
                                <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                    <use xlink:href="#tabshape"></use>
                                </svg>
                                <span>Work</span>
                            </a>
                        </li>
                        <li>
                            <a href="#section-shape-4">
                                <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                    <use xlink:href="#tabshape"></use>
                                </svg>
                                <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                    <use xlink:href="#tabshape"></use>
                                </svg>
                                <span>Portfolio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#section-shape-5">
                                <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                    <use xlink:href="#tabshape"></use>
                                </svg>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="content-wrap">
                    <section id="section-shape-1"><p>1</p></section>
                    <section id="section-shape-2"><p>2</p></section>
                    <section id="section-shape-3"><p>3</p></section>
                    <section id="section-shape-4"><p>4</p></section>
                    <section id="section-shape-5"><p>5</p></section>
                </div>
                <!-- /content -->
            </div>
            <!-- /tabs -->
        </section>
    </div>
    <div class="col-md-6">lukhl</div>
</div>
<!-- /container -->

<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('development/js/apps.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>


<script src="{{ asset('development/js/cbpFWTabs.js') }} "></script>
<script>
    (function() {
        [].slice.call(document.querySelectorAll(".tabs")).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
</script>


<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


</body>
</html>
