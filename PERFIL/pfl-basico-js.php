<script>
        let currentIndex = 0;

        function moveCarousel(direction) {
            const carrossel = document.getElementById('carrossel');
            const totalTokens = carrossel.children.length;
            currentIndex = (currentIndex + direction + totalTokens) % totalTokens;
            const newTransformValue = -currentIndex * (300 + 20);
            carrossel.style.transform = `translateX(${newTransformValue}px)`;
        }
    </script>