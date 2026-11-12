<?php
session_start();

//using $errors = $_session['errors] to grab any errors from the session or if the key doesnt exist to default to an empty array that doesnt exist or is null
$errors = $_SESSION['errors'] ?? [];

//storing our inputs so we dont need to keep reading $_SESSION
$submittedInputs = $_SESSION['form_input'] ?? [];
$submittedTele = $submittedInputs['phone-number'] ?? '';
$submittedName = $submittedInputs['name'] ?? '';
$submittedEmail = $submittedInputs['email'] ?? '';
$submittedNickname = $submittedInputs['nickname'] ?? '';
$submittedAge = $submittedInputs['age'] ?? '';
$submittedHobby = $submittedInputs['hobby'] ?? '';
$submittedCom = $submittedInputs['communication'] ?? '';
$submittedFact = $submittedInputs['funfact'] ?? '';
$submittedAnimal = $submittedInputs['animals'] ?? '';
$submittedTrait = $submittedInputs['descriptor'] ?? '';
$submittedEnjoy = $submittedInputs['enjoyment'] ?? '';
$submittedDesc = $submittedInputs['self-descriptor'] ?? '';
$submittedQualities = $submittedInputs['friendship-qualities'] ?? '';
$submittedGenre = $submittedInputs['music-genre'] ?? '';
$submittedFood = $submittedInputs['food'] ?? '';
$submittedSeason = $submittedInputs['season'] ?? '';
$submittedWeakness = $submittedInputs['weakness'] ?? '';




