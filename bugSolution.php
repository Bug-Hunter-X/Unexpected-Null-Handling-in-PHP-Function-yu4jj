function foo($a, $b) {
  if ($a === null || $b === null) {
    // Handle null values appropriately (e.g., throw an exception, return a default value, or log an error).
    throw new InvalidArgumentException('Null values are not allowed.');
  }
  // ... rest of the function
}