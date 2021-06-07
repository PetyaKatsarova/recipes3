<?php
include_once 'dbconnection.php';
include_once 'add_recipe_logic.php';
?>

<!-- first form: add recipe to the recipes table -->
<head>
    <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<h3>Add/Remove Recipe and Ingredients</h3>
<!-- <p>Here should be a picture</p> -->
<!-- get lazagna url path from recipe3 folder/images -->
<?php 
//   $stm = $db->query("SELECT picture_url FROM link WHERE recipe_id = '". $link_recipe_id ."' ");

?>
<img src="images/lazagna.jpg" alt="picture of lazagna dish" />

<form method="post" >
    <label for="add_recipe">Recipe Name</label>
    <input type="text" name="add_recipe" id="add_recipe" /></br>
    <label for="instructions">Instructions</label>
    <textarea name="instructions" name="instructions"></textarea></br>
    <label for="cook_time">Cooking Time In Min</label>
    <input type="number" name="cook_time" /></br>

   <label for="ingredient_for_link"> Ingredient </label>
   <select name="ingredient_for_link">
   <?php
   foreach($ingrs as $id=>$name){
            ?>
                <option value="<?php echo $id ?>" ><?php echo $name ?></option>;
            <?php
    }
            ?>
   </select>
   <!-- <input type="text" name="ingredient_for_link" /><br/> -->

    <label for="quantity">Quantity: </label>
    <input type="number" name="quantity" />
    <label for="measurement">Measurement:</label>
    <input type="text" name="measurement" />

    <div> 
        <!-- do it in js: so the display is immediate -->
    <label for="delete_ingredient_from_recipe">Delete Ingredient</label>
    <select name="delete_ingredient_from_recipe" id="delete_ingredient_from_recipe">
            <?php
            foreach($ingrs as $key=>$val){
            ?>
                <option value="<?php echo $key ?>" ><?php echo $val ?></option>;
            <?php
    }
            ?>
        </select> 
    </div>
    <input type="submit" value="Add The Recipe" name="submit_add_recipe" />

</form>
<a href="index.php">Return to main menu</a>


