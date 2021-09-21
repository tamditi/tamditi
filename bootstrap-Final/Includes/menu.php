<?php
function DisplayMenu()
{
    $menu = '
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="./">
                <img class="d-inline-block align-top" width="30" height="30" src="./Images/logo.png" aria-label="Logo compagnie" /> Crazy Cupcakes
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContenu" aria-controls="navbarContenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarContenu" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">'
    . GetItems() . '
                </ul>
                <i class="bi bi-cart mr-2 p-1 border text-white" title="Panier"></i>
                <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
                    <input name="what" class="form-control mr-sm-2" type="search" placeholder="Rechercher produits" aria-label="Rechercher produits" required>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" aria-label="Rechercher">Rechercher</button>
                    <input type="hidden" name="searchBy" value="something">
                </form>
            </div>
        </nav>';
    echo $menu;
}

function GetPages()
{
    $pages = array(
        "Accueil" => "index.php",
        "Nos Cupcakes" => "products.php",
        "A propos de nous" => "about.php",
        "Contacts" => "contact.php"
    );
    return $pages;
}

function GetItems()
{
    $lis = "";
    foreach (GetPages() as $page => $url) {
        $active = IsActive($url);
        $sronly = ($active == "active") ? '<span class="sr-only">(courant)</span></a></li>' : "";
        $lis .= "<li class='nav-item $active'><a class='nav-link' href='$url'>$page $sronly</a></li>";
    }
    return $lis;
}

function IsActive($url)
{
    $pageName = basename($_SERVER['SCRIPT_NAME']);
    return stripos($pageName, $url) !== false ? "active" : "";
}
?>