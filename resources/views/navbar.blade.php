<nav id="navbar">

    <div class="logo">
        PRanjana.
    </div>


    <!-- DESKTOP NAVIGATION -->

    <div class="nav-links">

        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#team">Team</a>
        <a href="#contact">Contact</a>

    </div>


    <!-- MOBILE MENU BUTTON -->

    <button
        class="menu-toggle"
        id="menu-toggle"
        aria-label="Open navigation"
        aria-expanded="false"
    >

        <span></span>
        <span></span>

    </button>

    <script>
    document.addEventListener("DOMContentLoaded", function () {

        const navbar = document.getElementById("navbar");

        const menuToggle =
            document.getElementById("menuToggle");

        const mobileMenu =
            document.getElementById("mobileMenu");

        const menuOverlay =
            document.getElementById("menuOverlay");

        const mobileLinks =
            mobileMenu.querySelectorAll("a");


        /* =====================================================
        NAVBAR SCROLL EFFECT
        ===================================================== */

        function handleNavbarScroll() {

            if (window.scrollY > 30) {

                navbar.classList.add("scrolled");

            } else {

                navbar.classList.remove("scrolled");

            }

        }

        window.addEventListener(
            "scroll",
            handleNavbarScroll
        );

        handleNavbarScroll();


        /* =====================================================
        OPEN MOBILE MENU
        ===================================================== */

        function openMenu() {

            menuToggle.classList.add("active");

            mobileMenu.classList.add("active");

            menuOverlay.classList.add("active");

            menuToggle.setAttribute(
                "aria-expanded",
                "true"
            );

            document.body.style.overflow = "hidden";
        }


        /* =====================================================
        CLOSE MOBILE MENU
        ===================================================== */

        function closeMenu() {

            menuToggle.classList.remove("active");

            mobileMenu.classList.remove("active");

            menuOverlay.classList.remove("active");

            menuToggle.setAttribute(
                "aria-expanded",
                "false"
            );

            document.body.style.overflow = "";
        }


        /* =====================================================
        TOGGLE MENU
        ===================================================== */

        menuToggle.addEventListener(
            "click",
            function () {

                if (
                    mobileMenu.classList.contains("active")
                ) {

                    closeMenu();

                } else {

                    openMenu();

                }

            }
        );


        /* =====================================================
        OVERLAY CLICK
        ===================================================== */

        menuOverlay.addEventListener(
            "click",
            closeMenu
        );


        /* =====================================================
        CLOSE AFTER CLICKING MENU
        ===================================================== */

        mobileLinks.forEach(function (link) {

            link.addEventListener(
                "click",
                closeMenu
            );

        });


        /* =====================================================
        ESCAPE KEY
        ===================================================== */

        document.addEventListener(
            "keydown",
            function (event) {

                if (
                    event.key === "Escape" &&
                    mobileMenu.classList.contains("active")
                ) {

                    closeMenu();

                }

            }
        );

    });
    </script>
</nav>


<!-- =========================================================
     MOBILE SIDEBAR
========================================================= -->

<div class="mobile-menu" id="mobile-menu">

    <div class="mobile-menu-header">

        <span class="mobile-menu-label">
            Navigation
        </span>

        <button
            class="menu-close"
            id="menu-close"
            aria-label="Close navigation"
        >
            ×
        </button>

    </div>


    <div class="mobile-nav-links">

        <a href="#about">
            <span>01</span>
            About
        </a>

        <a href="#services">
            <span>02</span>
            Services
        </a>

        <a href="#team">
            <span>03</span>
            Team
        </a>

        <a href="#contact">
            <span>04</span>
            Contact
        </a>

    </div>


    <div class="mobile-menu-footer">

        <p>
            Public Relations Agency
        </p>

        <p>
            PRanjana.
        </p>

    </div>

</div>


<!-- OVERLAY -->

<div class="menu-overlay" id="menu-overlay"></div>

<nav id="navbar">

    <a href="#home" class="logo">
        PRanjana.
    </a>


    <!-- DESKTOP MENU -->

    <div class="nav-links">

        <a href="#home">
            Home
        </a>

        <a href="#about">
            About
        </a>

        <a href="#services">
            Services
        </a>

        <a href="#team">
            Team
        </a>

        <a href="#contact">
            Contact
        </a>

    </div>


    <!-- MOBILE HAMBURGER -->

    <button
        class="menu-toggle"
        id="menuToggle"
        aria-label="Open menu"
        aria-expanded="false"
    >

        <span></span>
        <span></span>

    </button>

</nav>


<!-- MOBILE SIDEBAR -->

<div
    class="mobile-menu"
    id="mobileMenu"
>

    <a href="#home">
        Home
    </a>

    <a href="#about">
        About
    </a>

    <a href="#services">
        Services
    </a>

    <a href="#team">
        Team
    </a>

    <a href="#contact">
        Contact
    </a>

</div>


<!-- SIDEBAR OVERLAY -->

<div
    class="menu-overlay"
    id="menuOverlay"
></div>