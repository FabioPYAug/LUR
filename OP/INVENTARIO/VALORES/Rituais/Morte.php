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
    <canvas id="canv"></canvas>
    <header class="header">
    <div class="header-container">
      <h1 class="site-title" id="RitualNome">[Nome do Ritual]</h1>
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
      <div class="details-image">
            <img
              id="ritualImagem"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH3r_sM7QQ45aSu9y8Bug6rJtMB--YWkyAiA&s"
              alt="Imagem do Ritual"
            />
          </div>
        <section id="efeito">
          <h2 data-text="Efeito">Efeito</h2>
          <p id="op_padrao" data-text="">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <p id="op_discente" data-text=""><strong>Discente: </strong>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <p id="op_verdadeiro" data-text=""><strong>Verdadeiro: </strong>
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
              <th>Círculo</th>
              <td id="RitualCirculo">[Círculo]</td>
            </tr>
            <tr>
              <th>Custo</th>
              <td id="RitualCusto">[Custo]</td>
            </tr>
            <tr>
              <th>Alvo</th>
              <td id="RitualAlvo">[Alvo]</td>
            </tr>
            <tr>
              <th>Resistência</th>
              <td id="RitualResistencia">[Resistência]</td>
            </tr>
            <tr>
              <th>Duração</th>
              <td id="RitualDuracao">[Duração]</td>
            </tr>
            <tr>
              <th>Alcance</th>
              <td id="RitualAlcance">[Alcance]</td>
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
      var c = document.getElementById("canv"),
        $ = c.getContext("2d"),
        w = (c.width = window.innerWidth / 1.1),
        h = (c.height = window.innerHeight / 1.1),
        p = part({
          num: 4200,
          life: 20,
          fade: 0.02,
          cv: 150,
          vel: accl(rot(Math.PI / 1.223, möb(dbl(1 / 5, Math.PI / 2)))),
        });
    
      // Tons de cinza
      $.strokeStyle = "hsla(0, 0%, 50%, 0.6)"; // Cinza médio para as linhas
      $.fillStyle = "hsla(0, 0%, 20%, 0.05)"; // Cinza escuro para o fundo
      $.fillRect(0, 0, c.width, c.height);
    
      function txt() {
        var t = "".split("").join(String.fromCharCode(0x2004));
        $.font = "3.5em Righteous";
        $.fillStyle = "hsla(0, 0%, 10%, 0.05)"; // Cinza muito escuro para o texto
        $.fillText(
          t,
          (c.width - $.measureText(t).width) * 0.5,
          c.height * 0.95
        );
      }
    
      function rot(yu, loc) {
        return function (x, y, t) {
          return loc(
            x * Math.cos(yu) - y * Math.sin(yu),
            x * Math.sin(yu) + y * Math.cos(yu),
            t
          );
        };
      }
    
      function möb(loc) {
        return function (x, y, t) {
          var _r = (x - 1) * (x - 1) + y * y,
            _x = (1 - x * x - y * y) / _r,
            _y = (2 * y) / _r,
            v = loc(_x, _y, t),
            vx = v[0],
            vy = v[1];
          var d = Math.pow((_x + 1) * (_x + 1) + _y * _y, 2) / 4,
            a = 2 * (_y * _y - (_x + 1) * (_x + 1)),
            b = 4 * (_x + 1) * _y;
          return [(a * vx - b * vy) / d, (b * vx + a * vy) / d];
        };
      }
    
      function accl(loc) {
        return function (px, py, t) {
          var calc = Math.min(c.width, c.height) / 4,
            x = (px - c.width / 2) / calc,
            y = (py - c.height / 2) / calc;
          return loc(x, y, t);
        };
      }
    
      function dbl(r, theta) {
        var lr = Math.log(r);
        return function (x, y, t) {
          return [x * lr - y * theta, x * theta + y * lr];
        };
      }
    
      function part(obj) {
        (num = obj.num || 1500),
          (life = obj.life || 10),
          (fade = obj.fade || 0.02),
          (cv = obj.cv || 100),
          (vel = obj.vel);
    
        function trail(op) {
          $.save();
          $.globalAlpha = op;
          $.globalCompositeOperation = "copy";
          $.drawImage(c, 0, 0);
          $.restore();
        }
    
        var _p = go();
        function go() {
          var _p = [];
          for (var i = 0; i < num; i++)
            _p.push([
              Math.round(Math.random() * (w + 2 * cv)) - cv,
              Math.round(Math.random() * (h + 2 * cv)) - cv,
              Math.round(Math.random() * life) + 1,
            ]);
          return _p;
        }
    
        function draw(t) {
          var speedFactor = 0.2;
    
          trail(1 - fade);
          $.save();
          $.setTransform(1, 0, 0, 1, 0, 0);
          for (var i = 0; i < _p.length; i++) {
            var _i = _p[i];
            if (_i[2] == 0) {
              _i[0] = Math.round(Math.random() * (w + 2 * cv)) - cv;
              _i[1] = Math.round(Math.random() * (h + 2 * cv)) - cv;
              _i[2] = 20;
            }
            var v = vel(_i[0], _i[1], t);
            if (v[0] <= w && v[1] <= h) {
              $.beginPath();
              $.moveTo(_i[0], _i[1]);
              $.lineTo(_i[0] + v[0] * speedFactor, _i[1] + v[1] * speedFactor);
              $.stroke();
              _i[0] += v[0] * speedFactor;
              _i[1] += v[1] * speedFactor;
            }
            _i[2]--;
          }
          $.restore();
          txt();
        }
        function run() {
          window.requestAnimationFrame(run);
          draw();
        }
        run();
      }
    
      window.addEventListener(
        "resize",
        function () {
          c.width = w = window.innerWidth / 1.1;
          c.height = h = window.innerHeight / 1.1;
          $.strokeStyle = "hsla(0, 0%, 50%, 0.6)"; 
          $.fillStyle = "hsla(0, 0%, 20%, 0.05)"; 
        },
        false
      );
    </script>
    
  </body>
