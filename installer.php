<?php
error_reporting(0);
//color
$Yellow = "\e[33m";
$Green = "\e[92m";
$White = "\e[0m";
$blue = "\e[33m";


//choose tools
echo "\n{$Green}
██╗  ██╗███╗   ███╗███████╗ ██████╗
██║  ██║████╗ ████║██╔════╝██╔════╝
███████║██╔████╔██║███████╗██║     
██╔══██║██║╚██╔╝██║╚════██║██║     
██║  ██║██║ ╚═╝ ██║███████║╚██████╗
╚═╝  ╚═╝╚═╝     ╚═╝╚══════╝ ╚═════╝
{$White}Installer Libs HMSC Termux linux
Author: Iddant ID
\n";
echo " 
         {$Green}➤{$White} 1. {$Yellow}HMSC arm PHP 7.4{$White}
         {$Green}➤{$White} 2. {$Yellow}HMSC aarch64 PHP 7.4 {$White}
         {$Green}➤{$White} 3. {$Yellow}HMSC arm PHP 8.1{$White}
         {$Green}➤{$White} 4. {$Yellow}HMSC aarch64 PHP 8.1{$White}
         {$Green}➤{$White} 5. {$Yellow}HMSC aarch64 PHP8.2{$White}
         {$Green}➤{$White} 6. {$Yellow}HMSC arm PHP 8.2{$White}
         {$Green}➤{$White} 7. {$Yellow}Checking PHP Version{$White}
         {$Green}➤{$White} 8. {$Yellow}Checking Karnel Termux{$White}
\n";

echo " {$Green}➤{$White} Choose: ";
$pil = trim(fgets(STDIN));
if ($pil == "1") {
    $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/arm/php7.4/nts/hmsc.so --output hmsc.so');
    $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
    $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
    $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/php');

    echo " {$Green}➤{$White} Installed lib hmsc.so arm PHP 7\n";
} else if ($pil == "2") {

    $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/aarch64/php7.4/zts/hmsc.so --output hmsc.so');
    $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/7.4.33/modules/hmsc.so');
    $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
    $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/php/7.4.33');

    echo " {$Green}➤{$White} Installed lib hmsc.so aarch64 PHP 7\n";
} else if ($pil == "3") {
    $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/arm/php8.1/nts/hmsc.so --output hmsc.so');
    $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
    $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
    $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/');

    echo " {$Green}➤{$White} Installed lib hmsc.so arm PHP 8.1\n";
} else if ($pil == "4") {

    $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/aarch64/php8.1/nts/hmsc.so --output hmsc.so');
    $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
    $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
    $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/');
    $cpIni = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/php.ini');

    echo " {$Green}➤{$White} Installed lib hmsc.so aarch64 PHP 8.1\n";
} else if ($pil == "5") {
    $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/aarch64/php8.2/nts/hmsc.so --output hmsc.so');
    $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
    $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
    $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/');
    $cpIni = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/php.ini');

    echo " {$Green}➤{$White} Installed lib hmsc.so aarch64 PHP 8.2\n";
} else if ($pil == "6") {
    $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/arm/php8.2/nts/hmsc.so --output hmsc.so');
    $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
    $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
    $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/');
    $cpIni = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/php.ini');

    echo " {$Green}➤{$White} Installed lib hmsc.so arm PHP 8.2\n";
} else if ($pil == "7") {
    echo " {$Green}➤{$White} Checking version PHP\n";
    $a = shell_exec('php -v');
    echo " {$Green}➤{$White} $a\n";
} else if ($pil == "8") {

    echo " {$Green}➤{$White} Checking karnel termux\n";
    $a = shell_exec('uname -a');
    $b = shell_exec('dpkg --print-architecture');
    echo " {$Green}➤{$White} $a\n";
    echo " {$Green}➤{$White} Your karnel: $b\n";
}
