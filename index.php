<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

		<title>xkcd Password Generator</title>

	<body>

	<div class='container'>
		<h1>xkcd Password Generator </h1>

		Inspired by the comic series below, enjoy creating easy to remember passwords.<br/>
		<a href='http://xkcd.com/936/'>
		  <img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
		</a>

	<style>
	.error {color: #FF0000;}
	</style>


</head>

<body>


    <?php
// define variables and set to empty values
$WordNoErr = "";
$WordNo    = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if (empty($_POST["WordNo"]))
      {
        $WordNoErr = "WordNo is required";
      }
    else
      {
        $WordNo = test_input($_POST["WordNo"]);
      }
  }

function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

    <p><span class="error">* Number of words is a required field.</span></p>
    <form method="post" action="<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>">
       WordNo:
       <input type="radio" name="WordNo" <?php
if (isset($WordNo) && $WordNo == "Four Words")
    echo "checked";
?>  value="<?php
$input      = array(
    'about',
    'after',
    'again',
    'air',
    'all',
    'along',
    'also',
    'an',
    'and',
    'another',
    'any',
    'are',
    'around',
    'as',
    'at',
    'away',
    'back',
    'be',
    'because',
    'been',
    'before',
    'below',
    'between',
    'both',
    'but',
    'by',
    'came',
    'can',
    'come',
    'could',
    'day',
    'did',
    'different',
    'do',
    'does',
    'down',
    'each',
    'end',
    'even',
    'every',
    'few',
    'find',
    'first',
    'for',
    'found',
    'from',
    'get',
    'give',
    'go',
    'good',
    'great',
    'had',
    'has',
    'have',
    'he',
    'help',
    'her',
    'here',
    'him',
    'his',
    'home',
    'house',
    'how',
    'I',
    'if',
    'in',
    'into',
    'is',
    'it',
    'its',
    'just',
    'know',
    'large',
    'last',
    'left',
    'like',
    'line',
    'little',
    'long',
    'look',
    'made',
    'make',
    'man',
    'many',
    'may',
    'me',
    'men',
    'might',
    'more',
    'most',
    'Mr.',
    'must',
    'my',
    'name',
    'never',
    'new',
    'next',
    'no',
    'not',
    'now',
    'number',
    'of',
    'off',
    'old',
    'on',
    'one',
    'only',
    'or',
    'other',
    'our',
    'out',
    'over',
    'own',
    'part',
    'people',
    'place',
    'put',
    'read',
    'right',
    'said',
    'same',
    'saw',
    'say',
    'see',
    'she',
    'should',
    'show',
    'small',
    'so',
    'some',
    'something',
    'sound',
    'still',
    'such',
    'take',
    'tell',
    'than',
    'that',
    'the',
    'them',
    'then',
    'there',
    'these',
    'they',
    'thing',
    'think',
    'this',
    'those',
    'thought',
    'three',
    'through',
    'time',
    'to',
    'together',
    'too',
    'two',
    'under',
    'up',
    'us',
    'use',
    'very',
    'want',
    'water',
    'way',
    'we',
    'well',
    'went',
    'were',
    'what',
    'when',
    'where',
    'which',
    'while',
    'who',
    'why',
    'will',
    'with',
    'word',
    'work',
    'world',
    'would',
    'write',
    'year',
    'you',
    'your',
    'was'
);
$rand_keys4 = array_rand($input, 4);
echo $input[$rand_keys4[0]] . "\n";
echo $input[$rand_keys4[1]] . "\n";
echo $input[$rand_keys4[2]] . "\n";
echo $input[$rand_keys4[3]] . "\n";
?>
        ">
       Four Words

       <input type="radio" name="WordNo" <?php
if (isset($WordNo) && $WordNo == "Five Words")
    echo "checked";
