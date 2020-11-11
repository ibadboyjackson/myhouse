@if(request()->get('type') === 'local_industriel')
    <select name="amenagement_type" id="" class="form-control yt-select">

        @if($particulier->amenagement_type != "")
            <option hidden selected value="{{ $particulier->amenagement_type }}">{{ $particulier->amenagement_type }}</option>
        @endif


                        @if(old('amenagement_type'))
                            <option hidden selected value="{{ old('amenagement_type') }}">{{ old('amenagement_type') }}</option>
                        @endif


        <option value="{{ __('myhouse/back/annonces/particulier/description.bbui') }}">{{ __('myhouse/back/annonces/particulier/description.bbui') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuj') }}">{{ __('myhouse/back/annonces/particulier/description.bbuj') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuk') }}">{{ __('myhouse/back/annonces/particulier/description.bbuk') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbul') }}">{{ __('myhouse/back/annonces/particulier/description.bbul') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbum') }}">{{ __('myhouse/back/annonces/particulier/description.bbum') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbunu') }}">{{ __('myhouse/back/annonces/particulier/description.bbunu') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuo') }}">{{ __('myhouse/back/annonces/particulier/description.bbuo') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbup') }}">{{ __('myhouse/back/annonces/particulier/description.bbup') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuq') }}">{{ __('myhouse/back/annonces/particulier/description.bbuq') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbur') }}">{{ __('myhouse/back/annonces/particulier/description.bbur') }}</option>
    </select>
@elseif(request()->get('type') === 'immeuble')

    <select name="amenagement_type" id="" class="form-control yt-select">
        @if($particulier->amenagement_type != "")
            <option hidden selected value="{{ $particulier->amenagement_type }}">{{ $particulier->amenagement_type }}</option>
        @endif


                        @if(old('amenagement_type'))
                            <option hidden selected value="{{ old('amenagement_type') }}">{{ old('amenagement_type') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.bbui') }}">{{ __('myhouse/back/annonces/particulier/description.bbui') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuj') }}">{{ __('myhouse/back/annonces/particulier/description.bbuj') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuk') }}">{{ __('myhouse/back/annonces/particulier/description.bbuk') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbul') }}">{{ __('myhouse/back/annonces/particulier/description.bbul') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbum') }}">{{ __('myhouse/back/annonces/particulier/description.bbum') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.a') }}">{{ __('myhouse/back/annonces/particulier/description.a') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.b') }}">{{ __('myhouse/back/annonces/particulier/description.b') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.c') }}">{{ __('myhouse/back/annonces/particulier/description.c') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.d') }}">{{ __('myhouse/back/annonces/particulier/description.d') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.e') }}">{{ __('myhouse/back/annonces/particulier/description.e') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.f') }}">{{ __('myhouse/back/annonces/particulier/description.f') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.g') }}">{{ __('myhouse/back/annonces/particulier/description.g') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.h') }}">{{ __('myhouse/back/annonces/particulier/description.h') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.i') }}">{{ __('myhouse/back/annonces/particulier/description.i') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.j') }}">{{ __('myhouse/back/annonces/particulier/description.j') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.k') }}">{{ __('myhouse/back/annonces/particulier/description.k') }}</option>


        <option value="{{ __('myhouse/back/annonces/particulier/description.bbunu') }}">{{ __('myhouse/back/annonces/particulier/description.bbunu') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuo') }}">{{ __('myhouse/back/annonces/particulier/description.bbuo') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbup') }}">{{ __('myhouse/back/annonces/particulier/description.bbup') }}</option>


        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuq') }}">{{ __('myhouse/back/annonces/particulier/description.bbuq') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbur') }}">{{ __('myhouse/back/annonces/particulier/description.bbur') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.l') }}">{{ __('myhouse/back/annonces/particulier/description.l') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.m') }}">{{ __('myhouse/back/annonces/particulier/description.m') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.n') }}">{{ __('myhouse/back/annonces/particulier/description.n') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.o') }}">{{ __('myhouse/back/annonces/particulier/description.o') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.p') }}">{{ __('myhouse/back/annonces/particulier/description.p') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.q') }}">{{ __('myhouse/back/annonces/particulier/description.q') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.r') }}">{{ __('myhouse/back/annonces/particulier/description.r') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.s') }}">{{ __('myhouse/back/annonces/particulier/description.s') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.t') }}">{{ __('myhouse/back/annonces/particulier/description.t') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.u') }}">{{ __('myhouse/back/annonces/particulier/description.u') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.v') }}">{{ __('myhouse/back/annonces/particulier/description.v') }}</option>


    </select>


@else



    <select name="amenagement_type" id="" class="form-control yt-select">
        @if($particulier->amenagement_type != "")
            <option hidden selected value="{{ $particulier->amenagement_type }}">{{ $particulier->amenagement_type }}</option>
        @endif

                        @if(old('amenagement_type'))
                            <option hidden selected value="{{ old('amenagement_type') }}">{{ old('amenagement_type') }}</option>
                        @endif


        <option value="{{ __('myhouse/back/annonces/particulier/description.bbui') }}">{{ __('myhouse/back/annonces/particulier/description.bbui') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuj') }}">{{ __('myhouse/back/annonces/particulier/description.bbuj') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuk') }}">{{ __('myhouse/back/annonces/particulier/description.bbuk') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbul') }}">{{ __('myhouse/back/annonces/particulier/description.bbul') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbum') }}">{{ __('myhouse/back/annonces/particulier/description.bbum') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbun') }}">{{ __('myhouse/back/annonces/particulier/description.bbun') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuo') }}">{{ __('myhouse/back/annonces/particulier/description.bbuo') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbup') }}">{{ __('myhouse/back/annonces/particulier/description.bbup') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbuq') }}">{{ __('myhouse/back/annonces/particulier/description.bbuq') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bbur') }}">{{ __('myhouse/back/annonces/particulier/description.bbur') }}</option>
    </select>
@endif
