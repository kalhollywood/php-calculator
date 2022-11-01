<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Laracast Tutorial</title>
  </head>
  <body>

    <nav>
      <ul>
        <li>
            <a href="/about">About Us</a>
            <a href="/contact">Contact Us</a>

        </li>
      </ul>
    </nav>

    <h1>My Tasks</h1>


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
