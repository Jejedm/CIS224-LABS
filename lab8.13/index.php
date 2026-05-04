<!DOCTYPE html>
<html lang="en">
<head>
   <title>Bistro order</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>
   <h1>Bistro order</h1>

   <?php
   require "./order_functions.php";
   ?>

   <form method="post" action="process_order.php">   
      <div>
         <label for="dessert">Dessert:</label>
         <select id="dessert" name="dessert">
            <option value="none">Select one...</option>
            <option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?> >
               Cheesecake</option>
            <option value="Chocolate Cake" <?= dessertSelected("Chocolate Cake"); ?> >
               Chocolate Cake</option>
            <option value="Carrot Cake" <?= dessertSelected("Carrot Cake"); ?> >
               Carrot Cake</option>
            <option value="Tiramisu" <?= dessertSelected("Tiramisu"); ?> >
               Tiramisu</option>
         </select>
      </div>   
      <div>
         <label for="drink">Drink:</label>
         <select id="drink" name="drink">
            <option value="none">Select one...</option>
            <option value="Coffee" <?= drinkSelected("Coffee"); ?> >
               Coffee</option>
            <option value="Hot Chocolate" <?= drinkSelected("Hot Chocolate"); ?> >
               Hot Chocolate</option>
            <option value="Root Beer" <?= drinkSelected("Root Beer"); ?> >
               Root Beer</option>
            <option value="Tea" <?= drinkSelected("Tea"); ?> >
               Tea</option>
            <option value="Milk" <?= drinkSelected("Milk"); ?> >
               Milk</option>
         </select>
      </div>
      <div>
         <label for="drink-size">Drink size:</label>
         <div id="drink-size">
            <div>
               <input type="radio" id="size-small" name="drinkSize" value="Small" 
                  <?= drinkSizeSelected("Small"); ?> >
               <label for="size-small">Small</label>
            </div>
            <div>
               <input type="radio" id="size-medium" name="drinkSize" value="Medium" 
                  <?= drinkSizeSelected("Medium"); ?> >
               <label for="size-medium">Medium</label>
            </div>
            <div>
               <input type="radio" id="size-large" name="drinkSize" value="Large" 
                  <?= drinkSizeSelected("Large"); ?> >
               <label for="size-large">Large</label><br>
            </div>
         </div>
      </div>

      <input type="submit" value="Order">

   </form>
</body>
</html>
