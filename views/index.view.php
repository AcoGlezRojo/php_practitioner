<?php require('shared/head.view.php') ?>

<div class="container">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1><?= $greeting ?></h1>

            <ul>
                <?php foreach ($tasks as $task) : ?>
                    <li>
                        <?php if ($task->completed) : ?>
                            <strike><?= $task->description ?></strike>
                        <?php else : ?>
                            <?= $task->description ?>
                        <?php endif ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<?php require('shared/footer.view.php') ?>