<!-- Modal user First -->
<form method="post" action="{{ route('professionnel.menu.user') }}">

@csrf

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="dialog">
        <div class="modal-content">
            <div class="modal-body">
                <a href="" class="close" data-dismiss="modal" aria-label="Close">
                    <div class="modal-body-x-button">
                        <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                    </div>
                </a>

                <div class="modal-body-title">{{ __('myhouse/back/menu/professionnel/backoffice.aq') }}</div>
                <div class="modal-body-desc">{{ __('myhouse/back/menu/professionnel/backoffice.ar') }}</div>
                <div class="modal-body-content">
                    <div class="modal-body-content-left">
                                <div class="field">
                                    <label for="nom" class="field-label @error('nom') myhouse-is-invalid @enderror">{{ __('myhouse/auth/inscription.ac') }}</label>
                                    <input required type="text" id="nom" name="{{ __('myhouse/auth/inscription.ac') }}" class="field-input" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.ac'))) }}">
                                    @error( str_replace(' ', '_', __('myhouse/auth/inscription.ac')) )
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="ville"  class="field-label">{{ __('myhouse/auth/inscription.ad') }}</label>
                                    <input type="text" required id="ville" name="{{ __('myhouse/auth/inscription.ad') }}" class="field-input" value="{{ old(__('myhouse/auth/inscription.ad')) }}">
                                    @error(str_replace(' ', '_', __('myhouse/auth/inscription.ad')))
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="telephone" class="field-label">{{ __('myhouse/auth/inscription.ae') }}</label>
                                    <input type="text" required id="telephone" name="{{ __('myhouse/auth/inscription.ae') }}" class="field-input" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.ae'))) }}">
                                    @error(str_replace(' ', '_', __('myhouse/auth/inscription.ae')))
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="password" class="field-label">{{ __('myhouse/auth/inscription.af') }}</label>
                                    <input type="password" required id="password" name="{{ __('myhouse/auth/inscription.ao') }}" class="field-input" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.ao'))) }}">

                                    <a href="#" class="show-password password-hide" id = 'password-eye'>
                                        <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                    </a>
                                    @error(str_replace(' ', '_', __('myhouse/auth/inscription.ao')))
                                    <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                    </div>
                    <div class="modal-body-content-right">
                                     <div class="field">
                                        <label for="email" class="field-label">{{ __('myhouse/auth/inscription.ag') }}</label>
                                        <input required type="email" id="email" name="{{ __('myhouse/auth/inscription.ag') }}" class="field-input" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.ag'))) }}">
                                        @error(str_replace(' ', '_', __('myhouse/auth/inscription.ag')))
                                            <span class="myhouse-invalid" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label for="pays" class="field-label">{{ __('myhouse/auth/inscription.ah') }}</label>
                                        <input required type="text" id="pays" name="{{ __('myhouse/auth/inscription.ah') }}" class="field-input" value="{{ old(__('myhouse/auth/inscription.ah')) }}">
                                        @error(str_replace(' ', '_', __('myhouse/auth/inscription.ah')))
                                            <span class="myhouse-invalid" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label for="phone" class="field-label">{{ __('myhouse/auth/inscription.ai') }} <span style="font-size: 12px">{{ __('myhouse/auth/inscription.bbv') }}</span> </label>
                                        <input type="text" id="phone" name="{{ __('myhouse/auth/inscription.ai') }}" class="field-input" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.ai'))) }}">
                                    </div>
                                    <div class="field">
                                        <label required for="passwords" class="field-label">{{ __('myhouse/auth/inscription.aj') }}</label>
                                        <input type="password" id="passwords" name="{{ __('myhouse/auth/inscription.an') }}" class="field-input" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.an'))) }}">
                                        <a href="#" class="show-password password-hide" id = 'password-eyes'>
                                            <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                        </a>

                                    </div>
                    </div>
                </div>
                <div class="modal-body-content-foot">
                    <div class="modal-body-content-foot-title">{{ __('myhouse/back/menu/professionnel/backoffice.aaa') }}</div>
                    <div class="modal-body-content-foot-content">
                        <div class="modal-body-content-foot-content-item">
                            <div class="modal-body-content-foot-content-item-one">
                                <input type="radio" id="admin" name="account_type" checked value="adjont">
                                <label for="admin"></label>
                            </div>
                            <div class="modal-body-content-foot-content-item-two">{{ __('myhouse/back/menu/professionnel/backoffice.aab') }}</div>
                            <div class="modal-body-content-foot-content-item-three">
                                {{ __('myhouse/back/menu/professionnel/backoffice.aac') }}
                            </div>
                        </div>
                        <div class="modal-body-content-foot-content-item">
                            <div class="modal-body-content-foot-content-item-one">
                                <input type="radio" id="admin1" name="account_type" value="manager">
                                <label for="admin1"></label>
                            </div>
                            <div class="modal-body-content-foot-content-item-two">{{ __('myhouse/back/menu/professionnel/backoffice.aad') }}</div>
                            <div class="modal-body-content-foot-content-item-three">
                                {{ __('myhouse/back/menu/professionnel/backoffice.aae') }}
                            </div>
                        </div>
                        <div class="modal-body-content-foot-content-item">
                            <div class="modal-body-content-foot-content-item-one">
                                <input type="radio" id="admin2" name="account_type" value="assistant">
                                <label for="admin2"></label>
                            </div>
                            <div class="modal-body-content-foot-content-item-two">{{ __('myhouse/back/menu/professionnel/backoffice.aaf') }}</div>
                            <div class="modal-body-content-foot-content-item-three">
                                {{ __('myhouse/back/menu/professionnel/backoffice.aag') }}
                            </div>
                        </div>
                    </div>

                    <!-- <div class="modal-body-content-foot-fix">
                        <div class="pc-checkbox">
                            <input type="checkbox" name="#" id="condition">
                            <label for="condition">
                                {{ __('myhouse/back/menu/professionnel/backoffice.aah') }}
                            </label>
                        </div>
                    </div> -->
                    
        
                    
                    
                   <div class="d-flex justify-content-center mt-5">
                         <button class="btn btn-contact" type="submit">{{ __('myhouse/back/menu/professionnel/backoffice.aai') }}</button>
                   </div>

                    <a href="{{ route('menu.charte', ['user' => 'professionnel']) }}" style="text-decoration: none; color: inherit">
                        <div class="modal-body-coontent-foot-terms">{{ __('myhouse/back/menu/professionnel/backoffice.aaj') }}</div>                
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
</form>
<!-- End Modal First -->

