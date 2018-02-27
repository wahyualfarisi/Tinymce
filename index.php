<?php
require_once 'core/init.php';

$error = '';

$tiny = new tiny();

if(isset($_POST['submit'])){
  $subject = $_POST['subject'];
  if(!empty($subject)){
    if($tiny->post($subject)){
      header('Location: index.php');
    }else{
      $error = 'ada masalah saat menambahkan';
    }
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <script src="tinymce/js/tinymce/tinymce.min.js"></script>

  <script>
  tinymce.init({
    selector:'#tinytextarea',
    plugins: 'code,codesample,image,jbimages',
    toolbar: 'bold,code,codesample,image,jbimages'
  });
  </script>
  <style media="screen">
    #data{
    color: red;
    }

  </style>

</head>
<body>
  <div id="error">
    <?php echo $error; ?>
  </div>
  <h1>silahkan tulis disini</h1>
  <form action="" method="post">
  <textarea id="tinytextarea" name="subject" rows="8" cols="80"></textarea>
  <input type="submit" name="submit" value="submit">
  </form>


  <h1>data</h1>
  <div id="data">
    <?php
    $show = $tiny->tampil();
    while($row = mysqli_fetch_assoc($show)) :?>
    <table>
      <tr>
        <td><?php echo $row['subject']; ?></td>
      </tr>

        <?php endwhile; ?>
    </table>

  </body>
  </html>
  </div>
