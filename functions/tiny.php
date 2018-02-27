<?php
class tiny {

function post($subject)
{
  global $link;

  $query = "INSERT INTO upload (subject) VALUES ('$subject')";
  $result = mysqli_query($link, $query);

  return $result;
}

function tampil()
{
  global $link;

  $query  = "SELECT * FROM upload";
  $result = mysqli_query($link, $query);

  return $result;
}

}
