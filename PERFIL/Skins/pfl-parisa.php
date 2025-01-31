<script>
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
                    backgroundColor: ['#00ffcc', '#3e4a3e'], 
                    borderColor: ['#b0b0b0', '#5e5e5e'], 
                    borderWidth: 2, 
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            font: {
                                family: "'Cinzel', sans-serif", 
                                size: 16,
                                weight: 'bold'
                            },
                            color: '#b0b0b0'
                        }
                    },  
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw + '%'; 
                            }
                        },
                        backgroundColor: '#2c3e50', 
                        titleFont: {
                            family: "'Cinzel', sans-serif",
                            weight: 'bold',
                            size: 14
                        },
                        bodyFont: {
                            family: "'Cinzel', sans-serif",
                            size: 12
                        },
                        bodyColor: '#b0b0b0', 
                    }
                }
            }
        });
    });
</script>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Jura', sans-serif;
        background-color: #000000;
        color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        height: 100vh;
        margin: 0;
    }

    .container {
        width: 80%;
        max-width: 1400px;
        margin-top: 30px;
        background-color: #282828;
        border-radius: 15px;
        box-shadow: 0 10px 50px rgba(0, 0, 0, 0.8);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transform: scale(1);
        transition: all 0.3s ease-in-out;
    }

    .side-container {
        margin-top: 30px;
        width: 28%;
        background-color: #333333;
        border-radius: 12px;
        margin-left: 20px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: all 0.3s ease-in-out;
    }

    .side-container:hover {
        background-color: #444444;
    }

    .header {
        background-color: #111111;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 20px;
        border-bottom: 2px solid #2f4f4f;
    }

    .header .avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background-image: url('https://via.placeholder.com/120');
        background-size: cover;
        background-position: center;
        border: 3px solid #666;
        box-shadow: 0px 0px 12px rgba(255, 204, 0, 0.5);
        transition: all 0.3s ease-in-out;
    }

    .header .avatar:hover {
        transform: scale(1.1);
    }

    .header .details {
        display: flex;
        flex-direction: column;
        color: #f1f1f1;
    }

    .header .details h1 {
        font-size: 2rem;
        margin-bottom: 5px;
        color: #00ffcc;
    }

    .header .details .Detalhes {
        font-size: 1.2rem;
        color: #8b8b8b;
    }

    .profile-sections {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 30px;
        padding: 30px;
        width: 100%;
    }

    .section {
        background-color: #353535;
        border-radius: 8px;
        padding: 25px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease-in-out;
    }

    .section:hover {
        background-color: #444444;
    }

    .section h2 {
        font-size: 1.7rem;
        margin-bottom: 10px;
        color: #00ffcc;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
    }

    .section p {
        margin-bottom: 10px;
        color: rgb(160, 160, 160);
        font-size: 1.1rem;
    }

    .stats ul {
        list-style: none;
        font-size: 1.2rem;
    }

    .stats li {
        margin-bottom: 8px;
        color: #ccc;
    }

    .inventory ul {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(128px, 1fr));
        gap: 15px;
        list-style-type: none;
    }

    .inventory li {
        background-color: #444444;
        padding: 12px;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease-in-out;
    }

    .inventory li:hover {
        background-color: #555555;
        transform: translateY(-5px);
    }

    .friends,
    .suggested-friends {
        background-color: #444444;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .friends h2,
    .suggested-friends h2 {
        font-size: 1.6rem;
        color: #00ffcc;
        margin-bottom: 10px;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
    }

    .friends ul,
    .suggested-friends ul {
        list-style: none;
        max-height: 300px;
        overflow-y: auto;
        padding-right: 10px;
    }

    .friends li,
    .suggested-friends li {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 12px;
        border-bottom: 1px solid #444;
        transition: background-color 0.3s ease;
    }

    .friends li:hover,
    .suggested-friends li:hover {
        background-color: #555555;
    }

    .friends li img,
    .suggested-friends li img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
    }

    .footer {
        background-color: #1b1e22;
        text-align: center;
        padding: 15px;
        font-size: 0.9rem;
        color: #aaa;
    }

    .pie-chart-container {
        margin-top: 30px;
        width: 100%;
        max-width: 250px;
        margin-left: auto;
        margin-right: auto;
    }

</style>

