<php?

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'about':
        include 'index.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    case 'home':
    default:
        include 'home.php';
        break;
}

?>
<h1>Bienvenue sur la page d'accueil</h1>
<p>Ceci est la page d'accueil de notre site.</p>
<a href="?page=about">À propos de nous</a>
<a href="?page=contact">Contactez-nous</a>