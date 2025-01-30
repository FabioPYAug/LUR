<script>
    let currentIndex = 0;
    
    function moveCarousel(direction) {
        const carrossel = document.getElementById('carrossel');
        const totalTokens = carrossel.children.length;
        currentIndex = (currentIndex + direction + totalTokens) % totalTokens;
        const newTransformValue = -currentIndex * (300 + 20);
        carrossel.style.transform = `translateX(${newTransformValue}px)`;
    }

    function updateBar(criticos, falhas) {
        const total = criticos + falhas;

        const criticosPercentage = (criticos / total) * 100;
        const falhasPercentage = (falhas / total) * 100;

        const progressBar = document.getElementById('progress-bar');
        progressBar.innerHTML = `
            <div class="criticos" style="width: ${criticosPercentage}%;">
                ${criticos > 0 ? criticos : ''}
            </div>
            <div class="falhas" style="width: ${falhasPercentage}%;">
                ${falhas > 0 ? falhas : ''}
            </div>
        `;

        document.getElementById('criticos-label').textContent = `Críticos: ${criticos}`;
        document.getElementById('falhas-label').textContent = `Falhas: ${falhas}`;
    }

    // Exemplo de uso
    updateBar(7, 3);
</script>