<!-- ANTES:
require('views/partials/head.php')

    require('views/partials/nav.php')
    
    require('views/partials/banner.php')
      
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p>Hello! Welcome to the About Us page.</p>
        </div>
    </main>

require('views/partials/footer.php')
 -->

 <!-- AHORA: -->
 <?php require base_path('views/partials/head.php') ?> 

    <?php require base_path('views/partials/nav.php') ?>
    
    <?php require base_path('views/partials/banner.php') ?>
      
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p>Hello! Welcome to the About Us page.</p>
        </div>
    </main>

<?php require base_path('views/partials/footer.php') ?> 