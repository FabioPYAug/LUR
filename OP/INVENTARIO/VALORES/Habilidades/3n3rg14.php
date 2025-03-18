<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title id="tituloPagina">Mistérios e Rituais</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Cinzel:wght@400;600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="glitch-overlay" id="glitch"></div>
    <canvas id="c"></canvas>
    <header class="header">
    <div class="header-container">
      <h1 class="site-title" id="habilidadeNome">[Nome da Habilidade]</h1>
      <button class="back-button" onclick="window.location.href='../index-inv.php'">
        &larr; Voltar
      </button>
    </div>
  </header>

  <div class="subheader">
    <nav>
      <ul>
        <li><a href="#efeito">Efeito</a></li>
      </ul>
    </nav>
  </div>

  <main class="main-content">
    <aside class="sidebar"></aside>

    <section class="content">
      <article>
        <section id="efeito">
          <h2 data-text="Efeito">Efeito</h2>
          <p id="habilidadeEfeito" data-text="">
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
              <th>Custo</th>
              <td id="HabilidadeCusto">[Custo]</td>
            </tr>
            <tr>
              <th>Duração</th>
              <td id="HabilidadeDuracao">[Duração]</td>
            </tr>
            <tr>
              <th>Alcance</th>
              <td id="HabilidadeCondicao">[Alcance]</td>
            </tr>
            <tr>
              <th>Teste</th>
              <td id="HabilidadeCondicao">[Teste]</td>
            </tr>
            <tr>
              <th>Dano</th>
              <td id="HabilidadeCondicao">[Dano]</td>
            </tr>
            <tr>
              <th>Resistência</th>
              <td id="HabilidadeResistência">[Resistência]</td>
            </tr>
            <tr>
              <th>Alvo</th>
              <td id="HabilidadeAlvo">[Alvo]</td>
            </tr>
          </table>
          <br />
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

    <script>
      window.requestAnimFrame =
        window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        function (callback) {
          window.setTimeout(callback, 1000 / 60);
        };

      var canvas = document.getElementById("c");
      var ctx = canvas.getContext("2d");

      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;

      var particles = [];

      /* settings */

      var bounce = 0.9;
      var proximity = -100;
      var speed_limit = 25000;
      var particle_count = 1000;
      var min_hue = 1000;
      var hue_step = ((360 - min_hue) / particle_count) * 3;
      var predefined_colors = [
        "#ff00cc",
        "#00eeff",
        "#7b00ff",
        "#7b00ff",
        "#96fac1",
        "#e04870",
        "#c21be3",
        "#a6ff00",
      ];

      /* --------------------- */

      var Vector = function (x, y) {
        this.x = x || 0;
        this.y = y || 0;
      };

      Vector.prototype.add = function (x, y) {
        if (x instanceof Vector) {
          this.x += x.x;
          this.y += x.y;
        } else if (x != null && y != null) {
          this.x += x;
          this.y += y;
        } else if (x != null) {
          this.x += x;
          this.y += x;
        }
      };

      Vector.prototype.sub = function (x, y) {
        if (x instanceof Vector) {
          this.x -= x.x;
          this.y -= x.y;
        } else if (x != null && y != null) {
          this.x -= x;
          this.y -= y;
        } else if (x != null) {
          this.x -= x;
          this.y -= x;
        }
      };

      Vector.prototype.zero = function () {
        this.x = 0;
        this.y = 0;
      };

      /* --------------------- */

      var Particle = function () {
        // Escolher uma cor aleatória do array de cores predefinidas
        this.color =
          predefined_colors[
            Math.floor(Math.random() * predefined_colors.length)
          ];

        this.acc = new Vector();

        this.vel = new Vector(-1 + Math.random() * 2, -1 + Math.random() * 2);

        this.pos = new Vector(
          canvas.width * Math.random(),
          canvas.height * Math.random()
        );
      };

      Particle.prototype.update = function () {
        this.vel.add(this.acc);

        if (this.vel.x > speed_limit || this.vel.y > speed_limit) {
          this.vel.x = Math.min(this.vel.x, speed_limit);
          this.vel.y = Math.min(this.vel.y, speed_limit);
        }

        this.pos.add(this.vel);

        this.acc.zero();

        if (this.pos.x < 0) {
          this.pos.x = 0;

          this.vel.x *= -bounce;
        } else if (this.pos.x > canvas.width) {
          this.pos.x = canvas.width;

          this.vel.x *= -bounce;
        }

        if (this.pos.y < 0) {
          this.pos.y = 0;

          this.vel.y *= -bounce;
        } else if (this.pos.y > canvas.height) {
          this.pos.y = canvas.height;

          this.vel.y *= -bounce;
        }
      };

      Particle.prototype.draw = function (ctx) {
        ctx.fillStyle = this.color;

        ctx.fillRect(this.pos.x - 1, this.pos.y - 1, 2, 2);

        this.hue = min_hue;
      };

      /* --------------------- */

      function loop() {
        ctx.globalCompositeOperation = "destination-in";

        ctx.fillStyle = "rgba(0,0,0,0.9)";

        ctx.fillRect(0, 0, canvas.width, canvas.height);

        ctx.globalCompositeOperation = "source-over";

        var i, l;

        i = l = particles.length;

        while (i--) {
          var particle = particles[i];

          if (i > 0) {
            var j = i - 1;

            while (j--) {
              var other = particles[j];

              var diff_x = particle.pos.x - other.pos.x;
              var diff_y = particle.pos.y - other.pos.y;

              var dist = Math.sqrt(diff_x * diff_x + diff_y * diff_y);

              if (dist > proximity) {
                if (dist < 100) {
                  particle.hue += hue_step;
                  other.hue += hue_step;
                }

                var force = Math.pow(dist, 3) / 8;

                var x = diff_x / force;
                var y = diff_y / force;

                particle.acc.sub(x, y);

                other.acc.add(x, y);
              }
            }
          }

          particle.update();

          particle.draw(ctx);
        }

        requestAnimFrame(loop);
      }

      var i = particle_count;

      while (i--) {
        particles.push(new Particle());
      }

      loop();

      const glitchOverlay = document.getElementById("glitch");

      function triggerGlitch() {
        glitchOverlay.classList.add("active");

        setTimeout(() => {
          glitchOverlay.classList.remove("active");
        }, 750);
      }

      setInterval(triggerGlitch, valor());

      function valor(){
        var tempo = Math.floor(Math.random() * (10000 - 100 + 1)) + 100;
        return(tempo)
      }
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
    background-color: rgb(30, 0, 60);
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
    background-color: #300060;
    color: #e0ffff;
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  .header {
    position: relative;
    background-color: #500080;
    padding: 20px;
    text-align: center;
    transition: all 0.3s ease;
    opacity: 0.9;
  }

  .blood-effect {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: linear-gradient(to top, #7e009f, transparent);
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
      height: 150px;
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
    color: #e0ffff;
    font-size: 2.2rem;
    text-shadow: 0 0 5px #00d4ff;
  }

  .back-button {
    background-color: transparent;
    color: #e0ffff;
    border: 2px solid #00d4ff;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .back-button:hover {
    background-color: #00d4ff;
    color: #300060;
    transform: scale(1.1);
  }

  .subheader {
    background-color: #400070;
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
    color: #e0ffff;
    font-weight: 500;
    transition: color 0.3s ease;
  }

  .subheader nav ul li a:hover {
    color: #00d4ff;
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
    background-color: #500080;
    padding: 20px;
    border-radius: 8px;
    font-size: 1.2rem;
    opacity: 0.9;
  }

  h2 {
    font-family: "Cinzel", serif;
    color: #e0ffff;
    margin-bottom: 10px;
    font-weight: bold;
    text-shadow: 0 0 5px #00d4ff;
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
    border: 1px solid #6b00b8;
    padding: 10px;
    text-align: left;
  }

  .details-table th {
    background-color: #00d4ff;
    color: #300060;
  }

  .glitch-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    background: rgba(255, 255, 255, 0.05);
    z-index: 100;
    display: none;
  }

  @keyframes glitch {
    0% {
      clip-path: inset(10% 0 85% 0);
      transform: translate(-10px, -10px);
      background: rgba(255, 0, 0, 0.3);
    }
    20% {
      clip-path: inset(20% 0 70% 0);
      transform: translate(10px, -5px);
      background: rgba(0, 255, 0, 0.3);
    }
    40% {
      clip-path: inset(30% 0 60% 0);
      transform: translate(-10px, 5px);
      background: rgba(0, 0, 255, 0.3);
    }
    60% {
      clip-path: inset(50% 0 40% 0);
      transform: translate(0, 10px);
      background: rgba(255, 255, 0, 0.3);
    }
    80% {
      clip-path: inset(10% 0 80% 0);
      transform: translate(10px, -10px);
      background: rgba(255, 0, 255, 0.3);
    }
    100% {
      clip-path: inset(0% 0 100% 0);
      transform: translate(0, 0);
      background: rgba(0, 255, 255, 0.3);
    }
  }

  .glitch-overlay.active {
    display: block;
    animation: glitch 0.5s steps(5, end) infinite;
  }

  /* Efeito de Glitch */
  /* Efeito de Glitch */
  .glitch {
    position: relative;
    display: inline-block;
    color: white;
  }

  .glitch:before,
  .glitch:after {
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 0;
    color: rgba(255, 255, 255, 0.5);
    clip: rect(0, 0, 0, 0);
    background: black;
    animation: glitch-animation 0.5s infinite linear alternate-reverse;
  }

  .glitch:before {
    left: -2px;
    text-shadow: 2px 0 rgba(255, 0, 0, 0.7);
  }

  .glitch:after {
    left: 2px;
    text-shadow: -2px 0 rgba(0, 0, 255, 0.7);
  }

  .glitch:hover:before {
    animation: glitch-hover-1 0.8s infinite ease-in-out alternate-reverse;
    text-shadow: 3px 0 rgba(255, 0, 0, 0.7);
  }

  .glitch:hover:after {
    animation: glitch-hover-2 0.8s infinite ease-in-out alternate-reverse;
    text-shadow: -3px 0 rgba(0, 0, 255, 0.7);
  }

  /* Animações de glitch */
  @keyframes glitch-animation {
    0% {
      clip: rect(10% 0 90% 0);
      transform: translate(-2px, -2px);
      background: rgba(255, 0, 0, 0.3);
    }
    20% {
      clip: rect(20% 0 80% 0);
      transform: translate(2px, 3px);
      background: rgba(0, 255, 0, 0.3);
    }
    40% {
      clip: rect(30% 0 70% 0);
      transform: translate(-3px, 5px);
      background: rgba(0, 0, 255, 0.3);
    }
    60% {
      clip: rect(50% 0 50% 0);
      transform: translate(0, 7px);
      background: rgba(255, 255, 0, 0.3);
    }
    80% {
      clip: rect(60% 0 40% 0);
      transform: translate(-4px, -2px);
      background: rgba(255, 0, 255, 0.3);
    }
    100% {
      clip: rect(70% 0 30% 0);
      transform: translate(2px, 0);
      background: rgba(0, 255, 255, 0.3);
    }
  }

  @keyframes glitch-hover-1 {
    0% {
      clip: rect(25px, 9999px, 70px, 0);
      transform: translate(10px, 10px);
    }
    25% {
      clip: rect(45px, 9999px, 90px, 0);
      transform: translate(-5px, -10px);
    }
    50% {
      clip: rect(60px, 9999px, 120px, 0);
      transform: translate(5px, 5px);
    }
    75% {
      clip: rect(30px, 9999px, 80px, 0);
      transform: translate(-10px, 0);
    }
    100% {
      clip: rect(55px, 9999px, 110px, 0);
      transform: translate(0, 0);
    }
  }

  @keyframes glitch-hover-2 {
    0% {
      top: -1px;
      left: 1px;
      clip: rect(50px, 9999px, 90px, 0);
      transform: translate(-5px, -5px);
    }
    25% {
      top: -5px;
      left: 5px;
      clip: rect(70px, 9999px, 120px, 0);
      transform: translate(10px, 10px);
    }
    50% {
      top: -3px;
      left: -3px;
      clip: rect(80px, 9999px, 100px, 0);
      transform: translate(-10px, -10px);
    }
    75% {
      top: 0px;
      left: -5px;
      clip: rect(95px, 9999px, 130px, 0);
      transform: translate(5px, 0);
    }
    100% {
      top: -1px;
      left: 1px;
      clip: rect(110px, 9999px, 140px, 0);
      transform: translate(0, 0);
    }
  }
</style>
