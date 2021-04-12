 <?php
 require_once ("../vendor/autoload.php");
 use App\Wcs\Hello;
 use HelloWorld\SayHello ;
 $talk = new Hello ();
 echo $talk->talk();
 $grif = new Sayhello() ;
 echo  $grif -> world () ;