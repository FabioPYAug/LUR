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
    document.addEventListener("DOMContentLoaded", function() {
        const selectElement = document.getElementById('personagem-select');
        const tokens = document.querySelectorAll('.carrossel .token');

        function filterTokens() {
            const selectedPersonagem = selectElement.value;

            tokens.forEach(function(token) {
                const personagem = token.getAttribute('data-personagem');
                if (personagem === selectedPersonagem) {
                    token.style.display = 'block';
                } else {
                    token.style.display = 'none';
                }
            });
        }

        selectElement.addEventListener('change', filterTokens);

        filterTokens();
    });

    //CRITICOS E FALHAS
    document.addEventListener("DOMContentLoaded", function() {
    console.log('Página carregada e o gráfico será gerado');
    
    const ctx = document.getElementById('pizza-chart').getContext('2d');
    const pizzaChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Críticos', 'Falhas'],
            datasets: [{
                label: 'Estatísticas de RPG',
                data: [50, 50],
                backgroundColor: ['#36a2eb', '#ff7f0e'],
                borderColor: ['#fff', '#fff'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                        }
                    }
                }
            }
        }
    });
});

</script>