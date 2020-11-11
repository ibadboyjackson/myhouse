@if(request()->get('type') === 'bureau')
    <select name="terrasses" id="" class="form-control yt-select"  style="max-width: 234px !important;">

        @if($particulier->terrasses != "")
            <option hidden selected value="{{ $particulier->terrasses }}">{{ $particulier->terrasses }}</option>
        @endif


                        @if(old('terrasses'))
                            <option hidden selected value="{{ old('terrasses') }}">{{ old('terrasses') }}</option>
                        @endif


        <option value="{{ __('myhouse/back/annonces/particulier/description.ceara') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceara') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearb') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearb') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearc') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearc') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceard') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceard') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceare') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceare') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearf') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearf') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearg') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearg') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearh') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearh') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceari') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceari') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearj') }}">{{ __('myhouse/back/annonces/particulier/description.cearj') }}</option>
    </select>

@elseif(request()->get('type') === 'appartement')
    <select name="terrasses" id="" class="form-control yt-select"  style="max-width: 234px !important;">
        @if($particulier->terrasses != "")
            <option hidden selected value="{{ $particulier->terrasses }}">{{ $particulier->terrasses }}</option>
        @endif

                                @if(old('terrasses'))
                            <option hidden selected value="{{ old('terrasses') }}">{{ old('terrasses') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.ceara') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceara') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearb') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearb') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearc') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearc') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceard') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceard') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceare') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceare') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearf') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearf') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearg') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearg') }}</option>
    </select>
@else
    <select name="terrasses" id="" class="form-control yt-select" style="max-width: 234px !important;">
        @if($particulier->terrasses != "")
            <option hidden selected value="{{ $particulier->terrasses }}">{{ $particulier->terrasses }}</option>
        @endif

                                @if(old('terrasses'))
                            <option hidden selected value="{{ old('terrasses') }}">{{ old('terrasses') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.ceara') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceara') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearb') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearb') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearc') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearc') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceard') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceard') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceare') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceare') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearf') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearf') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearg') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearg') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearh') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearh') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceari') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceari') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearj') }}">{{ __('myhouse/back/annonces/particulier/description.cearj') }}</option>
    </select>
@endif

