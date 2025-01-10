<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Mon Site Web</title>
</head>
<body>
            
       <!-- header.php -->
<header>
    <div class="header-right">
        <form id="searchForm" action="#" method="GET"  onsubmit="return false;">
            <input type="text" placeholder="Recherche..." name="search" aria-label="Recherche">
            <button type="submit">🔍</button>
        </form>
        <select name="language" aria-label="Choix de la langue">
            <option value="fr">Français</option>
            <option value="en">English</option>
            <option value="ru">Русский</option>
            <option value="zh">中文</option>
            <option value="de">Deutsch</option>
            <option value="hi">हिन्दी</option>
            <option value="pt">Português</option>
            <option value="es">Español</option>
        </select>
        <div class="user-icon" id="userIcon">
            <img src="images/amedbello.jpeg" alt="Utilisateur" />
        </div>
    </div>

    <!-- Modal pour l'utilisateur -->
    <div id="userModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="profile">
                <img src="images/amedbello.jpeg" alt="Photo de Profil" class="profile-photo">
                <h2>Nom de l'Utilisateur</h2>
            </div>
            <ul class="modal-links">
                <li><a href="#">Update User</a></li>
                <li><a href="#">Logout</a></li>
                <li><a href="#">Followers</a></li>
                <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
                <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
            </ul>
        </div>
    </div>    
    
</header>

<div class="menu-horizontal-container">
    <!-- Menu 1 -->
    <div class="menu-item">
        <div class="menu-title">
            <a href="target_page1.html">Languages</a>
        </div>
        <ul class="menu-vertical">
            <li><a href="page1-1.html">Html</a></li>
            <li><a href="page1-2.html">Css</a></li>
            <li><a href="page1-3.html">Js</a></li>
            <li><a href="page1-1.html">Php</a></li>
            <li><a href="page1-2.html">Python</a></li>
            <li><a href="page1-3.html">Java</a></li>
            <li><a href="page1-1.html">C</a></li>
            <li><a href="page1-2.html">C+</a></li>
            <li><a href="page1-3.html">C++</a></li>
            <li><a href="page1-1.html">Html</a></li>
            <li><a href="page1-2.html">Css</a></li>
            <li><a href="page1-3.html">Js</a></li>
            <li><a href="page1-1.html">Html</a></li>
            <li><a href="page1-2.html">Css</a></li>
            <li><a href="page1-3.html">Js</a></li>
            <li><a href="page1-1.html">Html</a></li>
            <li><a href="page1-2.html">Css</a></li>
            <li><a href="page1-3.html">Js</a></li>
            
            
            
        </ul>
    </div>

    <!-- Menu 2 -->
    <div class="menu-item">
        <div class="menu-title">
            <a href="target_page2.html">TitreduMenu2</a>
        </div>
        <ul class="menu-vertical">
            <li><a href="page2-1.html">Lien 2-1</a></li>
            <li><a href="page2-2.html">Lien 2-2</a></li>
            <li><a href="page2-3.html">Lien 2-3</a></li>
        </ul>
    </div>

    <!-- Menu 3 -->
    <div class="menu-item">
        <div class="menu-title">
            <a href="target_page3.html">Titre du Menu 3</a>
        </div>
        <ul class="menu-vertical">
            <li><a href="page3-1.html">Lien 3-1</a></li>
            <li><a href="page3-2.html">Lien 3-2</a></li>
            <li><a href="page3-3.html">Lien 3-3</a></li>
        </ul>
    </div>
    <!-- Menu 4 -->
    <div class="menu-item">
        <div class="menu-title">
            <a href="target_page3.html">Titre du Menu 4</a>
        </div>
        <ul class="menu-vertical">
            <li><a href="page3-1.html">Lien 3-1</a></li>
            <li><a href="page3-2.html">Lien 3-2</a></li>
            <li><a href="page3-3.html">Lien 3-3</a></li>
        </ul>
    </div>
    <!-- Menu 5 -->
    <div class="menu-item">
        <div class="menu-title">
            <a href="target_page3.html">Titre du Menu 5</a>
        </div>
        <ul class="menu-vertical">
            <li><a href="page3-1.html">Lien 3-1</a></li>
            <li><a href="page3-2.html">Lien 3-2</a></li>
            <li><a href="page3-3.html">Lien 3-3</a></li>
        </ul>
    </div>
    <!-- Menu 6 -->
    <div class="menu-item">
        <div class="menu-title">
            <a href="target_page3.html">Titre du Menu 6</a>
        </div>
        <ul class="menu-vertical">
            <li><a href="page3-1.html">Lien 3-1</a></li>
            <li><a href="page3-2.html">Lien 3-2</a></li>
            <li><a href="page3-3.html">Lien 3-3</a></li>
        </ul>
    </div>
    <!-- Menu 7 -->
    <div class="menu-item">
        <div class="menu-title">
            <a href="target_page3.html">Titre du Menu 7</a>
        </div>
        <ul class="menu-vertical">
            <li><a href="page3-1.html">Lien 3-1</a></li>
            <li><a href="page3-2.html">Lien 3-2</a></li>
            <li><a href="page3-3.html">Lien 3-3</a></li>
        </ul>
    </div>
</div>

