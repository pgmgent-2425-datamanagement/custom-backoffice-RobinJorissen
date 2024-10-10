<div class="user--item">
    <div class="name">
        <?= $user->firstname ?> <?= $user->lastname ?>
    </div>
    <div class="email">
    <?= $user->email ?>
    </div>
    <div class="created_at">
        <?= $user->created_at ?>
    </div>
    <div class="buttons">
        <a href="/user/edit/<?= $user->id;?>">Edit</a>
        <a href="/user/edit/<?= $user->id;?>">delete</a>
    </div>
</div>