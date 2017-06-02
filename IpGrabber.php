<?php

/*
_______________.___.
\______   \__  |   |
 |    |  _//   |   |
 |    |   \\____   |
 |______  // ______|
        \/ \/       
   _____         _______           ________        __________.__         ._____________   __________ 
  /  _  \   ____ \   _  \   ____   \_____  \___  __\______   |  |   ____ |__\__    _______\______   \
 /  /_\  \ /    \/  /_\  \ /    \    _(__  <\  \/  /|     ___|  |  /  _ \|  | |    |_/ __ \|       _/
/    |    |   |  \  \_/   |   |  \  /       \>    < |    |   |  |_(  <_> |  | |    |\  ___/|    |   \
\____|__  |___|  /\_____  |___|  / /______  /__/\_ \|____|   |____/\____/|__| |____| \___  |____|_  /
        \/     \/       \/     \/         \/      \/                                     \/       \/ 

                                ~ Changing Author Name Wont Make You One :) 
                                             #Respect Coders
*/

error_reporting(0); // No One Like Errors (:

// Some Beatiful Colors For Text ^_^

$green = "\033[1;32m";

$red = "\033[1;31m";

$blue = "\033[1;34m";

$yellow = "\033[1;33m";

$cyan = "\033[1;36m";

$white = "\033[0m";

// Lets Create Something New To Not Get Our Commands Blocked :)

function execute($in) {
    $out = '';

    if(function_exists('exec')) {
        exec($in,$out);
        $out = join("\n",$out);
    } 

    elseif(function_exists('passthru')) {
        ob_start();
        passthru($in);
        $out = ob_get_clean();
    } 

    elseif(function_exists('system')) {
        ob_start();
        system($in);
        $out = ob_get_clean();
    } 

    elseif(function_exists('shell_exec')) {
        $out = shell_exec($in);
    } 

    elseif(is_resource($f = popen($in,"r"))) {
        $out = "";
        while(!feof($f))
            $out .= fread($f,1024);
        pclose($f);
    }
    return $out;
}

$errno = "\n[*] Please Enter A Valid Website ^_^\n\tThanks\n\t\t~ An0n 3xPloiTeR\n";

// Lets Check The OS

if(strtolower(substr(PHP_OS,0,3)) == "win") {
    $os = 'win';
} 

else {
    $os = 'linux';
}

if ($os == "linux") {

    $banner = "

" . $green . "██╗██████╗      ██████╗ ██████╗  █████╗ ██████╗ ██████╗ ███████╗██████╗ 
" . $red . "██║██╔══██╗    ██╔════╝ ██╔══██╗██╔══██╗██╔══██╗██╔══██╗██╔════╝██╔══██╗
". $blue ."██║██████╔╝    ██║  ███╗██████╔╝███████║██████╔╝██████╔╝█████╗  ██████╔╝
". $white ."██║██╔═══╝     ██║   ██║██╔══██╗██╔══██║██╔══██╗██╔══██╗██╔══╝  ██╔══██╗
" . $cyan . "██║██║         ╚██████╔╝██║  ██║██║  ██║██████╔╝██████╔╝███████╗██║  ██║
" . $yellow . "╚═╝╚═╝          ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚═════╝ ╚═════╝ ╚══════╝╚═╝  ╚═╝ ~ By An0n 3xPloiTeR | Team Pak Cyber Ghosts
        Greetz ~ Jokr Haxor - Kyle Butler - Shariq Malik

";

$argument = "\n" . $green . "[+] It'll Find The Ip Which Is Hiding Besides The Cloudflare Ip (Dont Use https\\http\\www)\n". $cyan ."[\$] Website:" . $white . " ";

} 

elseif ($os == "win") {
    
    $banner = "

██╗██████╗      ██████╗ ██████╗  █████╗ ██████╗ ██████╗ ███████╗██████╗ 
██║██╔══██╗    ██╔════╝ ██╔══██╗██╔══██╗██╔══██╗██╔══██╗██╔════╝██╔══██╗
██║██████╔╝    ██║  ███╗██████╔╝███████║██████╔╝██████╔╝█████╗  ██████╔╝
██║██╔═══╝     ██║   ██║██╔══██╗██╔══██║██╔══██╗██╔══██╗██╔══╝  ██╔══██╗
██║██║         ╚██████╔╝██║  ██║██║  ██║██████╔╝██████╔╝███████╗██║  ██║
╚═╝╚═╝          ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚═════╝ ╚═════╝ ╚══════╝╚═╝  ╚═╝ ~ By An0n 3xPloiTeR | Team Pak Cyber Ghosts
        Greetz ~ Jokr Haxor - Kyle Butler - Shariq Malik
                                                                        
";

$argument = "\n[+] It'll Find The Ip Which Is Hiding Besides The Cloudflare Ip :) (Dont Use https\\http\\www)\n[\$] Website: ";

}

echo $banner;

// Lets echo Out The Options :)

echo $argument;


$input = trim(fgets(STDIN, 1024));

$regex = "((https?|ftp)\:\/\/)?"; // SCHEME 
$regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass 
$regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP 
$regex .= "(\:[0-9]{2,5})?"; // Port 
$regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path 
$regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query 
$regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor 

if(preg_match("/^$regex$/i", $input)) {

	$dns = dns_get_record($input, DNS_MX);

	$mx_record=$dns[0]['target'];

	$ip = gethostbyname($mx_record);

	$n = gethostbyaddr($ip);

	echo " [\$] This is the Real ip \"" . $ip . "\" of " . $input . " \n";
	
	echo " [\$] It is also to $n\n";
}

else {
    die($errno);
}


?>
