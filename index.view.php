<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Laracast Tutorial</title>
  </head>
  <body>


    <ul>

      <?php foreach ($tasks as $task) : ?>
        <li>
          <?php if ($task->completed) : ?>
            <strike>
            <?php endif; ?>
          <?php echo $task->description; ?>

          <?php if ($task->completed) : ?>
          </strike>
          <?php endif; ?>

        </li>
      <?php endforeach; ?>

    </ul>


  </body>
</html>
