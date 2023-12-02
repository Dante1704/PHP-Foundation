<!-- form para la creacion de una nota -->

<?php require('partials/head.php') ?> 

    <?php require('partials/nav.php') ?>
    
    <?php require('partials/banner.php') ?>
      
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">        
        <!-- le declaro el metodo post -->
        <form method="POST"> 
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="col-span-full">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Note</label>
                        <div class="mt-2">
                            <!-- nunca dejar los inputs sin un nombre -->
                            <!-- es importante tener el atributo required, 
                            pero no se puede depender exclusivamente de él.
                            un usuario podria, por ejemplo, crear una row desde su cli-->
                            <textarea 
                                id="body" 
                                name="body" 
                                rows="3" 
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                required  
                            > 
                                <?= $_POST['body'] ?? ''?><!-- esta es la manera de evitar que se pierda el contenido escrito, si algo sale mal. Es una buena experiencia-->
                            </textarea> 
                            <!-- si hay algun error, que lo muestre -->
                            <?php if (isset($errors['body'])) : ?>
                                <p class="text-red-500 text-xs mt-2"><?= $errors['body']?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>

        </div>
    </main>

<?php require('partials/footer.php') ?> 