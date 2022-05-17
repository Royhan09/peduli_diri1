<div class="container">
    <div class="row">
        <div class="col-sm-3">
            
            <img src="https://source.unsplash.com/150x150" class="rounded float-end" alt="...">
            
        </div>
        <div class="col-sm-9">
            <div class="header">
                <h3>PEDULI DIRI</h3>
                <p>Catatan Perjalanan</p>
            </div>
            <div class="link">
                <nav class="nav">
                    <a class="nav-link nav-first" href="/">Home</a> |
                    <a class="nav-link" href="/history">Catatan Perjalanan</a>|
                    <a class="nav-link" href="/add">Isi Data</a>|
                    <form action="/logout" method="post">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="nav-link btn-logout">Log Out</button>
                    </form>
                </nav>
            </div>

            <?php echo $__env->yieldContent('main'); ?>

        </div>
    </div>
</div>
<?php /**PATH D:\peduli_diri\peduli_diri\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>