<!-- Modal two -->
<div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-body">

                <a href="" class="close" data-dismiss="modal" aria-label="Close">
                    <div class="modal-body-x-button">
                        <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                    </div>
                </a>

                <div class="modal-body-title">{{ __('myhouse/back/menu/professionnel/backoffice.aak') }}</div>
                <div class="modal-body-desc">{{ __('myhouse/back/menu/professionnel/backoffice.aal') }}</div>

                <div class="modal-body-box">
                    <div class="modal-body-box-title">{{ __('myhouse/back/menu/professionnel/backoffice.aam') }}</div>
                    <div class="modal-body-box-img">
                        <img src="{{ asset('images/residential/single/menu/ok.svg') }}" alt="">
                    </div>
                </div>
                <a href="" data-dismiss="modal" aria-label="Close" style="text-decoration: none; color: inherit">
                    <div class="modal-body-coontent-foot-buttons">{{ __('myhouse/back/menu/professionnel/backoffice.aan') }}</div>
                </a>


            </div>

        </div>
    </div>
</div>
<!-- End Modal two -->


<!-- Modal three promotion first -->
<form method="post" action="{{ route('professionnel.menu.promotion') }}">

@csrf
            <input type = "hidden" name="professionnel_id" value="{{ $professionnel_id }}">
            <input type = "hidden" name="user_id" value="{{ auth()->user()->id }}">

            <div class="modal fade" id="promotion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="dialog">
                <div class="modal-content">
                    <div class="modal-body">

                        <a href="" class="close" data-dismiss="modal" aria-label="Close">
                            <div class="modal-body-x-button">
                                <img src="{{ asset('images/residential/single/x.svg') }}" alt=""> 
                            </div>
                        </a>

                        <div class="modal-body-title text-uppercase">{{ __('myhouse/back/menu/professionnel/backoffice.aao') }}</div>
                        <div class="modal-body-desc">{{ __('myhouse/back/menu/professionnel/backoffice.aap') }}</div>

                        <div class="modal-body-content-box">
                            <div class="modal-body-content-box-title">{{ __('myhouse/back/menu/professionnel/backoffice.aaq') }}</div>
                            <div class="modal-body-content-box-block">
                                <div class="modal-body-content-box-block-abs">
                                    <img src="{{ asset('images/residential/single/menu/promo.svg') }}" alt="">
                                </div>
                                <div class="modal-body-content-box-block-st">
                                    <div class="modal-body-content-box-block-first">{{ __('myhouse/back/menu/professionnel/backoffice.aar') }}</div>
                                    <div class="modal-body-content-box-block-second">{{ __('myhouse/back/menu/professionnel/backoffice.abe') }}</div>
                                    <div class="modal-body-content-box-block-three">{{ __('myhouse/back/menu/professionnel/backoffice.aat') }}</div>
                                    <div class="modal-body-content-box-block-four">{{ __('myhouse/back/menu/professionnel/backoffice.aau') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body-content-boxes">
                            <div class="modal-body-content-boxes-title">
                                {{ __('myhouse/back/menu/professionnel/backoffice.aav') }}  <span>{{ __('myhouse/back/menu/professionnel/backoffice.aaw') }}</span>
                            </div>
                            <div class="modal-body-content-boxes-block">
                                <div class="modal-body-content-boxes-b">
                                    <div class="modal-body-content-boxes-block-title">{{ __('myhouse/back/menu/professionnel/backoffice.aax') }}</div>
                                    <div class="modal-body-content-boxes-block-flex">
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" required name="linge11" maxlength="5" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.aay') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" required name="linge12" maxlength="2" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.aaz') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" required name="linge13" maxlength="7" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.aba') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" required name="linge14" maxlength="7" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.abc') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="linge15" maxlength="1" id="" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body-content-boxes-b">
                                    <div class="modal-body-content-boxes-block-title">{{ __('myhouse/back/menu/professionnel/backoffice.abd') }}</div>
                                    <div class="modal-body-content-boxes-block-flex">
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" required name="linge21" maxlength="15" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.abe') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="linge22" maxlength="0" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.abf') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="linge23" maxlength="0" id="" placeholder="" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="linge24" maxlength="0" id="" placeholder="" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="linge25" maxlength="0" id="" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body-content-boxes-b">
                                    <div class="modal-body-content-boxes-block-title">{{ __('myhouse/back/menu/professionnel/backoffice.abg') }}</div>
                                    <div class="modal-body-content-boxes-block-flex">
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" required name="linge31" maxlength="5" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.abh') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" namelinge31 maxlength="10" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.abi') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" required name="linge32" maxlength="10" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.abj') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="linge33" maxlength="10" id="" placeholder="10" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" required name="linge34" maxlength="10" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.abk') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body-content-boxes-b">
                                    <div class="modal-body-content-boxes-block-title">{{ __('myhouse/back/menu/professionnel/backoffice.abl') }}</div>
                                    <div class="modal-body-content-boxes-block-flex">
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" required maxlength="5" name="linge41" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.abm') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" required maxlength="7" name="linge42" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.abn') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" maxlength="8" name="linge43" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.abo') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" maxlength="10" name="linge44" id="" placeholder="{{ __('myhouse/back/menu/professionnel/backoffice.abp') }}" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" maxlength="10" name="linge45" id="" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <a href="" data-toggle="modal" data-target="#p" style="text-decoration: none; color: inherit">
                            <div class="modal-body-coontent-foot-buttons">{{ __('myhouse/back/menu/professionnel/backoffice.abq') }}</div>
                        </a>


                    </div>

                </div>
            </div>
        </div>



