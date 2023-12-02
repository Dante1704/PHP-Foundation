<?php require('partials/head.php') ?> 

    <?php require('partials/nav.php') ?>
    
    <?php require('partials/banner.php') ?>
      
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <ul>
                <?php foreach ($notes as $note) : ?>
                    <li>
                        <a href="/note?id=<?= $note['id']?>" class="text-blue-500 hover:underline">
                            <!-- htmlspecialchars es una funcion que convierte el contenido a entidades html
                                 de esta manera si en la base de datos se guardo un registro peligroso, que hiciese que se ejecute algo,
                                 no se ejecuta porque es convertido a html -->
                            <?= htmlspecialchars($note['body']) ?> 
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <p class="mt-6">
                <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
            </p>
        </div>
    </main>

<?php require('partials/footer.php') ?> 