<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    
    
    //CARROSSEL DAS IMAGENS
    let currentIndex = 0;

    function moveCarousel(direction) {
        const carrossel = document.getElementById('carrossel');
        const totalTokens = carrossel.children.length;
        currentIndex = (currentIndex + direction + totalTokens) % totalTokens;
        const newTransformValue = -currentIndex * (300 + 20);
        carrossel.style.transform = `translateX(${newTransformValue}px)`;
    }

    //MODIFICAÇÃO DO SELECT E PERSONAGENS
    document.addEventListener("DOMContentLoaded", function () {
    const selectElement = document.getElementById('personagem-select');

    function filterTokens() {
        const selectedPersonagem = selectElement.value;
        const tokens = document.querySelectorAll('.carrossel .token');

        tokens.forEach(function (token) {
            const personagem = token.getAttribute('data-personagem');

            if (personagem === selectedPersonagem.toString()) {
                token.style.display = 'block';
            } else {
                token.style.display = 'none';
            }
        });
    }
    selectElement.addEventListener('change', filterTokens);
    setTimeout(filterTokens, 500); 
});

</script>