<div class="modal fade" id="p" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-body">

                <a href="" class="close" data-dismiss="modal" aria-label="Close">
                    <div class="modal-body-x-button">
                        <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                    </div>
                </a>

                <div class="modal-body-title text-uppercase">{{ __('myhouse/back/menu/professionnel/backoffice.abr') }}</div>
                <div class="modal-body-desc">{{ __('myhouse/back/menu/professionnel/backoffice.abs') }}</div>

                <div class="modal-body-content-box">
                    <div class="modal-body-content-box-title">{{ __('myhouse/back/menu/professionnel/backoffice.abt') }}</div>
                    <div class="modal-body-content-box-blocks">
                        <div class="modal-body-content-box-block-abs">
                            <img src="{{ asset('images/residential/single/menu/promo.svg') }}" alt="">
                        </div>
                        <div class="modal-body-content-box-block-sts">
                            <div class="modal-body-content-box-block-first">{{ __('myhouse/back/menu/professionnel/backoffice.abu') }}</div>
                            <div class="modal-body-content-box-block-second">{{ __('myhouse/back/menu/professionnel/backoffice.abv') }}</div>
                            <div class="modal-body-content-box-block-three">{{ __('myhouse/back/menu/professionnel/backoffice.abw') }}</div>
                            <div class="modal-body-content-box-block-four">{{ __('myhouse/back/menu/professionnel/backoffice.abx') }}</div>
                        </div>
                    </div>
                </div>

                <div class="button-button">
                    <div>
                        <button data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                            <i class="fa fa-chevron-left"></i>
                        </button>
                    </div>
                    <div>
                      

                        <div class="">
                             <button class="btn btn-contact" style="font-size: 13px !important; " type="submit">{{ __('myhouse/back/menu/professionnel/backoffice.aby') }}</button>
                        </div>
                    </div>
                </div>


                <div style="visibility: hidden" class="modal-body-content-boxes">
                    <div class="modal-body-content-boxes-title">
                        Décrire la promotion ou le cadeau  <span>20 mots</span>
                    </div>
                    <div class="modal-body-content-boxes-block">
                        <div class="modal-body-content-boxes-b">
                            <div class="modal-body-content-boxes-block-title">linge 1</div>
                            <div class="modal-body-content-boxes-block-flex">
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="frais" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="de" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="notaire" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="offers!" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body-content-boxes-b">
                            <div class="modal-body-content-boxes-block-title">linge 2</div>
                            <div class="modal-body-content-boxes-block-flex">
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="Contactez-nous" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="vite!" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body-content-boxes-b">
                            <div class="modal-body-content-boxes-block-title">linge 3</div>
                            <div class="modal-body-content-boxes-block-flex">
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="Offre" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="limitée" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="aux" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text" id="" placeholder="10" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="premiers" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body-content-boxes-b">
                            <div class="modal-body-content-boxes-block-title">linge 4</div>
                            <div class="modal-body-content-boxes-block-flex">
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="Louez" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="achetez" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="l'esprit" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="tranquille" class="form-control">
                                </div>
                                <div class="modal-body-content-boxes-block-flex-input">
                                    <input type="text"  id="" placeholder="" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

<!-- End Modal four -->


</form>

