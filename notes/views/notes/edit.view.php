<!-- form para la creacion de una nota -->

<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- le declaro el metodo post -->
        <form method="POST" action="/note">
            <div class="space-y-12">
                <!-- como el form no acepta method PATCH, lo puedo simular creando este input hidden -->
                <input type="hidden" name="_method" value="PATCH">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="col-span-full">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Note</label>
                        <div class="mt-2">
                            <!-- nunca dejar los inputs sin un nombre -->
                            <!-- es importante tener el atributo required, 
                            pero no se puede depender exclusivamente de él.
                            un usuario podria, por ejemplo, crear una row desde su cli-->
                            <textarea id="body" name="body" rows="3" class="mt-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                <?= $note['body'] ?? '' ?> 
                            </textarea>
                            <!-- ahora quiero mostrar la nota para ser capaz de editarla -->
                            <?php if (isset($error['body'])) : ?>
                                <p class="text-red-500 text-xs mt-2">
                                    <?= $errors['body'] ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="mt-3 flex items-center justify-end gap-x-6">
                    <a href="/notes" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
        </form>

    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>