# Unexpected Null Handling in PHP Function

This repository demonstrates a common error in PHP:  incorrect handling of null values.  The `foo` function does not gracefully handle null inputs, leading to potential issues and unexpected behavior.  The solution demonstrates a better approach.

## Bug
The original `foo` function simply returns null if either input is null. This behavior may not be what is expected or desired in all contexts.

## Solution
The improved `foo` function uses more robust null handling.