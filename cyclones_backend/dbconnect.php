<?php

// mysqli_connect Parameter: Host, Benutzer, Passwort, Datenbank
// wird in Variable gespeichert, damit php weiß, in welcher Verbindung
// die queries ausgeführt werden sollen
$link = mysqli_connect('localhost', 'root', '', 'cyclones');

if (!$link) {
  die('Connect Error (' . mysqli_connect_errno() . ') '
  . mysqli_connect_error());
}
