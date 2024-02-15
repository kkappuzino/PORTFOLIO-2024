<?php

$pros = ['portfolio24', 'memories', 'vtuber', 'blm'];

switch ($_SERVER['QUERY_STRING']) {
    case 'portfolio-2024':
            require 'head.php';
            require "structure/nav.php";
            require 'structure/project.php';
            require 'content/portfolio24.php';
            require "structure/footer.php";
            break;

    case 'memories':
            require 'head.php';
            require "structure/nav.php";
            require 'structure/project.php';
            include 'content/memories.php';
            require "structure/footer.php";
            break;
    
    case 'vtuber':
            require 'head.php';
            require "structure/nav.php";
            require 'structure/project.php';
            include 'content/vtuber.php';
            require "structure/footer.php";
            break;

    case 'blm':
            require 'head.php';
            require "structure/nav.php";
            require 'structure/project.php';
            include 'content/blm.php';
            require "structure/footer.php";

            break;        
    
    default:
        if ($_SERVER['QUERY_STRING'] != '$pros' ) {
            require 'head.php';
            require "structure/nav.php";
            require 'structure\body.php';
            require "structure/footer.php";
        } else {
            header('HTTP/1.0 404 Not Found');
            
        }
        break;
}
