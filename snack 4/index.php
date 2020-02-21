<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      .green{
        background-color: green;
      }
      .grey{
        background-color: grey;
      }
      div{
        float: left;
        border: 1px solid black;
        margin: 5px;
        padding: 10px;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="green">
      <?php
      $pms = $db['pm'];
      for ($i=0; $i < count($pms); $i++) {
        // code...
        echo "<li>" .  $pms[$i]['name']. ' ' . $pms[$i]['lastname']. "</li>";
      }
      ?>

    </div>
    <div class="grey">
      <?php
      $teachers = $db['pm'];
      for ($i=0; $i < count($teachers); $i++) {
        // code...
        echo "<li>" .  $teachers[$i]['name']. ' ' . $teachers[$i]['lastname']. "</li>";
      }
      ?>
    </div>

  </body>
</html>
