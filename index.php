<?php
require('ENV.php');
require('includes/db.inc.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>public webpage</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <?php include("includes/cs.inc.php"); ?>
</head>

<body>
    <main class="app">
      <form action="" class="app__form">
        <input type="text " class="app__form__input" placeholder="Add an activity..."/>
        <button class="app__form__submit"></button>
      </form>
      <ul class="app__list">
        <li class="app__list__item">
          <span class="text text--checked ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, asperiores dolor magni maxime aperiam a animi ab. Corporis ipsum nostrum exercitationem consequatur officiis architecto alias.</span>
          <a href="" class="icon icon--delete"></a>
          <a href="" class="icon icon--checked"></a>
        </li>
        <li class="app__list__item">
          <span class="text">todoitem 2</span>
          <a href="" class="icon icon--delete"></a>
          <a href="" class="icon icon--check"></a>
        </li>
        <li class="app__list__item">
          <span class="text">todoitem 3</span>
          <a href="" class="icon icon--delete"></a>
          <a href="" class="icon icon--check"></a>
        </li>
      </ul>
    </main>
</body>

</html>