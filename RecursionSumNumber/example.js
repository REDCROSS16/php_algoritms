const sumNumbersRecursion = (number) => {
    let digit = number % 10;
    if (number > 0) {
      return digit + sumNumbersRecursion((number - digit) / 10);
    }
    return digit;
}