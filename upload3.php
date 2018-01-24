<html>
<body>
<?php
       // prevent timezone warnings
       date_default_timezone_set('Philippines/Manila');

      // set the upload location
      $UPLOADDIR = "images/";

        // if the form has been submitted then save and display the image(s)
    if(isset($_POST['Submit'])){
      // loop through the uploaded files
foreach ($_FILES as $key => $value){
    $image_tmp = $value['tmp_name'];
    $image_type=$value['type'];
    $image = $value['name'];
    $image_file = "{$UPLOADDIR}{$image}";

 //check if there's existing file name
  if ($image  != 0){
echo 'File Already Exists!';
}

  else {
    // move the file to the permanent location

  if(move_uploaded_file($image_tmp,$image_file)){
  // this is where the displaying part goes
    echo <<<HEREDOC

    <div style="float:left;margin-right:10px">
        <img src="$editedShear" alt="This is your image" height=200 width=200/></br>
    </div>

HEREDOC;

    }
    else{
        echo "<h1>image file upload failed, image too big after compression</h1>";
         }
        }
}}
 else{
  ?>

<?php
 }
?>
</body>
</html>
