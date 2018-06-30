<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="breakfast.css" type="text/css">
<title>Petit Déjeuner</title>
<body>
    
    <div id="wrapper">
<h1>Petit Déjeuner</h1>

<form action="breakfast.php" method="post">
<p class="nameAndRoom">
Nom: <input id="nameInput" name="name">
Chambre: <input id="roomNumber" type="number" name="room">

<section>
    <fieldset>
        <legend>Pain & Viennoiseries</legend>
        <h3>Pains</h3>
        <p>Pain de mie <input id="paindemie" name="paindemie" type="number" value="0">
        <br>Pain complet <input id="paincomplet" name="paincomplet" type="number" value="0">
        <br>Demi-baguette <input id="demibaguette" name="demibaguette" type="number" value="0">
        <h3>Tartinables</h3>
        <label for="beurre"><input id="beurre" name="tarti[1]" type="checkbox" value="beurre"> Beurre</label>
        <label for="confiture"><input id="confiture" name="tarti[2]" type="checkbox" value="confiture"> Confiture</label><br>
        <label for="miel"><input id="miel" name="tarti[3]" type="checkbox" value="miel"> Miel</label>
        <label for="nutella"><input id="nutella" name="tarti[4]" type="checkbox" value="nutella"> Nutella</label>
        <h3>Viennoiseries</h3>
        <p>Croissant <input id="croissant" name="croissant" type="number" value="0">
        <br>Pain au raisin <input id="painraisin" name="painraisin" type="number" value="0">
        <br>Pain au chocolat <input id="painchocolat" name="painchocolat" type="number" value="0">
    </fieldset>
    <fieldset>
        <legend>Céréales et Fruits</legend>
        <h3>Céréales</h3>
        <label for="muesli"><input id="muesli" name="cereal" type="radio" value="muesli"> Muesli</label>
        <label for="cornflakes"><input id="cornflakes" value="cornflakes" name="cereal" type="radio"> Cornflakes</label>
        <label for="nocereal"><input id="nocereal" value="rien" name="cereal" type="radio"> Rien</label>
        <h3>Fruits</h3>
        <label for="pomme" ><input id="pomme" value="pomme" name="fruits" type="checkbox"> Pommes</label>
        <label for="banane"><input id="banane" value ="banane" name="fruits" type="checkbox"> Bananes</label>
        <h3>Yogurt</h3>
        <label for="nature"><input id="nature" value="nature" name="yog" type="radio"> Nature</label>
        <label for="vanille"><input id="vanille" value="vanille" name="yog" type="radio"> Vanille</label>
        <label for="soy"><input id="soy" value=" au soja" name="yog" type="radio"> Au soja</label>
        <label for="noyog"><input id="noyog" value="rien" name="yog" type="radio"> Rien</label>
    </fieldset>
    <fieldset>
        <legend>Boissons</legend>
        <h3>Boissons Froides</h3>
        <label for="juspomme"><input id="juspomme" value="jus de pomme" name="cold" type="radio"> Jus de pommes</label>
        <label for="jusorange"><input id="jusorange" value="jus d'orange" name="cold" type="radio"> Jus d'Orange</label>
        <label for="nojus"><input id="nojus" value="rien" name="cold" type="radio"> Rien</label>
        <h3>Boissons Chaudes</h3>
        <label for="cafe"><input id="cafe" value="café" name="hot" type="radio"> Café</label>
        <label for="the"><input id="the" value="thé" name="hot" type="radio"> Thé</label>
        <label for="choc"><input id="choc" value="chocolat chaud" name="hot" type="radio"> Chocolat Chaud</label>
        <label for="nocafe"><input id="nocafe" value="rien" name="hot" type="radio"> Rien </label>
        <p>Sachets de sucres: <input id="sucre" name="sucre" type="number" value="0">
    </fieldset>
	<textarea id="commande" name="cf_commande" style="display:none;"></textarea>
<p class="buttons">
    <input id="submitButton" type="submit" value="Envoyer">
   <input id="resetButton" type="reset" value="Effacer">
   
</form>
</section>
</body>