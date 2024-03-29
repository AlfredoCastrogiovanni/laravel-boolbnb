@extends('layouts.app')

@section('title')
    @yield('title')
@endsection

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection

@section('main-content')
    <div class="container">
        <div class="row my-row rounded-5 p-4 my-4">
            <div class="col-12 mb-4">
                <h1 class="my-text-primary fw-medium">@yield('heading')</h1>
            </div>
            <div class="col-12">
                <form action="@yield('action')" method="POST" enctype="multipart/form-data">
                    @csrf
                    @yield('method')
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="mb-3">
                                <label for="title" class="form-label my-text-primary fw-semibold my-text-primary">Nome Appartamento*</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title', $apartment->title) }}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label my-text-primary fw-semibold my-text-primary">Categoria Appartamento:*</label>
                                    <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                        <option selected>Scegli una Categoria</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id}}"{{ $category->id == old('category_id', $apartment->category_id) ? 'selected' : '' }}>
                                            {{$category->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="mb-3">
                                <label for="img_url" class="form-label my-text-primary fw-semibold my-text-primary">Immagine Appartamento*</label>
                                <input type="file" class="form-control @error('img_url') is-invalid @enderror" name="img_url" id="img_url" value="{{ str_starts_with(old('img_url', $apartment->img_url), 'http') ? old('img_url', $apartment->img_url) : '' }}">
                                @error('img_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input my-check" type="radio" name='imageOrUrl' id="fileRadio" value="file" checked>
                                    <label class="form-check-label" for="fileRadio">File</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input my-check" type="radio" name='imageOrUrl' value="url" id="urlRadio">
                                    <label class="form-check-label" for="urlRadio">Url</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="mb-3 position-relative">
                                <label for="address" class="form-label my-text-primary fw-semibold my-text-primary">Indirizzo*</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{ old('address', $apartment->address) }}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <ul id="results" class="d-none overflow-hidden list-unstyled position-absolute w-50"></ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div id="room_number_wrapper" class="mb-3">
                                <label for="room_number" class="form-label my-text-primary fw-semibold my-text-primary">Numero Stanze*</label>
                                <input type="number" class="form-control @error('room_number') is-invalid @enderror numberValidation" name="room_number" id="room_number" value="{{ old('room_number', $apartment->room_number) }}">
                                @error('room_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="mb-3">
                                <label for="bed_number" class="form-label my-text-primary fw-semibold my-text-primary">Numero Letti*</label>
                                <input type="number" class="form-control @error('bed_number') is-invalid @enderror numberValidation" name="bed_number" id="bed_number" value="{{ old('bed_number', $apartment->bed_number) }}">
                                @error('bed_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="mb-3">
                                <label for="toilet_number" class="form-label my-text-primary fw-semibold my-text-primary">Numero Bagni*</label>
                                <input type="number" class="form-control @error('toilet_number') is-invalid @enderror numberValidation" name="toilet_number" id="toilet_number" value="{{ old('toilet_number', $apartment->toilet_number) }}">
                                @error('toilet_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="mb-3">
                                <label for="square_meters" class="form-label my-text-primary fw-semibold my-text-primary">M<sup>2</sup> Totali*</label>
                                <input type="number" class="form-control @error('square_meters') is-invalid @enderror numberValidation" name="square_meters" id="square_meters" value="{{ old('square_meters', $apartment->square_meters) }}">
                                @error('square_meters')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="description" class="form-label my-text-primary fw-semibold my-text-primary">Descrizione*</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ old('description', $apartment->description) }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-11 mb-3">
                            <label for="description" class="form-label my-text-primary fw-semibold my-text-primary">Servizi*</label>
                            <div class="row">
                                @foreach ($services as $service)
                                    <div class="col-6 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input my-check" type="checkbox" name="services[]" value="{{ $service->id }}" id="check-{{ $service->id }}"
                                            @checked(in_array( $service->id, old('services', $apartment->services->pluck('id')->toArray())))>
                                            <label class="form-check-label" for="check-{{ $service->id }}">
                                                {{ $service->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                                @error('services')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-1 pt-md-4">
                            <div class="mb-3 d-flex justify-content-start justify-content-md-end">
                                <div class="form-check">
                                    <input class="form-check-input my-check" type="checkbox" name="is_visible" id="is_visible" @checked(old('is_visible', $apartment->is_visible))>
                                    <label class="form-check-label" for="is_visible">
                                        Visibile
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn custom-btn-purple">@yield('button-text')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.25.0/services/services-web.min.js"></script>

    <script>
        // Image Input Switch
        let fileRadio = document.getElementById('fileRadio');
        let urlRadio = document.getElementById('urlRadio');
        let input = document.getElementById('img_url');

        fileRadio.addEventListener('change', () => {
            if (fileRadio.checked) {
                input.setAttribute('type', 'file');
            } else {
                input.setAttribute('type', 'text');
            }
        });

        urlRadio.addEventListener('change', () => {
            if (urlRadio.checked) {
                input.setAttribute('type', 'text');
            } else {
                input.setAttribute('type', 'file');
            }
        });

        // Autocomplete
        async function file_get_content(uri, callback) {
            let res = await fetch(uri),
                ret = await res.text();
            return callback ? callback(ret) : ret;
        }

        const queryInput = document.getElementById('address');

        queryInput.addEventListener('input', () => {
            const resultsContainer = document.getElementById('results');

            apiKey = "{{ env('TOMTOM_API_KEY') }}";
            addressQuery = queryInput.value.replace(' ', '+')

            let endpoint = `https://api.tomtom.com/search/2/geocode/${addressQuery}.json?key=${apiKey}`

            let results = '';
            resultsContainer.innerHTML = '';

            let queryValue = queryInput.value;
            queryValue.length <= 3 ? resultsContainer.classList.add('d-none') : '';

            if(queryValue.length > 3) {
                file_get_content(endpoint).then( response => {
                    results = JSON.parse(response);
                    console.log(results);
                    
                    for(let i = 0; i < 4; i++) {
                        let li = document.createElement('li');
                        li.textContent = results.results[i].address.freeformAddress;
                        li.addEventListener('click', () => {
                            queryInput.value = results.results[i].address.freeformAddress;
                            resultsContainer.classList.add('d-none');
                        })
                        resultsContainer.append(li);
                    }
                    resultsContainer.classList.remove('d-none');
                });
            }
        })

        // Validation
        const inputList = document.getElementsByClassName('numberValidation');
        const inputArray = Array.from(inputList);
        inputArray.forEach(element => {
            element.addEventListener('change', () => {
                if(element.value <= 0 && element.value != '') {
                    element.classList.add('is-invalid');
                    let errorEl = document.createElement('span');
                    errorEl.classList.add('invalid-feedback')
                    errorEl.textContent = 'Inserire un numero positivo!'
                    element.insertAdjacentElement('afterend', errorEl)
                } else if(element.value == '') {
                    element.classList.remove('is-invalid');
                }
            });
        });
    </script>
@endsection
