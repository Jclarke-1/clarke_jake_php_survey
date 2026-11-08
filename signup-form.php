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
            <label for="animal">Whats your favourite animals?</label>
            <!-- im using the multiple value here for our select to allow the user to select more than one answer for our multiple choice answers below, if i were to use multiple size:1 it would display it as a dropdown but i don't want that so I chose to only use the multiple value and it's intial size value -->
            <select id="animal" name="animal" multiple>
            <option value="bird">Bird</option>
             <option value="dog">Dog</option>
              <option value="cat">Cat</option>
               <option value="capybara">Capybara</option>
                <option value="seal">Seal</option>
                 <option value="bear">Bear</option>
            </select>
        </div>

          <div>
            <label for="describe">Choose a few words from below to describe yourself</label>
            <select id="describe" name="describe" multiple>
            <option value="extroverted">Extroverted</option>
             <option value="introverted">Introverted</option>
              <option value="creative">Creative</option>
               <option value="ambitious">Ambitious</option>
                <option value="adventerous">Adventerous</option>
                 <option value="honest">Honest</option>
            </select>
        </div>

           <div>
            <label for="likes">Choose a few options from below based on what you enjoy</label>
            <select id="likes" name="likes" multiple>
            <option value="music">Music</option>
            <option value="art">Art</option>
            <option value="writing">Writing</option>
            <option value="working-out">Working Out</option>
            <option value="sports">Sports</option>
            <option value="movies">Movies</option>
            <option value="dance">Dance</option>
            <option value="theatre">Theatre</option>
            <option value="swimming">Swimming</option>
            </select>
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


        </form>
    </main>
    
 <script src="main.js"></script>
</body>
</html>