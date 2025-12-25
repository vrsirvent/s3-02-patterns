# Sprint-3-PHP-and-Patterns
# Tasca S3.02. Patterns
Level 1 - Exercise Singleton

**Objectives**
Learn how to use design pattern implementations.
Design patterns are solutions to recurring problems in software construction. There are many cataloged software patterns, 
and we will learn how to apply some of the most important ones in PHP.
I have created the following class definition that aims to model the famous character Tigger from A. A. Milne's “Winnie The Pooh” books:

### Arxiu: tigger.php
```php
<?php
class Tigger {

       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }

       public function roar() {
               echo "Grrr!" . PHP_EOL;
       }

}
?>
```
It seems reasonable to expect that there should only be one Tigger object (after all, he is the only one!), but the current implementation allows for multiple different Tigger objects:
Refactor the Tigger class into a Singleton considering the following points:

- Define the **getInstance()** method without arguments. This function is responsible for creating an instance of the Tigger class only once and returning this single instance each time it is called.
- Print Tigger's roar multiple times on the screen.
- Add a **getCounter()** method that returns the number of times Tigger has roared.

/exercise_singleton/
    ├── scr/                    # Source code 
    |     ├── classes/ 
    |     │     └── tigger.php  # Tigger class
    |     └── index.php         # Main script
    └── README.md               # Exercise documentation 

