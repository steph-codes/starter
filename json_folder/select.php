<?php
// when encoding php in html dont close the braces but close php
//then open php again for the closing brace.
$today = date("d");
if($today  < 20){
echo "Sorry Application is closed";
}else{
 ?>

 <select name="state" class="form-control">
     <option value="lagos">lagos</option>
     <option value="Oyo">Oyo</option>
     <option value="ikeja">Ikeja</option>
 </select>
<?php
}
?>