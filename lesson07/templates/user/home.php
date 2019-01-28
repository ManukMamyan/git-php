<div class="profile-wrap">
    <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-6 col-lg-3">
            <img class="profile-img" src="http://placehold.it/150x150">
        </div>
        <div class="col-md-8 col-xs-12 col-sm-6 col-lg-7">
            <div class="container profile-name">
                <h2><span>Welcome</span> <?php echo $user['user_name'] ?></h2>
            </div>
            <hr>
            <ul class="container profile-info">
                <li><span>Login:</span> <?php echo $user['login'] ?></li>
                <li><span>Email:</span> <?php echo $user['email'] ?></li>
                <?php if ($user['user_group'] == 0) : ?>
                    <li>
                        <span>Group:</span> Administrator
                    <li>
                <?php else: ?>
                    <li>
                    <span>Group:</span> User
                    <li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>




