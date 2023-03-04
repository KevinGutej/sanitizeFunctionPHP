<?php 

$password = "' OR 1 = 1 OR password = '";

function sanitize(string $input): string // takes a non-sanitized string and returns the sanitized one
{
    $sanitizedString = "";
    for ($i = 0; $i < strlen($input); $i++)
    {
        if ( $input[$i] != " ")
            $sanitizedString = $sanitizedString . $input[$i];
        else if ($input[$i] == " ")
            $sanitizedString .= "%20";

    }
    return $sanitizedString;
    // "hello ' I am here"
    // "hello%20'%20I%20am%20here"

}

// echo sanitize($password) . PHP_EOL;
// echo strip_tags($password, '<p>');
$encodedAsHTMLEntities = htmlentities($password);
$decoded = html_entity_decode($encodedAsHTMLEntities);
echo $encodedAsHTMLEntities . PHP_EOL . $decoded . PHP_EOL;

?>