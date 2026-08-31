<section class="hero">
    <div class="hero-content">

        <div class="small-text">
            Public Relations UI Agency
        </div>

        <h1>
            We make<br>
            Brands <span id="typing-text"></span>
        </h1>

        <p class="hero-description">
            Kami membantu brand menemukan cerita,
            membangun hubungan, dan menciptakan
            percakapan yang berarti.
        </p>

        <a href="#contact" class="button">
            Let’s Talk →
        </a>

    </div>
</section>

<script>
    const words = ["Seen", "Talk", "Remembered"];

    const typingText = document.getElementById("typing-text");

    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function typeEffect() {

        const currentWord = words[wordIndex];

        if (!isDeleting) {
            typingText.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;

            if (charIndex === currentWord.length) {
                isDeleting = true;

                setTimeout(typeEffect, 1800);
                return;
            }

        } else {
            typingText.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;

            if (charIndex === 0) {
                isDeleting = false;

                wordIndex++;

                if (wordIndex === words.length) {
                    wordIndex = 0;
                }
            }
        }

        const speed = isDeleting ? 70 : 120;

        setTimeout(typeEffect, speed);
    }

    typeEffect();
</script>