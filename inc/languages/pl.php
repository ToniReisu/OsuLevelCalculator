<?php
// Polish Language Source File
// Translated by DarkStoorM
$olclang = array();

// Home and general things
$olclang["ab-home"] = "główna";
$olclang["ab-cl"] = "klasyczny";
$olclang["ab-top"] = "temat";
$olclang["footer"] = "wersja 1.3 <br>Stworzone przez TheHowl<br>wszelkie informacje możesz znaleźć w temacie na forum (link w nagłówku strony)";
$olclang["err"] = "Cholera, wystąpił błąd. Napisz coś o nim i zgłoś go do mnie!";
$olclang["title"] = "kalkulator poziomu osu!";
$olclang["err2"] = "błąd";
$olclang["cl-md"] = "Tryb klasyczny";
$olclang["footer-ttl"] = "Stopka"; 
$olclang["tran-cred"] = "<br>Polskie tłumaczenie: <a href=\"http://osu.ppy.sh/u/DarkStoorM\">DarkStoorM</a>.";
$olclang["errcl"] = "Błąd. Podany tekst dla poziomu nie jest liczbą, lub użytkownik nie istnieje. Gratulacje za zauważenie tego błędu!<br>Nie spodziewałeś się tego błędu? <a href=\"http://thehowl.it/reportolc.html\"><b>Zgłoś go.</b></a>";
// new
$olclang["s2l-md"] = "Różnica punktów między poziomami";
$olclang["s2l-tx1"] = "Oblicz różnicę między poziomem";
$olclang["s2l-tx2"] = "oraz";

// Form
$olclang["example"] = "Np.";
$olclang["insnick"] = "podaj nick";
$olclang["mode"] = "tryb";
$olclang["then"] = "a następnie";
$olclang["submit"] = "wyślij!";
$olclang["cl-tt"] = "podaj poziom, który chcesz osiągnąć";
$olclang["targ-lv"] = "docelowy poziom";

// Results
$olclang["api-res"] = '<h1>Wyniki</h1> <div class="txt">Ile punktów ' . @$_GET["nickname"] . ' potrzebuje, by zdobyć poziom ';
$olclang["api-res2"] = '?</div><br><div class="result">';
$olclang["dia"] = '</div><br><div class="txt">policz jeszcze raz!</div><br>';
$olclang["cl-res"] = '<h1>Wyniki</h1><div class="txt">By osiągnąć ' . @$_GET["leveltoreach"] . ' poziom, potrzebujesz następującą ilość punktów </div><br><div class="result">';
// New part starts here [13/06/14]
$olclang["s2l-res"] = '<h1>Wyniki</h1><div class="txt">Różnica z poziomu ' . @$_GET["l1"] . ' do ' . @$_GET["l2"] . ' jest równa</div><br><div class="result">';
$olclang["abs"] = '<div class="txt">Uwaga: powyższa wartość jest wartością bezwzględną!'; 
return $olclang;
?>
