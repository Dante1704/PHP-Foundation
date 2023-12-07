<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>
        <!-- escaping untrusted input -->
        <?= htmlspecialchars($note['body']) ?>
        <!--  form para borrar la nota -->
        <form class="mt-6" method="POST">
            <!-- haciendo que se tenga en cuenta que hay un DELETE -->
            <!-- _method indica un valor unico en toda la app -->
            <input type="hidden" name='_method' value="DELETE">
            <input type="hidden" name='id' value="<?= $note['id'] ?>">
            <button class="text-sm text-red-500">Delete</button>
        </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>