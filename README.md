# PHP Unset() in Foreach Loop Bug

This repository demonstrates a subtle bug in PHP involving the `unset()` function within a `foreach` loop when iterating over arrays.  When `unset()` is used to remove an element, the array's numerical keys are not automatically reindexed, potentially leading to unexpected results and logic errors.

## The Bug
The provided `bug.php` file contains a function `foo()` that iterates through an array and removes elements with a value of `null`.  However, the keys are not reindexed, leading to a non-sequential array.

## The Solution
The `bugSolution.php` file presents a corrected version of the function which demonstrates different approaches of handling the unset function correctly to reindex the array after elements are removed.