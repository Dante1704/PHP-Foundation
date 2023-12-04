#### En la carpeta core estoy poniendo modulos que son genericos en la aplicacion, no son nada especificos. 

#### namespaces;
In PHP, namespaces are used to organize code and avoid naming conflicts between different parts of a program. They provide a way to group logically related classes, functions, and constants under a common, unique identifier. Here are some reasons why namespaces are beneficial in PHP:

Avoiding Naming Collisions: Namespaces help prevent naming conflicts by allowing you to encapsulate your code within a specific namespace. This is especially important when working on large projects or integrating different libraries, as it reduces the risk of two or more components having the same name.

php
Copy code
// Without namespace
class Database { /* ... */ }

// Another file with a different Database class
class Database { /* ... */ }
In the example above, without namespaces, there would be a collision between the two Database classes. However, using namespaces can resolve this issue:

php
Copy code
// Using namespaces
namespace Core;

class Database { /* ... */ }

// Another file with a different Database class in a different namespace
namespace App;

class Database { /* ... */ }
Logical Organization: Namespaces allow you to organize your code in a more logical and hierarchical manner. This makes it easier to understand the structure of your application and locate specific classes or functions.

php
Copy code
// Without namespace
class User { /* ... */ }
class Order { /* ... */ }

// With namespace
namespace App;

class User { /* ... */ }
class Order { /* ... */ }
In the second example, classes are organized under the App namespace, providing a clearer structure.

Improved Code Readability: Namespaces contribute to code readability by providing context to identifiers. When you see a class or function prefixed with a namespace, you immediately know its scope and context.

php
Copy code
// Without namespace
$result = Database::query();

// With namespace
$result = Core\Database::query();
In the second example, it's clear that the query method is part of the Core namespace.

Autoloading: Namespaces are often used in conjunction with autoloading mechanisms to automatically load classes when they are needed. This simplifies the codebase by eliminating the need to manually include files for each class.

php
Copy code
// Without autoloading
require_once 'path/to/User.php';

// With autoloading using namespaces
use App\User;

$user = new User();
Autoloading reduces the boilerplate code required to include class files.

In summary, namespaces in PHP provide a way to structure and organize code, avoid naming conflicts, and enhance the overall maintainability and readability of a project. They are particularly useful in larger codebases and when working on collaborative projects.