<?php

if(isset($_POST["q"])){
  echo "<li>".$_POST["q"]."</li><li>RCC Institute of Technology</li><li>R C College of Commerce</li><li>RV College of Engineering</li><li>Rani Birla Girls' College</li><li>Roorkee Institute of Technology</li>";
}else{
  exit("Error: Unauthorized access");
}

?>
