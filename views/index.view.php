<?php require('partials/head.php'); ?>

<!-- TO DO LIST  -->
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

    <!-- FORM SUBMISSION -->

    <?php foreach ($users as $user) : ?>

      <li><?= $user->name; ?></li>

    <?php endforeach; ?>

    <h1>Submit Your Name</h1>

    <form action="/names" method="POST">
        <input type="text" name="name">
        <button type="submit" name="button">Click here</button>
    </form>

    <?php require('partials/footer.php'); ?>
