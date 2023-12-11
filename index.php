<!-- header and PHP code -->
<?php 
require_once 'blocks/header.php';

//Connecting OOP
require_once 'src/Text.php'; 
require_once 'src/Writer.php';

//Use namespace 
use src\Text;  
use src\Writer;


if (!empty($_POST['author']) && !empty($_POST['title']) && !empty($_POST['text'])) {
   $text = new Text($_POST);
   $writer = new Writer();
   $writer->save($text);
   header ('Location : /');
}

?>
<!-- header -->

<!-- HTML code -->

<form action="\" method="post">
   <input type="text" name='author' class="input" placeholder="input your name">
   <input type="text" name='title' class="input" placeholder="inpu title">
   <input type="text" name='text' class="input" placeholder="input text">
   <button type="submit" class="submit_button">Send</button>
</form>



<!-- HTML code -->

<!-- PHP text in HTML -->

<div class="php_text">

<?php 



?>
</div>

<!-- PHP text in HTML -->




<!-- Footer -->
<?php 

require_once 'blocks/footer.php';

?>
<!-- Footer -->
