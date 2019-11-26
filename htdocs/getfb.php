
<?php

//$fbUrl ='https://www.facebook.com/aratomo';
$fbUrl = 'https://www.facebook.com/vlastita.pizarro';



$username = GetUsernameFromFacebookURL($fbUrl);
echo $username . '<br>';

$userid = GetUserIDFromUsername($username);
echo $userid . '<br>';

$image = file_get_contents('https://graph.facebook.com/'.$userid.'/picture?type=large');
$dir = dirname(__file__).'/avatar/'.$userid.'.jpg';
echo '<br>' . $dir;
file_put_contents($dir, $image);

?>
<br>
<br>
<img src="//graph.facebook.com/<?php echo $userid ?>/picture?type=large&width=720&height=720">
<br>



<?php

function GetUsernameFromFacebookURL($url) {
    /**
     * Taken from http://findmyfbid.com/, the valid formats are:
     * https://www.facebook.com/JohnDoe
     * https://m.facebook.com/sally.struthers
     * https://www.facebook.com/profile.php?id=24353623
     */
    $correctURLPattern = '/^https?:\/\/(?:www|m)\.facebook.com\/(?:profile\.php\?id=)?([a-zA-Z0-9\.]+)$/';
    if (!preg_match($correctURLPattern, $url, $matches)) {
        throw new Exception('Not a valid URL');
    }

    return $matches[1];
}

function GetUserIDFromUsername($username) {
    echo 'aaaaa' ;
    // For some reason, changing the user agent does expose the user's UID
    $options  = array('http' => array('user_agent' => 'some_obscure_browser1'));
    $context  = stream_context_create($options);
    $fbsite = file_get_contents('https://www.facebook.com/' . $username, false, $context);

    // ID is exposed in some piece of JS code, so we'll just extract it
    $fbIDPattern = '/\"entity_id\":\"(\d+)\"/';
    if (!preg_match($fbIDPattern, $fbsite, $matches)) {
        throw new Exception('Unofficial API is broken or user not found');
    }
    return $matches[1];
}