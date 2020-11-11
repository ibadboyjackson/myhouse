<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MyHouse </title>

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('development/css/header.css') }}">

    <!-- CDN LINK -->

    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-test">

@include('development.next.include.myhouseNav')




<!-- Overlay -->

<div class="chat mt-89">
    <div class="d-flex justify-content-end mr-4 mt-3">
        <img src="{{ asset('images/residential/x.svg') }}" alt="">
    </div>
    <div class="wraps">
        <div class="row">
            <div class="col-md-1 col-lg-2 col-xl-1">
                @include('development.includes.aside')
            </div>
            <div class="col-md-11 col-lg-10 col-xl-11">
                <div class="">
                    <div class="row ml-8 justify-content-center">
                        <div class="chat-box">
                            <div class="d-flex">
                                <div class="users mr-1">
                                    <div class="chat-header-user">
                                        <div class="form-group">
                                            <input type="search" name="#" id="" class="form-control chat-search" placeholder="Rechercher message">
                                        </div>
                                    </div>
                                    <div class="chat-body-user">
                                        <div class="box-chat active-chat">
                                            <div>
                                                <div class="chat-first">
                                                    <img src="{{ asset('images/residential/menu/list/1.png') }}" alt="">
                                                    <span class="text-top">Rachid Scopito  <span class="fl-right">  <span class="badge badge-success">2</span></span></span>
                                                    <br>
                                                    <span class="text-bottoms">Lorem ipsum dolor sit amet Consectetur…</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-chat">
                                            <div>
                                                <div class="chat-first">
                                                    <img src="{{ asset('images/residential/menu/list/3.png') }}" alt="">
                                                    <span class="text-top">Rachid Scopito <span class="fl-right"> 9 min</span></span>
                                                    <br>
                                                    <span class="text-bottoms">Lorem ipsum dolor sit amet Consectetur…</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-chat">
                                            <div>
                                                <div class="chat-first">
                                                    <img src="{{ asset('images/residential/menu/list/1.png') }}" alt="">
                                                    <span class="text-top">Rachid Scopito <span class="fl-right"> 1 min</span></span>
                                                    <br>
                                                    <span class="text-bottoms">Lorem ipsum dolor sit amet Consectetur…</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-chat">
                                            <div>
                                                <div class="chat-first">
                                                    <img src="{{ asset('images/residential/menu/list/2.png') }}" alt="">
                                                    <span class="text-top">Rachid Scopito <span class="fl-right"> 6 min</span></span>
                                                    <br>
                                                    <span class="text-bottoms">Lorem ipsum dolor sit amet Consectetur…</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-chat">
                                            <div>
                                                <div class="chat-first">
                                                    <img src="{{ asset('images/residential/menu/list/6.png') }}" alt="">
                                                    <span class="text-top">Rachid Scopito <span class="fl-right"> 10 min</span></span>
                                                    <br>
                                                    <span class="text-bottoms">Lorem ipsum dolor sit amet Consectetur…</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-chat">
                                            <div>
                                                <div class="chat-first">
                                                    <img src="{{ asset('images/residential/menu/list/4.png') }}" alt="">
                                                    <span class="text-top">Rachid Scopito <span class="fl-right"> 1 min</span></span>
                                                    <br>
                                                    <span class="text-bottoms">Lorem ipsum dolor sit amet Consectetur…</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-chat">
                                            <div>
                                                <div class="chat-first">
                                                    <img src="{{ asset('images/residential/menu/list/1.png') }}" alt="">
                                                    <span class="text-top">Rachid Scopito <span class="fl-right"> 3 min</span></span>
                                                    <br>
                                                    <span class="text-bottoms">Lorem ipsum dolor sit amet Consectetur…</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-chat">
                                            <div>
                                                <div class="chat-first">
                                                    <img src="{{ asset('images/residential/menu/list/1.png') }}" alt="">
                                                    <span class="text-top">Rachid Scopito <span class="fl-right"> 3 min</span></span>
                                                    <br>
                                                    <span class="text-bottoms">Lorem ipsum dolor sit amet Consectetur…</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-chat">
                                            <div>
                                                <div class="chat-first">
                                                    <img src="{{ asset('images/residential/menu/list/1.png') }}" alt="">
                                                    <span class="text-top">Rachid Scopito <span class="fl-right"> 3 min</span></span>
                                                    <br>
                                                    <span class="text-bottoms">Lorem ipsum dolor sit amet Consectetur…</span>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="chat-footer">
                                        <div class="chat-footer-content">
                                            <img src="{{ asset('images/residential/menu/list/chat-footer.svg') }}" alt="">
                                            <span class="chat-footer-text text-capitalize">écrire à myHouse</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-area">
                                    <div class="chat-header-area">
                                        <div class="chat-area-user">
                                            <div class="chat-fit">
                                                <img src="{{ asset('images/residential/menu/list/1.png') }}" alt="">
                                                <span class="text-t">Rachid Scopito</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="chat-content-inside mx-3 mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-778">
                                                    <div class="from">
                                                        Salut comment vas tu ?
                                                    </div>
                                                    <div class="time">20:24</div>
                                                </div>
                                                <div class="mt-778">
                                                    <div class="to">
                                                        Je vais bien et toi ?
                                                    </div>
                                                    <div class="time-right text-right">23:30</div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="chat-text-area " style="position: relative">
                                        <form action="#">
                                            <div class="button-chat">
                                                <div class="d-flex justify-content-end">
                                                    <div class="image-chat">
                                                        <a href="#">
                                                            <img src="{{ asset('images/residential/menu/list/chat.svg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea rows="1" class="form-control chat-textarea" placeholder="Tapez votre message..."></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Overlay -->





<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('development/js/apps.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>



<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</body>
</html>
