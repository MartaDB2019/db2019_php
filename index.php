<h1>hola mundo</h1>
Esto está escrito en HTML
y no hay saltos de línea

<?php


echo  date('H:i:s:');
echo '<br/>';
echo 2+5;
echo '<br/>';
$ahora=time();
$final=strtotime ('2019-09-25');
$dias=($final-$ahora)/60/60/24;
echo $dias;
echo '<br/>';
echo (strtotime ('2019-09-25') -time() / (
60*60*24
));
echo '<br/>';

$nacimiento=strtotime ('1989-05-27');
$hoy= time();
$edad =($hoy-$nacimiento)/60/60/24/365.25; 
echo $edad;
echo round($edad);

// $i=$i+1 $i++ $i+=1

for($i=0;$i<10;$i++){
	echo $i;
	echo'<br/>';
}

echo '<br/>';

for($i=2;$i<22;$i=$i+2){
	echo $i;
	echo'<br/>';
}

echo '<br/>';

for($i=1;$i<=10;$i++){
	echo '2**'.$i.'='.(2**$i);
	echo '<br/>';
}

for($i=1;$i<=10;$i++){
	echo 'cuadrado de'.$i.'='.($i**2);
	echo '<br/>';
}

$n1=1;
$n2=0;
for ($i=0; $i<=10; $i++){
	$suma=$n1+$n2;
	$n1=$n2;
	$n2=$suma;
	echo $suma."";
}


//Secuencia de Fibonacci

$f[0]=0;
$f[1]=1;
for($i=2;$i<=10;$i++){
	$f[$i]=$f[$i-1]+$f[$i-2];
}
	echo '<pre>';
	print_r($f);
	echo '<pre/>';
	
// Factorial de los 10 primeros números naturales
// 0!=1
// 1!=1
// 2!=2
// 3!=3*2=6
// 4!=4*3*2=24
// 5!=5*24=120
// 6!=6*120=720

$f=1;
for ($i=2; $i<=10; $i++){
	$f=$f*$i;
	echo $i. '=' .$f. '<br/>';
}

/*
// erastotenes

function eratosthenes($n)
{
   $all=array();
   $prime=1;
   echo 1," ",2;
   $i=3;
   while($i<=$n)
   {
        if(!in_array($i,$all))
         {
            echo " ",$i;
            $prime+=1;
            $j=$i;
            while($j<=($n/$i))
            {
               array_push($all,$i*$j);
               $j+=1;
            }
         }
        $i+=2;
   }
   echo "\n";
   return;
}

eratosthenes(50);
*/

for($i=2;$i<=100;$i++){
	for($j=2;$j<=100;$j++){
		if(!isset ($np[$i])) $np[$i*$j]=1;
	}
}
for($i=1;$i<100;$i++){
	if(!isset($np[$i])) echo $i.'<br/>';
}

/*
echo '<pre>';
print_r($np);
echo '<pre/>';
*/

$alumno=[];

$alumno[]=[

	'nombre' => 'Marta',
	'apellido' => 'Ubierna',
	'mesa' => '705',

];

$alumno[]=[

	'nombre' => 'Jason',
	'apellido' => 'Todd',
	'mesa' => '710',

];

$alumno[]=[

	'nombre' => 'Damian',
	'apellido' => 'Wayne',
	'mesa' => '715',

];
echo $alumno[2]['mesa'];
$alumno[2]['lenguajes']=[
'HTML',
'CSS'
];
echo '<pre>';
print_r($alumno);
echo '<pre/>';

echo $alumno[1]['nombre'];
echo '<br/>';


?>