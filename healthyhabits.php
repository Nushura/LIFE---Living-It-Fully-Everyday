<!DOCTYPE html>
<html lang="en">

<head>
    <title>healthyhabits</title>
    <meta name="keywords" content="Layout">
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8">

    <link rel='stylesheet' href='stylesheet/layout.css' type='text/css'>
    </script>

</head>

<body>
    <div class="wrapper">

        <!-- require_once used to connect this php code with the header fragment inside includes -->
        <?php require_once("includes/header.php"); ?>
        
        <!-- require_once used to connect this php code with the navbar fragment inside includes -->
        <?php require_once("includes/navbar.php"); ?>

        <div class="box content">
            <h3 class='yogaheader'>Meal planner</h3>

            <p class="mealintro">Choose the number of meals you would like to have today.</p>
            <h3 class="mealtype">MEAL TYPES</h3>

            <!-- All the images in tjis div are taken from pexels -->
            <!-- This section is just displaying the type of meals available inside the meal plans -->
            <div class="fourmeals">
                <span class="layoutdiets">
                    <img class='diets' src="assets/images/paleo.jpg" alt="Spaghetti with vegitables">
                    <div class>
                        <h4>Paleo</h4>
                    </div>
                </span>

                <span class="layoutdiets">
                    <img class='diets' src="assets/images/Vegetarian.jpg" alt="Lentils with dressing">
                    <div>
                        <h4>Vegetarian</h4>
                    </div>
                </span>

                <span class="layoutdiets">
                    <img class='diets' src="assets/images/salad.jpg" alt="salad">
                    <div>
                        <h4>Mediterranean</h4>
                    </div>
                </span>

                <span class="layoutdiets">
                    <img class='diets' src="assets/images/mixed.jpg" alt="meal">
                    <div>
                        <h4>Mixed</h4>
                    </div>
                </span>

            </div>

            <br>

            <!-- The pictures used inside this div is taken from pexels -->
            <div class="meal-container">
                <button class="meal" type="button" onclick="twomeals();" tabindex="6">2 meals</button>
                <div class="mealcontent" id="twomeals_planned">
                    <hr>
                    <p>CALORIES: 890</p>
                    <div>
                        <span class="meal_layout">
                            <p><img src="assets/images/avocado.jpg" width="500" height="300" alt="Avocado and egg sandwich ">
                            </p>
                        </span>

                        <span class="meal_layout">
                            <h2>Brunch</h2>
                            <h3>Avocado and Egg sandwich</h3>
                            <p>Take a sourdough bread with toasted or as you like. <br>
                                Smash one avocado. Cook eggs as you like. <br>
                                Lastly, put everything together inside the bread. <br>
                                Extras: You can even add a bit of sauce/seasoning. <br><br>
                            </p>
                        </span>
                        <hr>
                    </div>

                    <p>CALORIES: 500</p>
                    <div>
                        <span class="meal_layout">
                            <p><img src="assets/images/chichken.jpg" width="350" height="500" alt="baked chichken"></p>
                        </span>

                        <span class="meal_layout">
                            <h2>Dinner</h2>
                            <h3>Baked chicken and potato with salad</h3>
                            <p>Take half a chicken and season with spices as you like. <br>
                                Cut 1 potato as you like making sure the <br>
                                length/width is more towards the thinner side. <br>
                                Put these two together in a pan with oil. <br>
                                If you want to bake it, then put the chicken and <br>
                                the potatoes in the oven. Take a cucumber and tomato <br>
                                and slice those followed by mixing it together. <br>
                                Extras: You can even add a bit of sauce/seasoning. <br><br><br>
                            </p>
                        </span>
                        <hr>
                    </div>

                </div>

                <button class="meal" type="button" onclick="threemeals();" tabindex="7">3 meals</button>
                <div class="mealcontent" id="threemeals-planned">
                    <hr>
                    <p>CALORIES: 450</p>
                    <div>
                        <span class="meal_layout">
                            <p><img src="assets/images/pancake.jpg" width="400" height="400" alt="banana pancake"></p>
                        </span>

                        <span class="meal_layout">
                            <h2>Breakfast</h2>
                            <h3>Banana Pancake</h3>
                            <p>Take a bowl and mix flour, sugar, baking powder, <br>
                                1 egg, milk, a pinch of salt, vanilla extract.<br>
                                Mix these ingredients together for few minutes <br>
                                to make it fluffy. The take a pan, apply a bit of butter.<br>
                                Finally, take a table spoon of the batter and continue <br>
                                doing the same thing for as mant slices of pancakes you want.<br>
                                Each slices should be on heat until the color of it is brownish.<br>
                                Afterward, add some slices or banana on top. <br>
                                Followed by few drop of honey <br>
                            </p>
                        </span>
                        <hr>
                    </div>

                    <p>CALORIES: 700</p>
                    <div>
                        <span class="meal_layout">
                            <p><img src="assets/images/avocado.jpg" width="500" height="300" alt="Avocado and egg sandwich"></p>
                        </span>

                        <span class="meal_layout">
                            <h2>Lunch</h2>
                            <h3>Avocado and Egg sandwich</h3>
                            <p>Take a sourdough bread with toasted or as you like. <br>
                                Smash one avocado. Cook eggs as you like. <br>
                                Lastly, put everything together inside the bread. <br>
                                Extras: You can even add a bit of sauce/seasoning. <br><br>
                            </p>
                        </span>
                        <hr>
                    </div>

                    <p>CALORIES: 328</p>
                    <div>
                        <span class="meal_layout">
                            <p><img src="assets/images/chichken.jpg" width="350" height="500" alt="baked chichken"></p>
                        </span>

                        <span class="meal_layout">
                            <h2>Dinner</h2>
                            <h3>Baked chicken and potato with salad</h3>
                            <p>Take half a chicken and season with spices as you like. <br>
                                Cut 1 potato as you like making sure the <br>
                                length/width is more towards the thinner side. <br>
                                Put these two together in a pan with oil. <br>
                                If you want to bake it, then put the chicken and <br>
                                the potatoes in the oven. Take a cucumber and tomato <br>
                                and slice those followed by mixing it together. <br>
                                Extras: You can even add a bit of sauce/seasoning. <br><br><br>
                            </p>
                        </span>
                        <hr>
                    </div>
                </div>

                <button class="meal" type="button" onclick="fourmeals();" tabindex="8">4 meals</button>
                <div class="mealcontent" id="fourmeals-planned">
                    <hr>
                    <p>CALORIES: 450</p>
                    <div>
                        <span class="meal_layout">
                            <p><img src="assets/images/pancake.jpg" width="400" height="400" alt="banana pancake"></p>
                        </span>

                        <span class="meal_layout">
                            <h2>Breakfast</h2>
                            <h3>Banana Pancake</h3>
                            <p>Take a bowl and mix flour, sugar, baking powder, <br>
                                1 egg, milk, a pinch of salt, vanilla extract.<br>
                                Mix these ingredients together for few minutes <br>
                                to make it fluffy. The take a pan, apply a bit of butter.<br>
                                Finally, take a table spoon of the batter and continue <br>
                                doing the same thing for as mant slices of pancakes you want.<br>
                                Each slices should be on heat until the color of it is brownish.<br>
                                Afterward, add some slices or banana on top. <br>
                                Followed by few drop of honey <br>
                            </p>
                        </span>
                        <hr>
                    </div>

                    <p>CALORIES: 700</p>
                    <div>
                        <span class="meal_layout">
                            <p><img src="assets/images/avocado.jpg" width="500" height="300" alt="Avocado and egg sandwich"></p>
                        </span>

                        <span class="meal_layout">
                            <h2>Lunch</h2>
                            <h3>Avocado and Egg sandwich</h3>
                            <p>Take a sourdough bread with toasted or as you like. <br>
                                Smash one avocado. Cook eggs as you like. <br>
                                Lastly, put everything together inside the bread. <br>
                                Extras: You can even add a bit of sauce/seasoning. <br><br>
                            </p>
                        </span>
                        <hr>
                    </div>

                    <p>CALORIES: 700</p>
                    <div>
                        <span class="meal_layout">
                            <p><img src="assets/images/berries.jpg" width="500" height="300" alt="yogurt and berries"></p>
                        </span>

                        <span class="meal_layout">
                            <h2>Snacks</h2>
                            <h3>Yogurt and Berries</h3>
                            <p>Take a bowl of greek yogurt, non-fat. <br>
                                Then take some strawberries and cut it as you like.<br>
                                You can even take some blueberries if you like. <br>
                                Afterwards put these together in the yogurt. <br>
                                Extras: You can even add a bit of oats if you are hungry. <br><br>
                            </p>
                        </span>
                        <hr>
                    </div>

                    <p>CALORIES: 328</p>
                    <div>
                        <span class="meal_layout">
                            <p><img src="assets/images/chichken.jpg" width="350" height="500" alt="baked chichken"></p>
                        </span>

                        <span class="meal_layout">
                            <h2>Dinner</h2>
                            <h3>Baked chicken and potato with salad</h3>
                            <p>Take half a chicken and season with spices as you like. <br>
                                Cut 1 potato as you like making sure the <br>
                                length/width is more towards the thinner side. <br>
                                Put these two together in a pan with oil. <br>
                                If you want to bake it, then put the chicken and <br>
                                the potatoes in the oven. Take a cucumber and tomato <br>
                                and slice those followed by mixing it together. <br>
                                Extras: You can even add a bit of sauce/seasoning. <br><br><br>
                            </p>
                        </span>
                        <hr>
                    </div>
                </div>
            </div>

            <!-- <div class="mealcontent" id="twomeals-planned"> islam</div> -->

            <script>
                function twomeals() {
                    document.getElementById("twomeals_planned").style.display = "block";
                }

                function threemeals() {
                    document.getElementById("threemeals-planned").style.display = "block";
                }

                function fourmeals() {
                    document.getElementById("fourmeals-planned").style.display = "block";
                }


            </script>

        </div>

        <!-- require_once used to connect this php code with the footer fragment inside includes -->
        <?php require_once("includes/footer.php"); ?>
        
    </div>


</body>

</html>