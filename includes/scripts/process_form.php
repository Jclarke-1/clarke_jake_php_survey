<?php 

session_start();

// require_once because we only need to import our css file once for our form, ../ to go into the our directory, find our folder and then link into the css folder and the main.css file
//open the directory and locate our helpers.php within the directory so we can call for it as well
require_once __DIR__ . '/../helpers.php';

//tell the server that the only request type method we want to receive is POST, and if there is any of type of request type, provide an error code and exit with a message telling us it must be a POST request type
$requestType = $_SERVER['REQUEST_METHOD'];
// If the request type does not = POST, show error code 500, and exit and display the text 'Request type must be a POST
if ($requestType !== 'POST') {
    http_response_code(500);
    exit('Request type must be POST.');
}

$formInput = $_POST;
//store the data from the session so that the last submission can be referred to from the form
$_SESSION['form_input'] = $formInput;

$errors = [];

//$name = the form input id/name of name
$name = $formInput['name'];
// if not array key exists for our name form input, then display an error saying saying must be filled out
if(!array_key_exists('name', $formInput)) {
    $errors['name'] = 'Name section must be filled out';
}
// if the string length of the name input is less than 3 characters, or greater than 40 characters, than an error message connected to the name input will pop up to alert the user that the input must be more than 3 characters and less than 40 characters
// I chose 40 here because depending on where the person originates from there may be extra surnames etc in their full name.
if (strlen($name) < 3 || strlen($name) > 40) {
    $errors['name'] = 'Name must be longer than 3 characters and less than 40.';
}

$phoneNumber = $formInput['phone-number'];
if (!array_key_exists('phone-number', $formInput)) {
    $errors['phone-number'] = 'Phone Number must be filled out.';
}
// if our the string length for our phone number input is less than 10 or greater than 15 characters, display an error 
if (strlen($phoneNumber) < 10 || strlen($phoneNumber) > 15) {
    $errors[$phoneNumber] = 'Phone Number cannot exceed more than 15 characters or can be less than 10 characters.';
}

$email = $formInput['email'];
// if the filtered variable of email is not filtered as a valid email address, then display the error of email address must be valid to our user
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email Address must be valid.';
}

//redirect our browser back to signup-form.php once submitted
header('Location: /../clarke_jake_php_survey/signup-form.php');


$nickName = $formInput['nickname'];
if(strlen($nickName) < 2 || strlen($nickName) > 20) {
    $errors[$nickName] = 'Nickname cannot be less than 2 characters or greater than 20';
}

$age = $formInput['age'];
if(strlen($age) < 2 || strlen($nickName) > 3) {
    $errors[$nickName] = 'Age cannot be more than 3 characters and less than 2 characters';
}

$hobby = $formInput['hobby'];
if(strlen($hobby) < 4 || strlen($hobby) > 40) {
 $errors[$hobby] = 'Hobbies cannot be less than 4 characters or greater than 40.';
}


$commmunication = $formInput['communication'];
if(!array_key_exists('communication', $formInput)) {
    $communication['communication'] = 'Prefered Communication Method Must be filled out!';
}
if(strlen($commmunication) < 5 || strlen($commmunication) > 40) {
    $errors[$commmunication] = 'Preferred Communication method must be more than 5 and less than 40 characters.';
}

$funFact = $formInput['funfact'];
if(strlen($funFact) < 10 || strlen($funFact) > 60) {
    $errors[$funFact] = 'Funfact cannot be less than 10 or more than 60 characters.';
}

// animals is the form input for favourite animals and it will default to an empty array where we can get the value of what is selected from there
$animals = $formInput['animals'] ?? [];
// if there is no array of animals is empty, display the error message it must be an array
if(!is_array($animals)) {
    $errors['animals'] = 'Animals must be an array!';
}
// create the array of animals that can be selected
$favouriteAnimals = ['bird', 'dog', 'cat', 'capybara', 'seal', 'bear'];
// if the count of the animals selected is greater than the favourite animals array display an error message
if(count($animals) > count($favouriteAnimals)) {
    $errors['animals'] = 'Animals is invalid';
}
// foreach animals is an animal, if it is not in the array of $animal or $favouriteanimals than it is not a valid option
foreach($animals as $animal) {
    if (! in_array($animal, $favouriteAnimals)) {
        $errors['animals'] = $animal . 'is not a valid animal';
    }
}

