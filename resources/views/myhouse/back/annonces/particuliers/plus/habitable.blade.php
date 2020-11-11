@if (request()->type == "bureau" || request()->type == "plateau")

                                                                            <div class="ca-page-surface">
                                                                            <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.babl') }}</div>
                                                                            <div class="ca-page-surface-input">
                                                                                <div class="ca-page-surface-input-field">
                                                                                    <input type="text" name="surface_habitable" value="{{ $particulier->surface_habitable ?? old('surface_habitable') }}" id="" class="form-control @error('surface_habitable') man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                                </div>
                                                                                <div class="ca-page-surface-input-unit">m²</div>
                                                                            </div>
                                                                            @error('surface_habitable') 
                                                                                <span class="myhouse-invalid" role="alert" style="margin-left: 27px;">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror 
                                                                        </div>

@else

                                                                        <div class="ca-page-surface">
                                                                            <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ae') }}</div>
                                                                            <div class="ca-page-surface-input">
                                                                                <div class="ca-page-surface-input-field">
                                                                                    <input type="text" name="surface_habitable" value="{{ $particulier->surface_habitable ?? old('surface_habitable') }}" id="" class="form-control @error('surface_habitable') man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                                </div>
                                                                                <div class="ca-page-surface-input-unit">m²</div>
                                                                            </div>
                                                                            @error('surface_habitable') 
                                                                                <span class="myhouse-invalid" role="alert" style="margin-left: 27px;">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror 
                                                                        </div>

@endif