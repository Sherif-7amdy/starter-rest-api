<?php
ini_set('user_agent', 'Android Vinebre Software');
$arrContextOptions=array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false,),); 
$tilfazarab = file_get_contents('https://config.e-droid.net/srv/config.php?v=132&vname=1.0&idapp=1869597&idusu=0&cod_g=&gp=0&am=0&idl=en&pa_env=1&pa=US&pn=com.dramalive23&fus=010100000000&aid=c64821ef3b477efc', false, stream_context_create($arrContextOptions));
$first_step = explode( '[s349579_url=' , $tilfazarab );
$second_step = explode("][" , $first_step[1] );
$user= $second_step[0];
$a=str_replace("/98",$_GET['s'], $user);
header('Location: '.$a);
?>
