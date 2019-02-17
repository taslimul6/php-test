<?php

echo("hi my name is Taslimul Hasan");
echo"hi2 "," my name is Taslimul Hasan";
$name="hi my name is Taslimul Hasan";

echo $name;

//aarithmetic operator

$father=60;
$son=40;

$total=$father+$son;
echo $total;

//assignment operator

$age =20;
$age=$age+5;
echo $age ;

$age =20;
$age +=5;
echo $age;


//logical operator

$username ="shuily";
$pass="asbc";

if ($username=="shuily" && $pass=="asbc") {
    echo"welcome";
}  
else {
    echo "u not valid";
}

//comparison operator(==,!=,>,>=,<,<=)

$smk=20;
$tmk=25;
 
if ($smk==$tmk) {
    echo "same";
}else { 
}

if ($smk<$tmk) {
    echo "not";
}else {
    echo "yes";
}


//Arrey

//index Arrwy

$father= array('soshi','sahana', 'sathi','sana');
print_r ($father);



$father= array('soshi','sahana', 'sathi','sana');
echo $father[3];

$father= array(1=>'soshi','sahana', ' sathi','sana');
echo $father[3];

//Assosiative arrey(key=>value)

$father= array('soshi'=>25,'sahana'=>10, 'sathi'=>18,'sana'=>19);
print_r ($father);


$father= array('soshi'=>25,'sahana'=>10, 'sathi'=>18,'sana'=>19);
echo $father['sathi'];

//multidimensional arrey

$father= array('
soshi'=>array('age'=>25,'sub'=>'eee', 'hobby'=>'read','sex'=>'female'),
'sahana'=>array('age'=>25,'sub'=>'eee', 'hobby'=>'read','sex'=>'female'),
 ' sathi'=>array('age'=>25,'sub'=>'eee', 'hobby'=>'read','sex'=>'female'),
 'sana'=>array('age'=>25,'sub'=>'eee', 'hobby'=>'read','sex'=>'female'));

 print_r ($father);
 echo $father[' sathi']['sex'];










 //LOOP Ki????

 //for loop

 for ($i=0; $i <100 ; $i++) { 

  echo $i.'<br>';
 }
 for ($i=0; $i <100 ; $i+=2) { 

  echo $i.'<br>';
 }
 for ($k=1; $k <100 ; $k+=2) { 

  echo $k.'<br>';
 }




 //while loop

$p=1;
 while ($p <= 10) {
    echo $p;
    $p++;
 }



 //foreach loop


 $father= array('soshi','sahana', 'sathi','sana');

 foreach($father as $a=>$b){

    echo( $golpo.'<br>');
 }

?>