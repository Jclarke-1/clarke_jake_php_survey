<?php

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
            <label for="name">What is your name?</label>
            <input name="name" type="text" id="name" placeholder="John/Jane Doe">
        </div>

        <div>
            <label for="nickname">Whats your nickname?</label>
            <input name="nickname" type="text" id="nickname" placeholder="Joey">
        </div>

        <div>
            <label for="age">How old are you?</label>
            <input name="age" type="text" id="age" placeholder="25">
        </div>

        <div>
            <label for="hobby">What are your hobbies?</label>
            <input name="hobby" type="text" id="hobby" placeholder="volleyball">
        </div>

        <div>
            <label for="communication">Whats your preferred method of communication?</label>
            <input name="communication" type="text" id="communication" placeholder="discord.com">
        </div>

        <div>
            <label for="funfact">Whats a fun fact about you?</label>
            <input name="funfact" type="text" id="funfact" placeholder="I scuba-dive">
        </div>

        <!-- Three Multiple Choice Answers -->
        <div>
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
        </div>

          <div>
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
        </div>

           <div>
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
        </div>

        <!-- Two long format answers -->

        <div>
            <label for="self-descriptor" id="self-descriptor">Tell us about yourself</label>
            <textarea name="self-descriptor"></textarea>
        </div>

        
        <div>
            <label for="friend-qualities" id="friend-qualities">What kind of qualities do you look for in a friend? What makes a good friend to you?</label>
            <textarea name="friend-qualities"></textarea>
        </div>

        <!-- Four single select answer questions -->

        <div>
            <label for="music-genre">Whats your favourite music genre?</label>
            <select id="music-genre" name="music-genre">
                <option value="pop">Pop</option>
                <option value="rock">Rock</option>
                <option value="metal">Metal</option>
                <option value="heavy-metal">Heavy Metal</option>
                <option value="alternative">Alternative</option>
                <option value="classical">Classical</option>
                <option value="rap">Rap</option>
                <option value="90s">90s</option>
                <option value="kpop">Kpop</option>
                <option value="jpop">Jpop</option>
                <option value="vocaloid">Vocaloid</option>
                <option value="punk">Punk</option>
            </select>
        </div>

        <div>
            <label for="food">Which is your favourtie food?</label>
            <select id="food" name="food">
                <option value="spaghetti">Spaghetti</option>
                <option value="sushi">Sushi</option>
                <option value="hamburger">Hamburger</option>
                <option value="hotdog">Hotdog</option>
                <option value="pizza">Pizza</option>
                <option value="curry">Curry</option>
                <option value="soup/stew">Soup/Stew</option>
            </select>
        </div>

        
        <div>
            <label for="season">What is your favourite season?</label>
            <select id="season" name="season">
                <option value="fall">Fall</option>
                <option value="winter">Winter</option>
                <option value="spring">Spring</option>
                <option value="summer">Summer</option>
            </select>
        </div>

        
        <div>
            <label for="weakness">What is your one weakest quality?</label>
            <select id="weakness" name="weakness">
                <option value="time-management">Time Management</option>
                <option value="disorganized">Disorganized</option>
                <option value="pessimistic">Pessimistic</option>
                <option value="shy">Shy</option>
                <option value="too-honest">Too Honest</option>
            </select>
        </div>

        <!-- Three atypical fields -->

        <div>
            <label for="phone-number">Your Phone Number</label>
            <input name="phone-number" type="tel" id="phone-number" placeholder="519 123 4567">
        </div>

        <div>
            <label for="email">Your Email</label>
            <input name="email" type="email" id="email" placeholder="johndoe@gmail.com">
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