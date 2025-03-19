<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title id="tituloPagina">Mistérios e Rituais</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Cinzel:wght@400;600&display=swap"
    rel="stylesheet" />
</head>

<body>
  <canvas id="c"></canvas>
  <header class="header">
      <div class="header-container">
        <h1 class="site-title" id="ritualNome">[Nome do Ritual]</h1>
        <button
          class="back-button"
          onclick="window.location.href='../index-inv.php'"
        >
          &larr; Voltar
        </button>
      </div>
    </header>

    <div class="subheader">
      <nav>
        <ul>
          <li><a href="#descricao">Descrição</a></li>
          <li><a href="#historia">História</a></li>
        </ul>
      </nav>
    </div>

    <main class="main-content">
      <aside class="sidebar"></aside>

      <section class="content">
        <article>
          <div class="details-image">
            <img
              id="ritualImagem"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH3r_sM7QQ45aSu9y8Bug6rJtMB--YWkyAiA&s"
              alt="Imagem do Ritual"
            />
          </div>
          <section id="descricao">
            <h2>Descrição</h2>
            <p id="ritualDescricao">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </section>

          <section id="historia">
            <h2>História</h2>
            <p id="ritualHistoria">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </section>
          <br>

          <section id="detalhes">
            <table class="details-table">
              <tr>
                <th>Categoria</th>
                <td id="ritualCategoria">[Categoria]</td>
              </tr>
              <tr>
                <th>Dano</th>
                <td id="ritualDano">[Dano]</td>
              </tr>
              <tr>
                <th>Crítico</th>
                <td id="ritualCritico">[Crítico]</td>
              </tr>
              <tr>
                <th>Alcance</th>
                <td id="ritualAlcance">[Alcance]</td>
              </tr>
              <tr>
                <th>Tipo</th>
                <td id="ritualTipo">[Tipo]</td>
              </tr>
              <tr>
                <th>Peso</th>
                <td id="ritualPeso">[Peso]</td>
              </tr>
            </table>
            <br>
            <div class="details-container">
              <div class="details-text">
                <p>
                  <strong>Tipo</strong>
                </p>
                <p>
                  <strong>Alcance</strong>
                </p>
                <p>
                  <strong>Efeito</strong>
                </p>
              </div>
            </div>
          </section>
        </article>
      </section>
    </main>

  <div class="blood-effect"></div>

  <script>
    window.onload = function (argument) {
      var canvas = document.getElementById("c");
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;

      if (canvas.getContext) {
        var c = canvas.getContext("2d"),
          w = canvas.width,
          h = canvas.height;

        c.strokeStyle = "red";
        c.fillStyle = "#7a0a11";
        c.lineWidth = 0.1;
        var points = {
          number: 333,
          connect_distance: 50,
          mouse_distance: 100,
          array: [],
        };

        Point = function () {
          this.x = Math.random() * w;
          this.y = Math.random() * h;
          this.vector_x = Math.random() - 0.5;
          this.vector_y = Math.random() - 0.5;
          this.speed_x = Math.random() * 20;
          this.speed_y = Math.random() * 20;
          this.radius = Math.random() * 5;
        };

        Point.prototype = {
          draw_point: function () {
            c.beginPath();
            c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
            c.fill();
          },

          next_position: function () {
            var temp_p = this;

            if (temp_p.x < 0 || temp_p.x > w) {
              temp_p.vector_x = -temp_p.vector_x;
            } else if (temp_p.y < 0 || temp_p.y > h) {
              temp_p.vector_y = -temp_p.vector_y;
            }

            temp_p.x += temp_p.vector_x * temp_p.speed_x;
            temp_p.y += temp_p.vector_y * temp_p.speed_y;
          },
        };

        init();

        connect_each = function () {
          var temp_array = points.array;
          var temp_queue = arguments[0];

          for (var i = 0; i < points.number; i++) {
            for (var j = 0; j < points.number; j++) {
              pre_p = points.array[i];
              next_p = temp_array[j];

              if (
                pre_p.x - next_p.x < points.connect_distance &&
                pre_p.y - next_p.y < points.connect_distance &&
                pre_p.x - next_p.x > -points.connect_distance &&
                pre_p.y - next_p.y > -points.connect_distance
              ) {
                c.beginPath();
                c.moveTo(pre_p.x, pre_p.y);
                c.lineTo(next_p.x, next_p.y);
                c.stroke();
                c.closePath();
              }
            }
          }
        };
        function init() {
          for (var i = 0; i < points.number; i++) {
            points.array.push(new Point());
            points.array[i].draw_point();
          }
        }
        function animated_part() {
          var temp_array = points.array;
          for (var i = 0; i < points.number; i++) {
            temp_array[i].next_position();
            temp_array[i].draw_point();
          }
          connect_each();
        }
        setInterval(function () {
          animated_part();
        }, 33);
      }
    };
  </script>
