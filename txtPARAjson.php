<?php
$string = "
Akuma--420.000--2--https://i.imgur.com/BflrI8X.jpg#
Avarus--350.000--1--https://i.imgur.com/kfSvOg2.jpg#
Bagger--240.000--2--https://i.imgur.com/v83tZG9.jpg#
Bati--300.000--2--https://i.imgur.com/g4hY8P0.jpg#
Bf400--260.000--2--https://i.imgur.com/7UxVjnh.jpg#
Blazer--200.000--1--https://i.imgur.com/OZbY7Uy.jpg#
Blazer4--300.000--1--https://i.imgur.com/mdZy4KI.jpg#
Carbonrs--300.000--2--https://i.imgur.com/uaI3ne4.jpg#
Chimera--280.000--1--https://i.imgur.com/rZk5tNc.jpg#
Cliffhanger--250.000--2--https://i.imgur.com/b36j1My.jpg#
Daemon--200.000--2--https://i.imgur.com/Dj8Z5xt.jpg#
Daemon2--200.000--2--https://i.imgur.com/qvJSkno.jpg#
Deathbike--350.000--1--https://i.imgur.com/GJra8i6.jpg#
Defiler--380.000--1--https://i.imgur.com/sBqbUoo.jpg#
Diablous--350.000--1--https://i.imgur.com/PpKs1rJ.jpg#
Diablous2--380.000--1--https://i.imgur.com/d6qF8Gx.jpg#
Double--300.000--2--https://i.imgur.com/iHNQTvB.jpg#
Enduro--160.000--2--https://i.imgur.com/65vnn6Z.jpg#
Esskey--260.000--2--https://i.imgur.com/Hd7Ranl.jpg#
Faggio--4.000--2--https://i.imgur.com/GCvwVKI.jpg#
Faggio2--5.000--2--https://i.imgur.com/Er2UJU7.jpg#
Faggio3--5.000--2--https://i.imgur.com/uiw4Ok3.jpg#
Fcr--320.000--1--https://i.imgur.com/SdR28Xx.jpg#
Fcr2--320.000--1--https://i.imgur.com/z6uDZ5v.jpg#
Gargoyle--280.000--2--https://i.imgur.com/DshORVq.jpg#
Hakuchou--310.000--2--https://i.imgur.com/5KuCWgY.jpg#
Hakuchou2--450.000--2--https://i.imgur.com/BK55fst.jpg#
Hexer--180.000--2--https://i.imgur.com/Y4S4ONg.jpg#
Innovation--210.000--2--https://i.imgur.com/2Bbg29d.jpg#
Lectro--310.000--2--https://i.imgur.com/pQ0KmyQ.jpg#
Manchez--290.000--2--https://i.imgur.com/Pdsxafi.jpg#
Nemesis--280.000--2--https://i.imgur.com/H7ZgeR2.jpg#
Nightblade--340.000--2--https://i.imgur.com/OBFlwXw.jpg#
Pcj--180.000--2--https://i.imgur.com/62ea6Gh.jpg#
Ruffian--280.000--2--https://i.imgur.com/s1F6ZtA.jpg#
Sanchez--150.000--2--https://i.imgur.com/dp22Kgd.jpg#
Sanchez2--150.000--2--https://i.imgur.com/jwa1X0k.jpg#
Sanctus--350.000--1--https://i.imgur.com/nUu42Ya.jpg#
Shotaro--1.000.000--1--https://i.imgur.com/Cgoe7a8.jpg#
Sovereign--240.000--1--https://i.imgur.com/uKlQLZM.jpg#
Thrust--300.000--2--https://i.imgur.com/m6jeW63.jpg#
Vader--280.000--2--https://i.imgur.com/a0SB9II.jpg#
Vindicator--250.000--2--https://i.imgur.com/yGDi1SK.jpg#
Vortex--300.000--1--https://i.imgur.com/utL8Uro.jpg#
Wolfsbane--230.000--2--https://i.imgur.com/eUMVxgZ.jpg#
Zombiea--230.000--2--https://i.imgur.com/zDfV3zV.jpg#
Zombieb--235.000--2--https://i.imgur.com/nwTdyKM.jpg
";
$tudo = explode("#", $string);
//print_r($tudo);

foreach ($tudo as $key => $value) {
    //echo $key."->".$value."<br>";
    $tudo2 = explode("--", $tudo[$key]);
    echo ",{";
    echo '"name"  : "'.$tudo2[0].'",';    
    echo '"value" : "'.$tudo2[1].'",';
    echo '"mount" : "'.$tudo2[2].'",';
    echo '"image" : "'.$tudo2[3].'"';
    echo "}";
}
?>