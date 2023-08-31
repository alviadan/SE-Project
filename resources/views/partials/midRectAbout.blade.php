<link rel="stylesheet" href="css/home.css">

<div class="midRect">

    <section class="search_bar py-2">
        <div class="row mx-3 mb-1">
            <div class="col-sm-3 px-1 text-secondary">
                <div class="input-group">
                    <span class="input-group-text p-1"><i class="icon fas fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Contractor Name"
                        aria-label="Contractor Name">
                </div>
            </div>

            <div class="col-sm-3 px-1 text-secondary">
                <div class="input-group">
                    <span class="input-group-text p-1"><i class="icon fa-solid fa-location-dot"></i></span>
                    <input type="text" class="form-control" placeholder="Area, city or town" aria-label="State">
                </div>
            </div>

            <div class="col-sm px-1">
                <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                <div class="input-group">
                    <span class="input-group-text p-1"><i class="icon fa-solid fa-suitcase"></i></span>
                    <select class="form-select text-secondary" id="specificSizeSelect">
                        <option selected>Contractor Specializations</option>
                        <option value="1">Commercial Building Contractor</option>
                        <option value="2">Residential Building Contractor</option>
                        <option value="3">Renovation Contractor</option>
                        <option value="4">Industrial Building Contractor</option>
                        <option value="5">Educational Building Contractor</option>
                        <option value="6">Medical Building Contractor</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="lower_search d-flex justify-content-end align-items-center">
            <p class="text-white my-2 mx-1">Sort By <span class="fw-medium">Relevance</span></p>
            <i class="turun fa-solid fa-chevron-down text-white fs-9"></i>
            <div class="line-divide"></div>
            <button type="button" class="btn btn3 btn-dark px-4 py-1 my-1 ms-2">Search</button>
        </div>
    </section>

    {{-- Karena kalau di loop gt nanti yang carouselnya error jadi bikin versi JSnya.. --}}
    {{-- @include('partials.homeCard')
    @include('partials.homeCard')
    @include('partials.homeCard') --}}

    <div class="container">
        <div id="postcard-container" class="row"></div>
    </div>

</div>

<script src="js/about.js"></script>
