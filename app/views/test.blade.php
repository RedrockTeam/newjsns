<div class="container">
    <?php foreach ($users as $user): ?>
    <?php echo $user->content; ?>
    <?php endforeach; ?>
</div>

<?php echo $users->links(); ?>