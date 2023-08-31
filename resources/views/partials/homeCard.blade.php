{{-- ini untuk masukin card rencana buat backendnya --}}
<div class="Postcard-container container bg-light">
    <div class="top-postCard d-flex my-2 px-3 py-2">
        <img src="img/jennie.jpg" class="rounded-circle profile-picture object-fit-cover" width="50px" height="50px"
            alt="Jennie">
        <div class="post-profile d-block ms-3">
            <div class="d-flex align-items-center">
                <h6 class="mb-0">Contractor Name</h6>
                <p class="text-secondary mb-0 ms-2">. 4 hours ago</p>
            </div>
            <p class="text-secondary mb-0">Contractor Specializations</p>
            <div class="d-flex align-items-center">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p class="mb-0 ms-2">5/5</p>
            </div>
        </div>

        <div class="ms-auto d-flex align-items-center fw-medium">
            <div class="follow-button">
                <a class="d-flex align-items-center text-decoration-none" href="#">
                    <i class="fa-solid fa-plus"></i>
                    <p class="mb-0 ms-1">Follow</p>
                </a>
            </div>
        </div>
    </div>

    <div class="mid-postCard">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/jennie.jpg" class="d-block w-100 project-carousel" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/jennie2.jpg" class="d-block w-100 project-carousel" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/jennie.jpg" class="d-block w-100 project-carousel" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="caption py-2">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                ultricies nec, pelle</p>
        </div>

        <hr class="solid mt-1 mb-0 pb-2 border-2">

        <div class="d-flex pb-2">
            <button type="button" id="like" class="btn btn4 btn-dark px-4 py-1 my-1 ms-0"><i
                    class="fa-solid fa-thumbs-up"></i> Like</button>
            <button type="button" class="btn btn4 btn-dark px-4 ms-3 py-1 my-1"><i
                    class="fa-solid fa-location-arrow"></i> Direct</button>
        </div>
    </div>
</div>
