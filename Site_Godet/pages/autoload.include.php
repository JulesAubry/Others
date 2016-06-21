<?php
//<!--@Author : Jules AUBRY-->
function __autoload($className) { 
      if (file_exists($className . '.class.php')) { 
          require_once $className . '.class.php'; 
          return true; 
      } 
      return false; 
}

?>