</body>

</html>

<style>
  @import "compass/reset";
  @import "compass/css3";

  canvas {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgb(41, 0, 0);
    z-index: -1;
  }

  @media (max-width: 768px) {
    .header-container {
      flex-direction: column;
      text-align: center;
    }

    .back-button {
      margin-top: 10px;
      width: 100%;
      box-sizing: border-box;
    }

    .main-content {
      flex-direction: column;
      padding: 0 10px;
    }

    .details-table {
      width: 100%;
    }

    .details-image img {
      max-width: 100%;
    }
  }

  body {
    font-family: "Roboto", sans-serif;
    background-color: #6d0000;
    color: #fff;
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  .header {
    position: relative;
    background-color: #550000;
    padding: 20px;
    text-align: center;
    transition: all 0.3s ease;
    opacity: 0.95;
  }

  .blood-effect {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: linear-gradient(to top, #8b0000, transparent);
    animation: blood-flow 5s infinite, pulse-effect 1.8s infinite ease-in-out;
    z-index: 1;
  }

  @keyframes blood-flow {
    0% {
      background-position: 0% 0%;
    }

    50% {
      background-position: 100% 100%;
    }

    100% {
      background-position: 0% 0%;
    }
  }

  @keyframes pulse-effect {
    0% {
      height: 95px;
    }

    50% {
      height: 150px;/
    }

    100% {
      height: 95px;
    }
  }

  .header-small {
    padding: 10px;
  }

  .header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
  }

  .site-title {
    font-family: "Cinzel", serif;
    color: #fff;
    font-size: 2.2rem;
    text-shadow: 0 0 5px #ff0000;
  }

  .back-button {
    background-color: transparent;
    color: #fff;
    border: 2px solid #ff0000;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .back-button:hover {
    background-color: #ff0000;
    color: #fff;
    transform: scale(1.1);
  }

  .subheader {
    background-color: #440000;
    padding: 10px;
    text-align: center;
  }

  .subheader nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
  }

  .subheader nav ul li {
    margin: 0 15px;
  }

  .subheader nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    transition: color 0.3s ease;
  }

  .subheader nav ul li a:hover {
    color: #ff0000;
  }

  .main-content {
    display: flex;
    flex: 1;
    max-width: 1600px;
    margin: 20px auto;
    gap: 20px;
    padding: 0 10px;
    flex-wrap: wrap;
    opacity: 0.95;
  }

  .sidebar {
    display: none;
  }

  .content {
    flex: 1;
    background-color: #550000;
    padding: 20px;
    border-radius: 8px;
    font-size: 1.2rem;
  }

  h2 {
    font-family: "Cinzel", serif;
    color: #ffe2e2;
    margin-bottom: 10px;
    font-weight: bold;
    text-shadow: 0 0 5px #ff0000;
    font-size: 1.8rem;
  }

  .details-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .details-text {
    display: flex;
    gap: 20px;
  }

  .details-image {
    text-align: center;
    margin-bottom: 20px;
  }

  .details-image img {
    width: 450px;
    height: 450px;
    border-radius: 8px;
    transition: transform 0.3s ease, border-color 0.3s ease;
  }

  .details-image img:hover {
    transform: scale(1.1);
  }

  .details-table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    margin-left: 0;
    margin-right: auto;
  }

  .details-table th {
    width: 40%
  }

  .details-table th,
  .details-table td {
    border: 1px solid #ff5555;
    padding: 10px;
    text-align: left;
  }

  .details-table th {
    background-color: #ff0000;
    color: #fff;
  }
</style>