//session will reset when the page is reloaded so any left over information is not waiting
$_SESSION['form_input'] = [];
//when reloaded any errors will be gone
$_SESSION['form_errors'] = [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>New Friend Signup Form!</title>
</head>
<body>
    <header>
        <h1>Looking to Meet New People and Make a New Friend?</h1>
        <h2>Make Your New Friend Here!</h2>
    </header>

    <main>
        <!-- We point our action towards our process_form.php as that is the file that will process the form sent in, and our method will be POST because its being sent somewhere aka our process-form.php -->
        <form action="includes/scripts/process_form.php" method="POST">


        <!-- Six short answer questions -->
        <div>
              <?php 
                if (array_key_exists('name', $errors)) {
                    echo '<p style="color:red">' . $errors['name'] . '</p>';
                }
                ?>
            <label for="name">What is your name?</label>
            <input name="name" type="text" id="name" placeholder="John/Jane Doe">
             <?php if (count($errors) > 0 && $submittedName) {
                    echo 'value="'. $submittedName . '"'; }?>
        </div>

        <div>
             <?php
              if(array_key_exists('nickname', $errors))
                {
                    echo  '<p style="color:red">' . $errors['nickname'] . '</p>';
                }
            ?>
            <label for="nickname">Whats your nickname?</label>
            <input name="nickname" type="text" id="nickname" placeholder="Joey">
             <?php if (count($errors) > 0 && $submittedNickname) {
                    echo 'value="'. $submittedNickname . '"'; }?>
        </div>

        <div>
             <?php
              if(array_key_exists('age', $errors))
                {
                    echo  '<p style="color:red">' . $errors['age'] . '</p>';
                }
            ?>
            <label for="age">How old are you?</label>
            <input name="age" type="text" id="age" placeholder="25">
             <?php if (count($errors) > 0 && $submittedAge) {
                    echo 'value="'. $submittedAge . '"'; }?>
        </div>

        <div>
             <?php
              if(array_key_exists('hobby', $errors))
                {
                    echo  '<p style="color:red">' . $errors['hobby'] . '</p>';
                }
            ?>
            <label for="hobby">What are your hobbies?</label>
            <input name="hobby" type="text" id="hobby" placeholder="volleyball">
             <?php if (count($errors) > 0 && $submittedHobby) {
                    echo 'value="'. $submittedHobby . '"'; }?>
        </div>

        <div>
             <?php
              if(array_key_exists('communication', $errors))
                {
                    echo  '<p style="color:red">' . $errors['communication'] . '</p>';
                }
            ?>
            <label for="communication">Whats your preferred method of communication?</label>
            <input name="communication" type="text" id="communication" placeholder="discord.com">
             <?php if (count($errors) > 0 && $submittedCom) {
                    echo 'value="'. $submittedCom . '"'; }?>
        </div>

        <div>
             <?php
              if(array_key_exists('funfact', $errors))
                {
                    echo  '<p style="color:red">' . $errors['funfact'] . '</p>';
                }
            ?>
            <label for="funfact">Whats a fun fact about you?</label>
            <input name="funfact" type="text" id="funfact" placeholder="I scuba-dive">
             <?php if (count($errors) > 0 && $submittedFact) {
                    echo 'value="'. $submittedFact . '"'; }?>
        </div>

        <!-- Three Multiple Choice Answers -->
        <div>
             <?php
              if(array_key_exists('animals', $errors))
                {
                    echo  '<p style="color:red">' . $errors['animals'] . '</p>';
                }
            ?>
            <fieldset>
            <legend>Whats your favourite animals?</legend>

            <label for="bird">Bird</label>
            <input id="bird" type="checkbox" name="animals[]" value="bird">

             <label for="dog">Dog</label>
             <input id="dog" type="checkbox" name="animals[]" value="dog">

              <label for="cat">Cat</label>
              <input id="cat" type="checkbox" name="animals[]" value="cat">

               <label for="capybara">Capybara</label>
               <input id="capybara" type="checkbox" name="animals[]" value="capybara">

                <label for="seal">Seal</label>
                <input id="seal" type="checkbox" name="animals[]" value="seal">

                 <label for="bear">Bear</label>
                 <input id="bear" type="checkbox" name="animals[]" value="bear">

            </fieldset>
             <?php if (count($errors) > 0 && $submittedAnimal) {
                    echo 'value="'. $submittedAnimal . '"'; }?>
        </div>

          <div>
             <?php
              if(array_key_exists('descriptor', $errors))
                {
                    echo  '<p style="color:red">' . $errors['descriptor'] . '</p>';
                }
            ?>
            <fieldset>
            <legend>Choose a few words from below to describe yourself</legend>

            <label for="extroverted">Extroverted</label>
            <input id="extroverted" type="checkbox" name="descriptor[]" value="extroverted">

             <label for="introverted">Introverted</label>
             <input id="introverted" type="checkbox" name="descriptor[]" value="introverted">

              <label for="creative">Creative</label>
              <input id="creative" type="checkbox" name="descriptor[]" value="creative">

               <label for="ambitious">Ambitious</label>
               <input id="amibitious" type="checkbox" name="descriptor[]" value="ambitious">

                <label for="adventurous">Adventurous</label>
                <input id="adventurous" type="checkbox" name="descriptor[]" value="adventurous">
                
                 <label for="honest">Honest</label>
                 <input id="honest" type="checkbox" name="descriptor[]" value="honest">

            </fieldset>
             <?php if (count($errors) > 0 && $submittedTrait) {
                    echo 'value="'. $submittedTrait . '"'; }?>
        </div>

           <div>
             <?php
              if(array_key_exists('enjoyment', $errors))
                {
                    echo  '<p style="color:red">' . $errors['enjoyment'] . '</p>';
                }
            ?>
            <legend>Choose a few options from below based on what you enjoy</legend>
          <fieldset>

            <label for="music">Music</label>
             <input id="music" type="checkbox" name="enjoyment[]" value="music">

            <label for="art">Art</label>
            <input id="art" type="checkbox" name="enjoyment[]" value="art">

            <label for="writing">Writing</label>
            <input id="writing" type="checkbox" name="enjoyment[]" value="writing">

            <label for="working-out">Working Out</label>
            <input id="working-out" type="checkbox" name="enjoyment[]" value="working-out">

            <label for="sports">Sports</label>
            <input id="sports" type="checkbox" name="enjoyment[]" value="sports">

            <label for="movies">Movies</label>
            <input id="movies" type="checkbox" name="enjoyment[]" value="movies">

            <label for="dance">Dance</label>
            <input id="dance" type="checkbox" name="enjoyment[]" value="dance">

            <label for="theatre">Theatre</label>
            <input id="theatre" type="checkbox" name="enjoyment[]" value="theatre">

            </fieldset>
             <?php if (count($errors) > 0 && $submittedEnjoy) {
                    echo 'value="'. $submittedEnjoy . '"'; }?>
        </div>

        <!-- Two long format answers -->

        <div>
            <?php
            if(array_key_exists('self-descriptor', $errors))
                {
                    echo  '<p style="color:red">' . $errors['self-descriptor'] . '</p>';
                }
            ?>
            <label for="self-descriptor" id="self-descriptor">Tell us about yourself</label>
            <textarea name="self-descriptor"></textarea>
             <?php if (count($errors) > 0 && $submittedDesc) {
                    echo 'value="'. $submittedDesc . '"'; }?>
        </div>

        
        <div>
              <?php
            if(array_key_exists('friend-qualities', $errors))
                {
                    echo  '<p style="color:red">' . $errors['friend-qualities'] . '</p>';
                }
            ?>
            <label for="friend-qualities" id="friend-qualities">What kind of qualities do you look for in a friend? What makes a good friend to you?</label>
            <textarea name="friend-qualities"></textarea>
             <?php if (count($errors) > 0 && $submittedQualities) {
                    echo 'value="'. $submittedQualities . '"'; }?>
        </div>

        <!-- Four single select answer questions -->

        <div>
             <?php
            if(array_key_exists('music-genre', $errors))
                {
                    echo  '<p style="color:red">' . $errors['music-genre'] . '</p>';
                }
            ?>
            <label for="music-genre">Whats your favourite music genre?</label>
            <select id="music-genre">
                <option value="pop" name="music-genre[]">Pop</option>
                <option value="rock" name="music-genre[]">Rock</option>
                <option value="metal" name="music-genre[]">Metal</option>
                <option value="heavy-metal" name="music-genre[]">Heavy Metal</option>
                <option value="alternative" name="music-genre[]">Alternative</option>
                <option value="classical" name="music-genre[]">Classical</option>
                <option value="rap" name="music-genre[]">Rap</option>
                <option value="90s" name="music-genre[]">90s</option>
                <option value="kpop" name="music-genre[]">Kpop</option>
                <option value="jpop" name="music-genre[]">Jpop</option>
                <option value="vocaloid" name="music-genre[]">Vocaloid</option>
                <option value="punk" name="music-genre[]">Punk</option>
            </select>
             <?php if (count($errors) > 0 && $submittedGenre) {
                    echo 'value="'. $submittedGenre . '"'; }?>
        </div>

        <div>
             <?php
            if(array_key_exists('food', $errors))
                {
                    echo  '<p style="color:red">' . $errors['food'] . '</p>';
                }
            ?>
            <label for="food">Which is your favourtie food?</label>
            <select id="food">
                <option value="spaghetti" name="food[]">Spaghetti</option>
                <option value="sushi" name="food[]">Sushi</option>
                <option value="hamburger" name="food[]">Hamburger</option>
                <option value="hotdog" name="food[]">Hotdog</option>
                <option value="pizza" name="food[]">Pizza</option>
                <option value="curry" name="food[]">Curry</option>
                <option value="soup/stew" name="food[]">Soup/Stew</option>
            </select>
             <?php if (count($errors) > 0 && $submittedFood) {
                    echo 'value="'. $submittedFood . '"'; }?>
        </div>

        
        <div>
            <?php
              if(array_key_exists('season', $errors))
                {
                    echo  '<p style="color:red">' . $errors['season'] . '</p>';
                }
            ?>
            <label for="season">What is your favourite season?</label>
            <select id="season">
                <option value="fall" name="season[]">Fall</option>
                <option value="winter" name="season[]">Winter</option>
                <option value="spring" name="season[]">Spring</option>
                <option value="summer" name="season[]">Summer</option>
            </select>
             <?php if (count($errors) > 0 && $submittedSeason) {
                    echo 'value="'. $submittedSeason . '"'; }?>
        </div>

        
        <div>
             <?php
              if(array_key_exists('weakness', $errors))
                {
                    echo  '<p style="color:red">' . $errors['weakness'] . '</p>';
                }
            ?>
            <label for="weakness">What is your one weakest quality?</label>
            <select id="weakness">
                <option value="time-management" name="weakness[]">Time Management</option>
                <option value="disorganized" name="weakness[]">Disorganized</option>
                <option value="pessimistic" name="weakness[]">Pessimistic</option>
                <option value="shy" name="weakness[]">Shy</option>
                <option value="too-honest" name="weakness[]">Too Honest</option>
            </select>
             <?php if (count($errors) > 0 && $submittedWeakness) {
                    echo 'value="'. $submittedWeakness . '"'; }?>
        </div>

        <!-- Three atypical fields -->

        <div>
            <?php 
            if(array_key_exists('phone-number', $errors)) {
                echo '<p style="color:red">' . $errors['phone-number'] . '<p>';
            }
            ?>
            <label for="phone-number">Your Phone Number</label>
            <input name="phone-number" type="tel" id="phone-number" placeholder="519 123 4567">
            <?php if (count($errors) > 0 && $submittedTele) {
                    echo 'value="'. $submittedTele . '"'; }?>
        </div>

        <div>
            <?php
             if(array_key_exists('email', $errors)) {
                echo '<p style="color:red">' . $errors['email'] . '<p>';
            }
            ?>
            <label for="email">Your Email</label>
            <input name="email" type="email" id="email" placeholder="johndoe@gmail.com">
             <?php if (count($errors) > 0 && $submittedEmail) {
                    echo 'value="'. $submittedEmail . '"'; }?>
        </div>

        <div>
            <label for="birthday">When is your birthday?</label>
            <input name="birthday" type="date" id="birthday" min="1980-04-01" max="2026-04-01">
        </div>

        <footer>

        </footer>
    <button type="submit">Send</button>
        </form>
    </main>
    
 <script src="main.js"></script>
</body>
</html>