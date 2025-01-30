<script>
        let currentIndex = 0;

        function moveCarousel(direction) {
            const carrossel = document.getElementById('carrossel');
            const totalTokens = carrossel.children.length;
            currentIndex = (currentIndex + direction + totalTokens) % totalTokens;
            const newTransformValue = -currentIndex * (300 + 20);
            carrossel.style.transform = `translateX(${newTransformValue}px)`;
        }
        
        function updateBar() {
            let criticos = parseInt(document.getElementById("valorcritico").innerText);
            let falhas = parseInt(document.getElementById("valorfalhas").innerText);
            let total = criticos + falhas;
            let critBar = document.getElementById("critBar");
            let failBar = document.getElementById("failBar");
            
            let critPercent = (criticos / total) * 100;
            let failPercent = (falhas / total) * 100;
            
            critBar.style.width = critPercent + "%";
            failBar.style.width = failPercent + "%";
            
            critBar.innerText = criticos;
            failBar.innerText = falhas;
        }
        
        document.addEventListener("DOMContentLoaded", updateBar);
    </script>