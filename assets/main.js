const cards = document.querySelectorAll('.gallery-card')
const carousel = document.querySelector('#gallerySlider')

cards.forEach(card => {

    card.addEventListener('click', function () {

        let slideIndex = this.getAttribute('data-slide')

        const bsCarousel = bootstrap.Carousel.getOrCreateInstance(carousel)

        bsCarousel.to(slideIndex)

    })

})

const counters = document.querySelectorAll(".counter");

counters.forEach(counter => {

    counter.innerText = "0";

    const update = () => {

        const target = +counter.getAttribute("data-target");
        const c = +counter.innerText;

        const increment = target / 200;

        if (c < target) {
            counter.innerText = `${Math.ceil(c + increment)}`;
            setTimeout(update, 10);
        } else {
            counter.innerText = target;
        }

    };

    update();

});
document.addEventListener("DOMContentLoaded", function () {

    const images = document.querySelectorAll(".gallery-item img");
    const popupImage = document.getElementById("popupImage");
    const popupTitle = document.getElementById("popupTitle");
    const modalElement = document.getElementById("imageModal");

    const imageModal = new bootstrap.Modal(modalElement);

    const tabs = document.querySelectorAll(".gallery-tabs .nav-link");
    const galleryCols = document.querySelectorAll(".gallery-col");

    /* IMAGE POPUP */

    images.forEach(img => {

        img.addEventListener("click", function () {

            popupImage.src = this.src;
            popupTitle.innerText = this.dataset.title;

            imageModal.show();

        });

    });

    /* TAB FILTER */

    tabs.forEach(tab => {

        tab.addEventListener("click", function () {

            let category = this.dataset.category;

            /* active class */
            tabs.forEach(t => t.classList.remove("active"));
            this.classList.add("active");

            galleryCols.forEach(col => {

                let img = col.querySelector("img");
                let imgCategory = img.dataset.category;

                if (category === "all" || imgCategory === category) {

                    col.style.display = "block";

                } else {

                    col.style.display = "none";
                }

            });

        });

    });

});

const jungleTracks = document.querySelectorAll('.jungle-track')

jungleTracks.forEach(track => {

    let index = 0

    setInterval(() => {

        index++

        if (index > 1) {
            index = 0
        }

        track.style.transform = `translateX(-${index * 50}%)`

    }, 3000)

})

/* ================= LOADER ================= */

window.addEventListener("load", function () {

    const loader = document.getElementById("loader");

    // minimum loader time
    const minTime = 600;

    const startTime = Date.now();

    function hideLoader() {

        loader.style.opacity = "0";
        loader.style.transition = "0.5s";

        setTimeout(() => {
            loader.style.display = "none";
        }, 500);
    }

    const elapsed = Date.now() - startTime;

    if (elapsed >= minTime) {
        hideLoader();
    } else {
        setTimeout(hideLoader, minTime - elapsed);
    }

});

/* ================= GO TO TOP ================= */

let goTop = document.getElementById("goTop");

window.addEventListener("scroll", function () {

    if (window.scrollY > 250) {

        goTop.classList.add("show");

    } else {

        goTop.classList.remove("show");

    }

});

goTop.addEventListener("click", function () {

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

});
/* ================= ECO SLIDER AUTO ================= */

document.addEventListener("DOMContentLoaded", function () {

    const jcSlides = document.querySelectorAll(".jc-slide");
    const jcDotsContainer = document.querySelector(".jc-slider-dots");

    let jcIndex = 0;

    /* create dots */

    jcSlides.forEach((slide, i) => {

        let dot = document.createElement("span");

        if (i === 0) dot.classList.add("jc-dot-active");

        jcDotsContainer.appendChild(dot);

        dot.addEventListener("click", () => {

            jcIndex = i;
            jcShowSlide();

        });

    });

    const jcDots = document.querySelectorAll(".jc-slider-dots span");

    function jcShowSlide() {

        jcSlides.forEach(slide =>
            slide.classList.remove("jc-active-slide")
        );

        jcDots.forEach(dot =>
            dot.classList.remove("jc-dot-active")
        );

        jcSlides[jcIndex].classList.add("jc-active-slide");
        jcDots[jcIndex].classList.add("jc-dot-active");

    }

    /* AUTO SLIDE EVERY 2 SECOND */

    setInterval(() => {

        jcIndex++;

        if (jcIndex >= jcSlides.length) {

            jcIndex = 0;

        }

        jcShowSlide();

    }, 2000);

});

document.addEventListener("DOMContentLoaded", function () {

    let selected = {}
    let price = 0

    // BOOK BUTTON
    document.querySelectorAll(".book-btn").forEach(btn => {

        btn.onclick = function () {

            selected = this.dataset
            price = Number(selected.price)

            document.getElementById("modalImg").src = selected.img
            document.getElementById("modalTitle").innerText = selected.title
            document.getElementById("modalDesc").innerText = selected.desc
            document.getElementById("modalPrice").innerText = "₹" + price + "/Night"

            new bootstrap.Modal(
                document.getElementById('detailsModal')
            ).show()
        }
    })

    // CONTINUE BOOKING
    document.getElementById("goForm").onclick = function () {

        bootstrap.Modal
            .getInstance(document.getElementById('detailsModal'))
            .hide()

        document.getElementById("pricePerNight").innerText = "₹" + price
        document.getElementById("totalPrice").innerText = "₹" + price

        document.getElementById("daysInput").value = 1
        document.getElementById("checkIn").value = ""
        document.getElementById("checkOut").value = ""

        new bootstrap.Modal(
            document.getElementById('formModal')
        ).show()
    }

    const checkIn = document.getElementById("checkIn")
    const checkOut = document.getElementById("checkOut")
    const daysInput = document.getElementById("daysInput")

    checkIn.addEventListener("change", () => {
        checkOut.min = checkIn.value
        calculateDays()
    })

    checkOut.addEventListener("change", calculateDays)

    function calculateDays() {

        if (checkIn.value && checkOut.value) {

            const start = new Date(checkIn.value)
            const end = new Date(checkOut.value)

            let diffTime = end - start
            let diffDays = diffTime / (1000 * 60 * 60 * 24)

            if (diffDays <= 0) diffDays = 1

            daysInput.value = diffDays
            updatePrice(diffDays)
        }
    }

    function updatePrice(days) {

        let total = days * price
        document.getElementById("totalPrice").innerText = "₹" + total
    }

    // FINAL BOOK
    document.getElementById("finalBook").onclick = function () {

        bootstrap.Modal
            .getInstance(document.getElementById('formModal'))
            .hide()

        new bootstrap.Toast(
            document.getElementById('bookingToast')
        ).show()
    }

})
