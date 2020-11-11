@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/professionnel/entreprise.aa') }}
@stop

@section('content')
    <form method="post" action = "{{ route('professionnel.menu.entreprise') }}" enctype="multipart/form-data">

    @csrf
        <div class="plateform">
            <div class="plateform-wrap">
                <div class="menu-wrap-x-button">
                    <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" style='cursor: pointer;'>
                          <img src="http://myhouse.com/images/residential/single/x.svg" alt="">
                    </a>
                </div>

                <div class="palateform-title text-uppercase">
                    {{ __('myhouse/back/menu/professionnel/entreprise.ab') }}
                </div>
                <div class="palateform-subtitle-hr"></div>
 
                <div class="entreprise">
                    <div class="ca-page-item-second-enterprise">  
                        <div class="ca-page-item-second-enterprise-box">
                            <div class="ca-page-item-second-enterprise-title">
                                {{ __('myhouse/back/menu/professionnel/entreprise.ac') }}
                            </div>


                            <div class="ca-page-item-second-enterprise-box-box">
                                <div class="ca-page-item-second-enterprise-box-box-item">

                                @isset(auth()->user()->entreprises)


                                    @foreach(auth()->user()->entreprises->take(2) as $entreprise)
                                        
                                        <div class="ca-page-item-second-enterprise-box-box-item-child">
                                
                                            <div class="ca-page-item-second-enterprise-box-box-item-child-one">
                                                            <span class="country-content-content">
                                                                <input type="radio" name ="entreprise_id" id="a{{ $entreprise->id }}" value="{{ $entreprise->id }}" name="radio-groups">
                                                                <label for="a{{ $entreprise->id }}"></label>
                                                            </span>
                                            </div>
                                            <div class="ca-page-item-second-enterprise-box-box-item-child-two">
                                                <img src="{{ asset('development/files/professionnel/entreprise/136/' . $entreprise->image) }}" alt="">
                                            </div>
                                        </div>


                                    @endforeach
                                    
                                @endisset
                            

                            
                            
                     


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="entreprise-title">
                    <div class="ca-page-item-second-enterprise-title">
                        {{ __('myhouse/back/menu/professionnel/entreprise.ad') }}
                    </div>
                </div>
                <div class="entreprise-up">
                    <div class="ca-page-item-third-type-boxe-upload">
                        <div class="upload-img text-center">
                            <label for="file-upload" class="custom-file-upload">
                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                            </label>
                            <input id="file-upload" type="file" name="image" required>
                            <div class="upload-text">{{ __('myhouse/back/menu/professionnel/entreprise.ae') }}</div>
                        </div>
                    </div>
                </div>

                <div class="entreprise-area">
                    <div class="ca-page-item-second-enterprise-title">
                        {{ __('myhouse/back/menu/professionnel/entreprise.af') }}
                    </div>
                    <div class="ca-page-item-second-subscriptionsss">

                        <div class="ca-page-item-second-body">
                            <div class="ca-page-item-second-body-beta">
                                <textarea name="description" id="#" cols="30" required rows="16" class="form-control" placeholder="{{ __('myhouse/back/menu/professionnel/entreprise.ag') }} "></textarea>
                            </div>
                        </div>


                        <div class="ca-page-item-second-footer">
                            <button class="btn btn-connections" type="submit">{{ __('myhouse/back/menu/professionnel/entreprise.ah') }}</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </form>
@stop
