<?php
$red="\033[1;31m";
$yel="\033[1;33m";
$gr="\033[1;32m";
$blu="\033[1;96m";
system("clear");


echo "$gr

             _               
            | |              
   ___ _   _| |__   ___ _ __ 
  / __| | | | '_ \ / _ \ '__|
 | (__| |_| | |_) |  __/ |   
  \___|\__, |_.__/ \___|_|   
        __/ |                
   __ _|___/ _ __ ___  _   _ 
  / _` | '__| '_ ` _ \| | | |
 | (_| | |  | | | | | | |_| |
  \__,_|_|  |_| |_| |_|\__, |
                        __/ |
                       |___/ 

";

function fbpage(){
system("xdg-open 'https://www.facebook.com/Sk.bd.32 ' ");
}

function fbgrp(){
system(" xdg-open 'https://facebook.com/groups/412641030225365'");

}

function yt(){
system("xdg-open 'https://www.youtube.com/@shohagkhan0033'");


}

echo"$yel enter 1 for facebook page";
echo"
";
echo" enter 2 for facebook group
";
echo" enter 3 for youtube chanal

";
$a= readline("$blu enter your option : ");

if($a==1){
fbpage();
}

if($a==2){
fbgrp();

}

if($a==3){
yt();

}
?>