</html>

<style>
  canvas {
    background: #000000; 
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -2;
    pointer-events: none;
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
    background-color: #000;
    color: #bbb;
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  .header {
    background-color: #222;
    padding: 20px;
    text-align: center;
    transition: all 0.3s ease;
    opacity: 0.9;
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
  }

  .site-title {
    font-family: "Cinzel", serif;
    color: #ddd; 
    font-size: 2.2rem;
  }

  .back-button {
    background-color: transparent;
    color: #bbb; 
    border: 2px solid #bbb; 
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .back-button:hover {
    background-color: #888; 
    color: #000; 
    transform: scale(1.1);
  }

  .subheader {
    background-color: #333;
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
    color: #bbb;
    font-weight: 500;
    transition: color 0.3s ease;
  }

  .subheader nav ul li a:hover {
    color: #888;
  }

  .main-content {
    display: flex;
    flex: 1;
    max-width: 1600px;
    margin: 20px auto;
    gap: 20px;
    padding: 0 10px;
    flex-wrap: wrap;
  }

  .sidebar {
    display: none;
  }

  .content {
    flex: 1;
    background-color: #222;
    padding: 20px;
    border-radius: 8px;
    opacity: 0.9;
    font-size: 1.2rem;
  }

  h2 {
    font-family: "Cinzel", serif;
    color: #ddd; 
    margin-bottom: 10px;
    font-weight: bold;
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
    object-fit: cover; 
    border-radius: 8px; 
    transition: transform 0.3s ease, border-color 0.3s ease;
  }

  .details-image img:hover {
    transform: scale(1.1);
    border-color: #888;
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
    border: 1px solid #444;
    padding: 10px;
    text-align: left;
  }

  .details-table th {
    background-color: #666; 
    color: #ddd; 
  }
</style>

