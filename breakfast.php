<?php
$field_name = $_POST["name"];
$field_room = $_POST["room"];
$field_painmie = $_POST["paindemie"];
$field_paincomp = $_POST["paincomplet"];
$field_demibag = $_POST["demibaguette"];
$field_tarti = $_POST["tarti"];
$field_croissant = $_POST["croissant"];
$field_praisin = $_POST["painraisin"];
$field_pchoc = $_POST["painchocolat"];
$field_cereal = $_POST["cereal"];
$field_fruits = $_POST["fruits"];
$field_yog = $_POST["yog"];
$field_cold = $_POST["cold"];
$field_hot = $_POST["hot"];
$field_sucre = $_POST["sucre"];

$field_message = "";

if($field_painmie !== 0 || $field_paincomp !==0 || $field_demibag !==0 || $field_croissant !== 0 || $field_praisin !==0 || $field_pchoc !==0) {
                 $field_message = "Pain et Viennoiseries \n";
    if ($field_painmie !== 0 || $field_paincomp !==0 || $field_demibag !==0){ 
		  $field_message.="\n"."Pain \n"."\n";
            if ($field_painmie !== 0){
		      $field_message.="Pain de mie: ".$field_painmie."\n";
		    }
            if ($field_paincomp !== 0){ 
		      $field_message.="Pain complet: ".$field_paincomp."\n";
		    }
            if ($field_demibag !== 0) {
		      $field_message.="Demi-baguette: ".$field_demibag."\n";
		    }
	}
    if ($field_croissant !== 0 || $field_praisin !==0 || $field_pchoc !==0){
		  $field_message.="\n"."Viennoiseries \n"."\n";
		    if ($field_croissant !== 0){
		      $field_message.="Croissant: ".$field_croissant."\n";
		    }
            if ($field_praisin !== 0){ 
		      $field_message.="Pain au raisin: ".$field_praisin."\n";
		    }
            if ($field_pchoc !== 0) {
		      $field_message.="Pain au chocolat: ".$field_pchoc."\n";
		    }
	}
}
if(isset($field_tarti)){
	$field_message.= "\n"."Tartinables \n"."\n";
    foreach($_POST["tarti"] as $tarti => $name){
        $field_message.= $name."\n";
    }
}  
if(isset($field_cereal) OR isset($field_fruits) OR isset($field_yog)){
    $field_message.= "\n"."Céréales et Fruits \n"."\n";
	if(isset($field_cereal)){
	  $field_message.= $_POST["cereal"]."\n";
	}
	if(isset($field_fruits)){
		$field_message.= $_POST["fruits"]."\n";
	}
	if(isset($field_yog)){
		$field_message.=$_POST["yog"]."\n";
	}
}
if(isset($field_cold) OR isset($field_hot)){
	$field_message.= "\n"."Boissons \n"."\n";
	if(isset($field_cold)){
		$field_message.= $_POST["cold"]."\n";
	}
	if(isset($field_hot)){
		$field_message.= $_POST["hot"]."\n";
	}
}
if($field_sucre !== 0){
	$field_message.= "\n"."sucre: ".$_POST["sucre"];
}    
$mail_to = "hellojito@gmail.com";

$subject = "Commande envoyée par ".$field_name."\n".$field_room;

$body_message = $field_message."\n";

$mail_status = mail($mail_to, $subject, $body_message);
if ($mail_status){ ?>
 <script language="javascript" type="text/javascript">
    alert("La commande a bien été envoyée");
    window.location = "index.php";
 </script>
 <?php
}
else {?>
<script language="javascript" type="text/javascript">
    alert("La commande n'a pas été envoyée. Merci d'envoyer un message à hellojito@gmail.com");
    window.location = "index.php";
</script>
<?php
}
?> 
   