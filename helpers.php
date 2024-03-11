<?php


/**
 * 
 * @param string $path
 * @return string
 */

 function basePath($path){
    return __DIR__.$path;
 }

/**
 * 
 * @param string $name
 * @return void
 * 
 */

 function loadView($name){
   $viewPath = basePath("/views/partials/{$name}.php");

   if(file_exists($viewPath)) {
      require $viewPath;
   } else {
      echo "View '{$name}' not found";
   }

 } 

 /**
 * 
 * @param string $name
 * @return void
 * 
 */

 function loadPartial($name){
   $partialPath = basePath("/views/partials/{$name}.php");

   if(file_exists($partialPath)) {
      require $partialPath;
   } else {
      echo "View '{$name}' not found";
   }

 } 