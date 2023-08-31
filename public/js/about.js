
// HOME MidCard
// Data untuk Mid
var plans = [
    {
        contractorName: "Contractor Name 1",
        contractorSpecializations: "Specializations 1",
        hoursAgo: "4 hours ago",
        imageSrc: "img/jennie2.jpg",
        caption: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.",
    },
    {
        contractorName: "Contractor Name 2",
        contractorSpecializations: "Specializations 2",
        hoursAgo: "2 hours ago",
        imageSrc: "img/jennie2.jpg",
        caption: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.",
    },
    {
        contractorName: "Contractor Name 3",
        contractorSpecializations: "Specializations 3",
        hoursAgo: "5 hours ago",
        imageSrc: "img/jennie.jpg",
        caption: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.",
    },
    // Add more plans here...
];

var postcardContainer = document.getElementById("postcard-container");
for (var i = 0; i < plans.length; i++) {
    var plan = plans[i];

    var cardHtml = `
        <div class="Postcard-container container bg-light mt-3">
            <div class="top-postCard d-flex my-2 px-1 py-2">
                <img src="${plan.imageSrc}" class="rounded-circle profile-picture object-fit-cover" width="50px" height="50px" alt="Jennie">
                <div class="post-profile d-block ms-3">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">${plan.contractorName}</h6>
                        <p class="text-secondary mb-0 ms-2">. ${plan.hoursAgo}</p>
                    </div>
                    <p class="text-secondary mb-0">${plan.contractorSpecializations}</p>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <p class="mb-0 ms-2">5/5</p>
                    </div>
                </div>
            </div>

            <div class="mid-postCard">
                <div id="carouselExampleIndicators${i}" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators${i}" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators${i}" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators${i}" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="${plan.imageSrc}" class="d-block w-100 project-carousel" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="${plan.imageSrc}" class="d-block w-100 project-carousel" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="${plan.imageSrc}" class="d-block w-100 project-carousel" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators${i}"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators${i}"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="caption py-2">
                    <p>${plan.caption}</p>
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
    `;

    postcardContainer.innerHTML += cardHtml;
}
