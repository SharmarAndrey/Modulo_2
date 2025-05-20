<form id="form" action="hola_nombre.php" method="POST">
       Name: <input type="text" name="name" value=""><br>
       E-mail: <input type="text" name="email"><br>
       <input type="submit">
   </form>
   <?php
   switch ($_SERVER['REQUEST_METHOD']) {
       case 'POST': ?>
     Welcome
Your name is:
     <?php echo $_POST["name"] ?><br>
     Your email address is:
     <?php echo $_POST["email"]; ?>
   <?php
   break;
       default:

           echo "Cubre el formulario";
           break;
   }

   ?>