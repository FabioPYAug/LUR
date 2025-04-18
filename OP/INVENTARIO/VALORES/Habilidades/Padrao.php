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
</body>

</html>

<style>
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
    color: #fff;
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  .header {
    background-color: #111;
    padding: 20px;
    text-align: center;
    transition: all 0.3s ease;
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
    color: #fff;
    font-size: 2.2rem;
  }

  .back-button {
    background-color: transparent;
    color: #fff;
    border: 2px solid #fff;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .back-button:hover {
    background-color: #d1faff;
    color: #000;
    transform: scale(1.1);
  }

  .subheader {
    background-color: #222;
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
    color: #d1faff;
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
    background-color: #111;
    padding: 20px;
    border-radius: 8px;
    font-size: 1.2rem;
  }

  h2 {
    font-family: "Cinzel", serif;
    color: #ffffff;
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
    border: 1px solid #444;
    padding: 10px;
    text-align: left;
  }

  .details-table th {
    background-color: #ffffff;
    color: #000;
  }
</style>