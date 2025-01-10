// js/script.js

function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const content = document.querySelector('.content');
    const toggleButton = document.querySelector('.toggle');

    sidebar.classList.toggle('hidden');

    if (sidebar.classList.contains('hidden')) {
        content.style.marginLeft = '0'; // Réinitialise la marge du contenu
        toggleButton.style.left = '10px'; // Positionne le bouton hamburger à gauche
    } else {
        const sidebarWidth = getSidebarWidth();
        content.style.marginLeft = sidebarWidth; // Décale le contenu vers la droite
        toggleButton.style.left = sidebarWidth; // Positionne le bouton hamburger avec la sidebar
    }
}

function getSidebarWidth() {
    const sidebar = document.getElementById('sidebar');
    return window.getComputedStyle(sidebar).width;
}

// Gérer la réinitialisation du toggle lors du redimensionnement de la fenêtre
window.addEventListener('resize', function() {
    const sidebar = document.getElementById('sidebar');
    const content = document.querySelector('.content');
    const toggleButton = document.querySelector('.toggle');

    if (sidebar.classList.contains('hidden')) {
        toggleButton.style.left = '10px';
    } else {
        const sidebarWidth = getSidebarWidth();
        toggleButton.style.left = sidebarWidth;
        content.style.marginLeft = sidebarWidth;
    }
});

// Optionnel : Gérer le clic à l'extérieur de la sidebar pour la fermer
document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.querySelector('.toggle');

    if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
        if (!sidebar.classList.contains('hidden')) {
            sidebar.classList.add('hidden');
            document.querySelector('.content').style.marginLeft = '0';
            toggleButton.style.left = '10px';
        }
    }
});

// Gestion du Modal Utilisateur
document.addEventListener('DOMContentLoaded', function() {
    const userIcon = document.getElementById('userIcon');
    const userModal = document.getElementById('userModal');
    const closeModal = document.querySelector('.modal .close');

    // Ouvrir le modal lorsque l'icône utilisateur est cliquée
    userIcon.addEventListener('click', function(event) {
        event.stopPropagation(); // Empêche la propagation pour éviter de fermer le modal immédiatement
        userModal.style.display = 'block';
    });

    // Fermer le modal lorsque l'on clique sur la croix
    closeModal.addEventListener('click', function() {
        userModal.style.display = 'none';
    });

    // Fermer le modal lorsque l'on clique en dehors du contenu du modal
    window.addEventListener('click', function(event) {
        if (event.target == userModal) {
            userModal.style.display = 'none';
        }
    });
});