?>  value="<?php
$input      = array(
    'about',
    'after',
    'again',
    'air',
    'all',
    'along',
    'also',
    'an',
    'and',
    'another',
    'any',
    'are',
    'around',
    'as',
    'at',
    'away',
    'back',
    'be',
    'because',
    'been',
    'before',
    'below',
    'between',
    'both',
    'but',
    'by',
    'came',
    'can',
    'come',
    'could',
    'day',
    'did',
    'different',
    'do',
    'does',
    'down',
    'each',
    'end',
    'even',
    'every',
    'few',
    'find',
    'first',
    'for',
    'found',
    'from',
    'get',
    'give',
    'go',
    'good',
    'great',
    'had',
    'has',
    'have',
    'he',
    'help',
    'her',
    'here',
    'him',
    'his',
    'home',
    'house',
    'how',
    'I',
    'if',
    'in',
    'into',
    'is',
    'it',
    'its',
    'just',
    'know',
    'large',
    'last',
    'left',
    'like',
    'line',
    'little',
    'long',
    'look',
    'made',
    'make',
    'man',
    'many',
    'may',
    'me',
    'men',
    'might',
    'more',
    'most',
    'Mr.',
    'must',
    'my',
    'name',
    'never',
    'new',
    'next',
    'no',
    'not',
    'now',
    'number',
    'of',
    'off',
    'old',
    'on',
    'one',
    'only',
    'or',
    'other',
    'our',
    'out',
    'over',
    'own',
    'part',
    'people',
    'place',
    'put',
    'read',
    'right',
    'said',
    'same',
    'saw',
    'say',
    'see',
    'she',
    'should',
    'show',
    'small',
    'so',
    'some',
    'something',
    'sound',
    'still',
    'such',
    'take',
    'tell',
    'than',
    'that',
    'the',
    'them',
    'then',
    'there',
    'these',
    'they',
    'thing',
    'think',
    'this',
    'those',
    'thought',
    'three',
    'through',
    'time',
    'to',
    'together',
    'too',
    'two',
    'under',
    'up',
    'us',
    'use',
    'very',
    'want',
    'water',
    'way',
    'we',
    'well',
    'went',
    'were',
    'what',
    'when',
    'where',
    'which',
    'while',
    'who',
    'why',
    'will',
    'with',
    'word',
    'work',
    'world',
    'would',
    'write',
    'year',
    'you',
    'your',
    'was'
);
$rand_keys4 = array_rand($input, 5);
echo $input[$rand_keys4[0]] . "\n";
echo $input[$rand_keys4[1]] . "\n";
echo $input[$rand_keys4[2]] . "\n";
echo $input[$rand_keys4[3]] . "\n";
echo $input[$rand_keys4[4]] . "\n";
?>
        ">
       Five Words


         <p>
             Include Special Characters?<br/>
             <input type="checkbox" name="formSpecChar[]" value="@" />@<br />
             <input type="checkbox" name="formSpecChar[]" value="%" />%<br />
             <input type="checkbox" name="formSpecChar[]" value="^" />^<br />
             <input type="checkbox" name="formSpecChar[]" value="~" />~
         </p>

         <p>
             Include Numbers?
             <input type="checkbox" name="formNo" value="Yes" /><br />
             <input type="submit" name="formSubmit" value="Submit" />
         </p>



       <span class="error">* <?php
echo $WordNoErr;
?></span>
       <br><br>

    </form>

    <?php
echo ("Your Simple Password:<br />");
echo "<h2><font color=green>$WordNo</font></h2>";
?>






<?php

if (isset($_POST['formSubmit']))
  {
    $aSpecChar = $_POST['formSpecChar'];

    if (isset($_POST['formNo']))
      {
        echo ("<p>Your Password with Numbers Included.</p>\n<h2><font color=green>");
        echo rand() . " " . "$WordNo";
        echo ("</font></h2>");
      }
    else
      {
        echo ("<p>No Numbers Included.</p>\n");
      }

    if (empty($aSpecChar))
      {
        echo ("<p>No special characters selected.</p>\n");
      }
    else
      {
        $N = count($aSpecChar);

        echo ("<p>You selected $N Special Character(s): <h2><font color=green>");
        for ($i = 0; $i < $N; $i++)
          {
            echo ($aSpecChar[$i] . " ");
          }
          {
            echo "$WordNo" . " ";
          }
					if (isset($_POST['formNo']))
						{
							echo rand();
							echo ("</font></h2>");
						}

        echo ("");
      }

    //Checking whether a particular check box is selected
    //See the IsChecked() function below
    if (IsChecked('formSpecChar', 'A'))
      {
        echo ' A is checked. ';
      }
    if (IsChecked('formSpecChar', 'B'))
      {
        echo ' B is checked. ';
      }
    //and so on
  }

?>
<?php
$t = date("H");
if ($t < "20") {
    echo "Have a peaceful night's sleep with this secure password.";
} else {
    echo "Today is a very good day for a secure password.";
}
?>

</body>
</html>