$descriptor = $formInput['descriptor'] ?? [];
if(!is_array($descriptor)) {
    $errors['descriptor'] = 'Descriptor must be an array!';
}

$describeSelf = ['extroverted','introverted', 'creative', 'amibtious', 'adventurous', 'honest'];
if(count($descriptor) > count($describeSelf)) {
    $errors['descriptor'] = 'Descriptor is invalid';
}

foreach($descriptor as $describe) {
    if(! in_array($describe, $describeSelf)) {
        $errors['descriptor'] = $describe . 'is not a valid descriptor';
    }
}

$enjoyment = $formInput['enjoyment'] ?? [];
if(!is_array($enjoyment)) {
    $errors['enjoyment'] = 'Enjoyment must be an array!';
}

$enjoy = ['music', 'art', 'writing', 'working-out', 'sports', 'movies', 'dance', 'theatre'];
if(count($enjoyment) > count($enjoy)) {
    $errors['enjoyment'] = 'Enjoyment is invalid';
}

foreach($enjoyment as $likes) {
if(!in_array($likes, $enjoy)) {
    $errors['enjoyment'] = $likes . 'is not valid entertainment';
}
}

$selfDescriptor = $formInput['self-descriptor'];
if(strlen($selfDescriptor) < 20 || strlen($selfDescriptor) > 250) {
    $errors[$selfDescriptor] = 'Self Descriptor must be more than 20 and less then 250 characters.';
}

$friendQualities = $formInput['friend-qualities'];
if(strlen($friendQualities) < 20 || strlen($friendQualities) > 250) {
    $errors[$friendQualities] = 'Friend Quality requirements must be 20 and less than 250 characters.';
}

$musicGenre = $formInput['music-genre'] ?? [];
if (!is_array($musicGenre)) {
    $errors['music-genre'] = 'Music Genre is invalid';
}
$validGenres = ['pop', 'rock', 'metal', 'heavy-metal', 'alternative', 'classical', 'rap', '90s', 'kpop', 'jpop', 'vocaloid', 'punk'];
if(count($musicGenre) > count($validGenres)) {
    $errors['music-genre'] = 'Music Genre is invalid.';
}
foreach($musicGenre as $genre) {
    if (! in_array($genre, $validGenres)) {
        $errors['music-genre'] = $genre . 'is not a valid genre';
    }
}

$favFood = $formInput['food'] ?? [];
if(!is_array($favFood)) {
    $errors['food'] = 'Favourite Food is invalid';
}
$validFoods = ['spaghetti', 'sushi', 'hamburger', 'hotdog', 'pizza', 'curry', 'soup/stew'];
if(count($favFood) > count($validFoods)) {
    $errors['food'] = 'Favourite Food is invalid';
}
foreach($favFood as $food) {
    if(!in_array($food, $validFoods)) {
        $errors['food'] = $food . 'is not a valid favourite food';
    }
}

$favSeason = $formInput['season'] ?? [];
if(!is_array($favSeason)) {
    $errors['season'] = 'Season is invalid';
}
$validSeasons = ['fall', 'winter', 'spring', 'summer'];
if(count($favSeason) > count($validSeasons)) {
    $errors['season'] = 'Season is invalid';
}
foreach($favSeason as $season) {
    if(!in_array($season, $validSeasons)) {
        $errors['season'] = $season . 'is not a valid favourite season';
    }
}

$weakQuality = $formInput['weakness'] ?? [];
if(!is_array($weakQuality)) {
    $errors['weakness'] = 'Weak Quality invalid';
}
$validQualities = ['time-management', 'disorganized', 'pessimistic', 'shy', 'too-honest'];
if(count($weakQuality) > count($validQualities)) {
    $errors['weakness'] = 'Weak Quality is invalid';
}
foreach($weakQuality as $weakness) {
    if(!in_array($weakness, $validQualities)) {
        $errors['weakness'] = $weakness . 'is not a valid weakness';
    }
}

$_SESSION['form_errors'] = $errors;

if(count($errors) === 0) {
    $to = 'friendfinder@gmail.com';
    $subject = 'New Friend Application';
    $message = '';

    mail($to, $subject, $message);
}


?>