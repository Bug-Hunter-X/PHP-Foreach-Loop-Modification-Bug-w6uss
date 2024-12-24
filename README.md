# PHP Foreach Loop Modification Bug

This repository demonstrates a common bug in PHP related to modifying arrays during foreach iteration.  The bug occurs because the keys of the array are re-indexed when elements are unset, leading to elements being skipped.  The solution shows a safe way to iterate and modify the array.

## Bug
The `bug.php` file demonstrates the problem.  The `foo` function attempts to remove elements with the value 'bar' from an array. However, due to the way `foreach` operates, this leads to unexpected output.

## Solution
The `bugSolution.php` file demonstrates a solution using a different iteration technique to avoid the issue. This solution iterates over the array in reverse order or copies the keys before iteration. 

## How to run
1. Clone this repository.
2. Run the PHP files using a PHP interpreter: `php bug.php` and `php bugSolution.php`