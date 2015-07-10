<?php
$for="for"; 
switch ($for) {

case "for":     

for($multi=1;$multi<=10;$multi++)
{
echo "<table border=3>";
echo "<tr align=center><td colspan=5>Tabla de ".$multi.":</td></tr>";

for ($multi2=1;$multi2<=10;$multi2++)
{
$resultado=$multi*$multi2;
echo "<tr align=center><td>".$multi."</td><td> X </td><td>".$multi2."</td><td> = </td><td>".$resultado."</td></tr>";
}
echo "</table>";
}
    break;
    
case 'while':

    echo "<table border=5><tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo1.":</td></tr>";
$ciclo2=1;
while($ciclo2<=10)
{
$mult=$ciclo1*$ciclo2;
echo "<tr align=center><td>".$ciclo1."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
$ciclo2++;
}
echo "</table>";
$ciclo1++;

break;
    
case 'do-while':

$ciclo1=1;
do
{
echo "<table border=7><tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo1.":</td></tr>";
$ciclo2=1;
do
{
$mult=$ciclo1*$ciclo2;
echo "<tr align=center><td>".$ciclo1."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
$ciclo2++;
}while($ciclo2<=10);
echo "</table>";
$ciclo1++;
}while($ciclo1<=10);
break;
}
?>