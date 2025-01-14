function foo($a, $b) {
  if ($a === null || $b === null) {
    return null; //This is wrong, it should be handled elsewhere
  }
  // ... rest of the function
}