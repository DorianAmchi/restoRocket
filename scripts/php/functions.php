<?php

function redirect_user($bool, $requete, $user) {
    if(isset($_GET['page'])){        
    $page = $_GET['page'];
    }else{
        $page=false;
    }
    $requete == "co" ?
                    ($bool ?
                            ($page == false ?
                                    $_SESSION['url'] = "http://resto-rocket.bwb/?co=TRUE&user=" . $user 
                                    : $_SESSION['url'] = "http://resto-rocket.bwb/?page=" . $page . "&co=TRUE&user=" . $user) 
                            : ($page == false ?
                                    $_SESSION['url'] = "http://resto-rocket.bwb/?co=FALSE" 
                                    : $_SESSION['url'] = "http://resto-rocket.bwb/?page=" . $page . "&co=FALSE")) 
                    : ($bool ?
                            ($page == false ?    
                                    $_SESSION['url'] = "http://resto-rocket.bwb/?in=TRUE" 
                                    : $_SESSION['url'] = "http://resto-rocket.bwb/?page=" . $page . "&in=TRUE") 
                            : ($page == false ? 
                                    $_SESSION['url'] = "http://resto-rocket.bwb/?in=FALSE" 
                                    : $_SESSION['url'] = "http://resto-rocket.bwb/?page=" . $page . "&in=FALSE"));
return $_SESSION['url'];  
}
