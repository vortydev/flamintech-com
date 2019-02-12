<?php
/**
 * Created by PhpStorm.
 * User: s100l
 * Date: 2019-02-12
 * Time: 11:51
 */

if(isset($_POST['contact']))
{
    $author = trim(htmlentities($_POST['author']));
    $email = trim(htmlentities($_POST['email']));
    $content = trim(htmlentities($_POST['content']));
    $date = trim(htmlentities($_POST['date']));

    if($author != "" &&
        $email != "" &&
        $content != "" &&
        $date != ""
    )
    {
        // TODO: make further verifications in order to send the client message into a data base.
    }
    else
    {
        echo 'You must fill up all the form';
    }
}
else
{
    header('Location: ../php_pages/index.php');
}

?>