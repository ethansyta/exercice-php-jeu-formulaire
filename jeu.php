<?php 
$aDeviner = 150;
$error = null;
$succes = null;
$value = null;

if (isset($_POST['chiffre'])){
    $value = (int)$_POST['chiffre'];
    if($value > $aDeviner) {
        $error = "votre chiffre est trop grand";
     } elseif($value < $aDeviner){
        $error = "votre chiffre est trop petit";
    }else{
        $succes = "bravo! vous avez trouvé <strong>$aDeviner<strong>";
    }
    
}

require 'header.php' 
?>


<?php if ($error):?>
<div class="alert alert-danger">
    <?= $error ?>
</div>
<?php elseif ($succes): ?>
<div class="alert alert-succes">
    <?= $succes ?>
</div>
<?php endif ?>


<form action="/jeu.php" method ="POST">
    <div class="form-group">
    <input type="number" class ="form-control" name="chiffre" placeholder="de 0 a 200" value="<?php if (isset($_GET['chiffre'])) { echo htmlentities($_GET['chiffre']);}?>">
    </div>
    
    <button type="submit" class="btn btn-primary">deviner</button
</form>

<h2>$_GET</h2>
<pre>
    <?php var_dump ($_GET) ?>
</pre>

<h2>$_post</h2>
<pre>
    <?php var_dump($_POST)?>
</pre>
