@include('development.menu.include.head')
@include('development.next.include.myhouseNav')


<div class="menu-wrap-full">
    <div class="menu-wrap-content">

        <!-- X button -->
            <div class="menu-wrap-x-button">
                <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
            </div>
        <!-- End X button -->

    @if ($user === 'neuf')
        @include('development.menu.include.neuf.aside')
    @endif

    @if ($user === 'professionnel')
        @include('development.menu.include.professionnel.aside')
    @endif

    @if ($user === 'particulier')
        @include('development.menu.include.particulier.aside')
    @endif

    <!-- List -->

        <div class="menu-body stf">
            <div class="menu-body-title pl-var">messagerie</div>
            <div class="menu-body-flex">
                <div class="menu-body-hr"></div>
                @if ($user === 'professionnel')
                    <div class="menu-body-subs">
                        <span class="menu-body-subs-one">Compte Manager</span>
                        <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                    </div>
                @endif
            </div>

            <div class="menu-body-chat pl-var">
                <div class="menu-body-chat-box">
                    <div class="menu-body-chat-box-item">
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
                                            <span class="text-bottoms">Lorem ipsum …</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-chat">
                                    <div>
                                        <div class="chat-first">
                                            <img src="{{ asset('images/residential/menu/list/3.png') }}" alt="">
                                            <span class="text-top">Rachid Scopito <span class="fl-right"> 9 min</span></span>
                                            <br>
                                            <span class="text-bottoms">Lorem ipsum …</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-chat">
                                    <div>
                                        <div class="chat-first">
                                            <img src="{{ asset('images/residential/menu/list/1.png') }}" alt="">
                                            <span class="text-top">Rachid Scopito <span class="fl-right"> 1 min</span></span>
                                            <br>
                                            <span class="text-bottoms">Lorem ipsum …</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-chat">
                                    <div>
                                        <div class="chat-first">
                                            <img src="{{ asset('images/residential/menu/list/2.png') }}" alt="">
                                            <span class="text-top">Rachid Scopito <span class="fl-right"> 6 min</span></span>
                                            <br>
                                            <span class="text-bottoms">Lorem ipsum …</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-chat">
                                    <div>
                                        <div class="chat-first">
                                            <img src="{{ asset('images/residential/menu/list/6.png') }}" alt="">
                                            <span class="text-top">Rachid Scopito <span class="fl-right"> 10 min</span></span>
                                            <br>
                                            <span class="text-bottoms">Lorem ipsum …</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-chat">
                                    <div>
                                        <div class="chat-first">
                                            <img src="{{ asset('images/residential/menu/list/4.png') }}" alt="">
                                            <span class="text-top">Rachid Scopito <span class="fl-right"> 1 min</span></span>
                                            <br>
                                            <span class="text-bottoms">Lorem ipsum …</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-chat">
                                    <div>
                                        <div class="chat-first">
                                            <img src="{{ asset('images/residential/menu/list/1.png') }}" alt="">
                                            <span class="text-top">Rachid Scopito <span class="fl-right"> 3 min</span></span>
                                            <br>
                                            <span class="text-bottoms">Lorem ipsum dolor …</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-chat">
                                    <div>
                                        <div class="chat-first">
                                            <img src="{{ asset('images/residential/menu/list/1.png') }}" alt="">
                                            <span class="text-top">Rachid Scopito <span class="fl-right"> 3 min</span></span>
                                            <br>
                                            <span class="text-bottoms">Lorem ipsum …</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-chat">
                                    <div>
                                        <div class="chat-first">
                                            <img src="{{ asset('images/residential/menu/list/1.png') }}" alt="">
                                            <span class="text-top">Rachid Scopito <span class="fl-right"> 3 min</span></span>
                                            <br>
                                            <span class="text-bottoms">Lorem ipsum …</span>
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
                    </div>
                    <div class="menu-body-chat-box-item">
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

        <!-- End List -->

        <!--
          <div class="menu-body-profile-box-button">ENVOYER</div>
        -->

    </div>
</div>









@include('development.menu.include.footer')



