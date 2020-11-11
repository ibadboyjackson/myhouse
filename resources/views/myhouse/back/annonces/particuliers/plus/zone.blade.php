

<div class="ca-page-item-second-body-card-item-body-item">
    <div class="ca-page-surface">
        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.xeq') }}</div>
        <div class="ca-page-surface-input" style="margin-left: 0;">
            <div class="ca-page-surface-input-fields">
                    <select name="zone_disponible" id="" class="form-control yt-select" style="font-size: 16px; max-width: 232px; margin-top: -8px; min-height: 19px;">

                        @if($particulier->zone_disponible != "")
                            <option hidden selected value="{{ $particulier->zone_disponible }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  $particulier->zone_disponible ) }}</option>
                        @endif

                        @if(old('zone_disponible'))
                            
                            

                            @if (old('zone_disponible') === __('myhouse/back/annonces/particulier/description.bbax'))
                                <option hidden selected value="{{ old('zone_disponible') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  old('zone_disponible') ) }}</option>
                            @endif


                            @if (old('zone_disponible') === __('myhouse/back/annonces/particulier/description.bbay'))
                                <option hidden selected value="{{ old('zone_disponible') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  old('zone_disponible') ) }}</option>
                            @endif


                            @if (old('zone_disponible') === __('myhouse/back/annonces/particulier/description.bbaz'))
                                <option hidden selected value="{{ old('zone_disponible') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  old('zone_disponible') ) }}</option>
                            @endif


                            @if (old('zone_disponible') === __('myhouse/back/annonces/particulier/description.bbba'))
                                <option hidden selected value="{{ old('zone_disponible') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  old('zone_disponible') ) }}</option>
                            @endif

                            @if (old('zone_disponible') === __('myhouse/back/annonces/particulier/description.bbbb'))
                                <option hidden selected value="{{ old('zone_disponible') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  old('zone_disponible') ) }}</option>
                            @endif


                            @if (old('zone_disponible') === __('myhouse/back/annonces/particulier/description.bbax'))
                                <option hidden selected value="{{ old('zone_disponible') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  old('zone_disponible') ) }}</option>
                            @endif






                        @endif

                        <option value="{{ __('myhouse/back/annonces/particulier/description.bbax') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  __('myhouse/back/annonces/particulier/description.bbax')) }}</option>
                        <option value="{{ __('myhouse/back/annonces/particulier/description.bbay') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  __('myhouse/back/annonces/particulier/description.bbay')) }}</option>
                        <option value="{{ __('myhouse/back/annonces/particulier/description.bbaz') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  __('myhouse/back/annonces/particulier/description.bbaz')) }}</option>
                        <option value="{{ __('myhouse/back/annonces/particulier/description.bbba') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  __('myhouse/back/annonces/particulier/description.bbba')) }}</option>
                        <option value="{{ __('myhouse/back/annonces/particulier/description.bbbb') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  __('myhouse/back/annonces/particulier/description.bbbb')) }}</option>
                        <option value="{{ __('myhouse/back/annonces/particulier/description.bbbc') }}">{{ str_replace(__('myhouse/back/annonces/particulier/description.xeq'), '',  __('myhouse/back/annonces/particulier/description.bbbc')) }}</option>
                    </select>

            </div>

        </div>
    </div>
</div>











