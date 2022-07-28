<?php require('shared/head.view.php') ?>

<div class="container">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="mb-3">Contact Us</h1>

            <form action="/contact/submit" method="post">
                <div class="mb-3 ">
                    <input type="text" name="name" class="form-control" placeholder="Name" aria-label="your name">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>

        <h3 class="mt-4 mb-3">List of users</h3>
        <ul class="list-group">
            <?php foreach ($users as $user) : ?>
                <li class="list-group-item"><?= $user['name'] ?></li>
            <?php endforeach ?>
        </ul>

    </div>
</div>

<?php require('shared/footer.view.php') ?>