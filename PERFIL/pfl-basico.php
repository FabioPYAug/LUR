<?php
include 'pfl-basico-stl.php';
include 'pfl-basico-js.php';
?>

<body>
    <div class="main-container">
        <!-- HEADER -->
        <header class="block">
            <ul class="header-menu horizontal-list">
                <li>
                    <a class="header-menu-tab" href="#settings">
                        <span class="icon entypo-cog scnd-font-color"></span>Settings
                    </a>
                </li>
                <li>
                    <a class="header-menu-tab" href="#messages">
                        <span class="icon fontawesome-envelope scnd-font-color"></span>Messages
                    </a>
                </li>
            </ul>
        </header>

        <!-- CONTAINER DA ESQUERDA -->
        <div class="left-container container">
            <div class="menu-box block">
                <h2 class="titular">Menu</h2>
                <ul class="menu-box-menu">
                    <li>
                        <a class="menu-box-tab" href="#sessoes">
                            <span class="icon fontawesome-envelope scnd-font-color"></span>Sessões Jogadas
                            <div class="menu-box-number">24</div>
                        </a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="#criticos">
                            <span class="icon entypo-paper-plane scnd-font-color"></span>Críticos
                            <div class="menu-box-number">3</div>
                        </a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="#falhas">
                            <span class="icon entypo-calendar scnd-font-color"></span>Falhas Críticas
                            <div class="menu-box-number">5</div>
                        </a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="#personagens">
                            <span class="icon entypo-cog scnd-font-color"></span>Personagens
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- CONTAINER DA DIREITA -->
        <div class="middle-container container">
            <div class="profile block">
                <div class="profile-picture big-profile-picture clear">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture">
                </div>
                <h1 class="user-name">Nickname</h1>
                <div class="profile-description">
                    <p class="scnd-font-color">Descrição breve do usuário.</p>
                </div>
                <ul class="profile-options horizontal-list">
                    <li>
                        <a class="comments" href="#comments">
                            <p><span class="icon fontawesome-comment-alt scnd-font-color"></span>23</p>
                        </a>
                    </li>
                    <li>
                        <a class="views" href="#views">
                            <p><span class="icon fontawesome-eye-open scnd-font-color"></span>841</p>
                        </a>
                    </li>
                    <li>
                        <a class="likes" href="#likes">
                            <p><span class="icon fontawesome-heart-empty scnd-font-color"></span>49</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
