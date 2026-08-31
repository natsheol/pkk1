<section class="team" id="team">

    <div class="team-header">

        <div>
            <div class="section-label">
                Our Team
            </div>

            <h2>
                Meet<br>
                Our Consultants
            </h2>
        </div>

        <p>
            Kami adalah tim kecil yang menggabungkan
            kreativitas, strategi, dan komunikasi untuk
            menciptakan solusi PR yang meaningful.
        </p>

    </div>


    <!-- =========================
         TEAM CAROUSEL
    ========================= -->

    <div class="team-carousel-wrapper">


        <!-- LEFT CHEVRON -->

        <button
            type="button"
            class="carousel-arrow carousel-prev"
            aria-label="Previous team member"
        >
            &#8249;
        </button>


        <!-- CAROUSEL -->

        <div class="team-carousel">

            <div class="team-list">


                <!-- =========================
                     MEMBER 01
                ========================= -->

                <div class="team-member">

                    <div class="member-photo">

                        <img
                            src="{{ asset('images/team/nats.png') }}"
                            alt="Hasanatun N. Syakh"
                        >

                    </div>

                    <div class="member-info">

                        <h3>
                            Hasanatun N. Syakh
                        </h3>

                        <span>
                            PR Consultant
                        </span>

                        <a href="https://www.linkedin.com/in/nadiyyahsyakh" target="_blank">
                            LinkedIn ↗
                        </a>

                    </div>

                </div>


                <!-- =========================
                     MEMBER 02
                ========================= -->

                <div class="team-member">

                    <div class="member-photo">

                        <img
                            src="{{ asset('images/team/rena.png') }}"
                            alt="Zhuan Renatha"
                        >

                    </div>

                    <div class="member-info">

                        <h3>
                            Zhuan Renatha
                        </h3>

                        <span>
                            PR Consultant
                        </span>

                        <a href="https://www.linkedin.com/in/zhuan-renatha-860824398/" target="_blank">
                            LinkedIn ↗
                        </a>

                    </div>

                </div>


                <!-- =========================
                     MEMBER 03
                ========================= -->

                <div class="team-member">

                    <div class="member-photo">

                        <img
                            src="{{ asset('images/team/alfath.png') }}"
                            alt="Muhammad Alfath K. R."
                        >

                    </div>

                    <div class="member-info">

                        <h3>
                            Muhammad Alfath K. R.
                        </h3>

                        <span>
                            PR Consultant
                        </span>

                        <a href="https://www.linkedin.com/in/muhammad-alfath-kesuma-ramadhan-683380302/" target="_blank">
                            LinkedIn ↗
                        </a>

                    </div>

                </div>


            </div>

        </div>


        <!-- RIGHT CHEVRON -->

        <button
            type="button"
            class="carousel-arrow carousel-next"
            aria-label="Next team member"
        >
            &#8250;
        </button>


    </div>


    <!-- =========================
         MOBILE INDICATOR
    ========================= -->

    <div class="carousel-indicator">

        <span class="carousel-current">
            01
        </span>

        <span class="carousel-line"></span>

        <span>
            03
        </span>

    </div>


    <!-- =========================
         TEAM CAROUSEL SCRIPT
    ========================= -->

    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const carousel =
                document.querySelector(".team-carousel");

            const teamList =
                document.querySelector(".team-list");

            const prevButton =
                document.querySelector(".carousel-prev");

            const nextButton =
                document.querySelector(".carousel-next");

            const currentNumber =
                document.querySelector(".carousel-current");


            if (
                !carousel ||
                !teamList ||
                !prevButton ||
                !nextButton ||
                !currentNumber
            ) {
                return;
            }


            /* =========================
               ORIGINAL MEMBERS
            ========================= */

            const originalMembers =
                Array.from(
                    teamList.querySelectorAll(".team-member")
                );


            const totalMembers =
                originalMembers.length;


            let currentIndex = 0;


            /* =========================
               MOBILE CHECK
            ========================= */

            function isMobile() {

                return window.innerWidth <= 600;

            }


            /* =========================
               GET ITEM WIDTH
            ========================= */

            function getItemWidth() {

                const member =
                    teamList.querySelector(".team-member");

                if (!member) {
                    return 0;
                }

                const gap = 20;

                return member.offsetWidth + gap;

            }


            /* =========================
               CREATE CLONES
            ========================= */

            function createClones() {

                if (!isMobile()) {
                    return;
                }


                /*
                 * Prevent duplicate clones
                 */

                if (
                    teamList.querySelector(".carousel-clone")
                ) {
                    return;
                }


                /*
                 * Clone last member
                 */

                const lastClone =
                    originalMembers[
                        originalMembers.length - 1
                    ].cloneNode(true);


                /*
                 * Clone first member
                 */

                const firstClone =
                    originalMembers[0]
                        .cloneNode(true);


                lastClone.classList.add(
                    "carousel-clone"
                );

                firstClone.classList.add(
                    "carousel-clone"
                );


                /*
                 * Put last clone
                 * at the beginning
                 */

                teamList.insertBefore(
                    lastClone,
                    teamList.firstChild
                );


                /*
                 * Put first clone
                 * at the end
                 */

                teamList.appendChild(
                    firstClone
                );


                /*
                 * Start at MEMBER 01
                 */

                setTimeout(function () {

                    carousel.scrollLeft =
                        getItemWidth();

                }, 50);

            }


            /* =========================
               UPDATE INDICATOR
            ========================= */

            function updateIndicator() {

                if (!isMobile()) {
                    return;
                }


                const itemWidth =
                    getItemWidth();


                if (!itemWidth) {
                    return;
                }


                const position =
                    Math.round(
                        carousel.scrollLeft /
                        itemWidth
                    );


                let realIndex =
                    position - 1;


                /*
                 * Clone 03
                 */

                if (realIndex < 0) {

                    realIndex =
                        totalMembers - 1;

                }


                /*
                 * Clone 01
                 */

                if (realIndex >= totalMembers) {

                    realIndex = 0;

                }


                currentNumber.textContent =
                    String(realIndex + 1)
                        .padStart(2, "0");

            }


            /* =========================
               NEXT SLIDE
            ========================= */

            function nextSlide() {

                if (!isMobile()) {
                    return;
                }


                const itemWidth =
                    getItemWidth();


                carousel.scrollTo({

                    left:
                        carousel.scrollLeft +
                        itemWidth,

                    behavior: "smooth"

                });

            }


            /* =========================
               PREVIOUS SLIDE
            ========================= */

            function prevSlide() {

                if (!isMobile()) {
                    return;
                }


                const itemWidth =
                    getItemWidth();


                carousel.scrollTo({

                    left:
                        carousel.scrollLeft -
                        itemWidth,

                    behavior: "smooth"

                });

            }


            /* =========================
               BUTTON EVENTS
            ========================= */

            nextButton.addEventListener(
                "click",
                nextSlide
            );


            prevButton.addEventListener(
                "click",
                prevSlide
            );


            /* =========================
               INFINITE CAROUSEL
            ========================= */

            let scrollTimer;


            carousel.addEventListener(
                "scroll",
                function () {

                    updateIndicator();


                    clearTimeout(
                        scrollTimer
                    );


                    scrollTimer =
                        setTimeout(
                            function () {

                                if (!isMobile()) {
                                    return;
                                }


                                const itemWidth =
                                    getItemWidth();


                                if (!itemWidth) {
                                    return;
                                }


                                const position =
                                    Math.round(
                                        carousel.scrollLeft /
                                        itemWidth
                                    );


                                /*
                                 * 1 → 2 → 3 → 1
                                 */

                                if (
                                    position ===
                                    totalMembers + 1
                                ) {

                                    carousel.scrollTo({

                                        left:
                                            itemWidth,

                                        behavior:
                                            "instant"

                                    });

                                }


                                /*
                                 * 1 → 3
                                 */

                                else if (
                                    position === 0
                                ) {

                                    carousel.scrollTo({

                                        left:
                                            totalMembers *
                                            itemWidth,

                                        behavior:
                                            "instant"

                                    });

                                }

                            },
                            100
                        );

                }
            );


            /* =========================
               INITIALIZE
            ========================= */

            createClones();

            updateIndicator();


            /* =========================
               HANDLE RESIZE
            ========================= */

            window.addEventListener(
                "resize",
                function () {

                    if (isMobile()) {

                        createClones();

                    }

                }
            );

        });

    </script>

</section>