<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    
    
    //CARROSSEL DAS IMAGENS
    let currentIndex = 0;

function moveCarousel(direction) {
    const carrossel = document.getElementById('carrossel');
    const visibleTokens = Array.from(carrossel.children).filter(token => token.style.display !== 'none');
    
    if (visibleTokens.length === 0) return;
    
    currentIndex = (currentIndex + direction + visibleTokens.length) % visibleTokens.length;
    
    const tokenWidth = visibleTokens[0].offsetWidth + 20; 
    const newTransformValue = -currentIndex * tokenWidth;
    
    carrossel.style.transform = `translateX(${newTransformValue}px)`;
}

// MODIFICAÇÃO DO SELECT E PERSONAGENS
document.addEventListener("DOMContentLoaded", function () {
    const selectElement = document.getElementById('personagem-select');

    function filterTokens() {
        const selectedPersonagem = selectElement.value;
        const tokens = document.querySelectorAll('.carrossel .token');

        tokens.forEach(function (token) {
            const personagem = token.getAttribute('data-personagem');

            if (personagem === selectedPersonagem.toString() || selectedPersonagem === "") {
                token.style.display = 'block';
            } else {
                token.style.display = 'none';
            }
        });

        currentIndex = 0;  
        moveCarousel(0);   
    }

    selectElement.addEventListener('change', filterTokens);
    setTimeout(filterTokens, 500); 
});


</script>