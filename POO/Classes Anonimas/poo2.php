<?php

function a_class(){
  return new class {};
}

if(get_class(a_class()) === get_class(a_class())){
 echo "São iguais os objetos". get_class(a_class());
}else{
  echo "Os objetos não são iguais";
}
echo "<br>-------------- <br>";
var_dump(a_class());

echo "<br>-------------- <br>";
var_dump(a_class());
?>
