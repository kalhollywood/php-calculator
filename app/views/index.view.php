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

    <h1>Home Page</h1>

    

    <?php require('partials/footer.php'); ?>
