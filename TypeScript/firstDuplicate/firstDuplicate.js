function firstDuplicate(numbers) {
    var verifiedNumbers = [];
    for (var i = 0; i < numbers.length; i++) {
        if (verifiedNumbers.hasOwnProperty(numbers[i])) {
            return numbers[i];
        }
        verifiedNumbers[numbers[i]] = true;
    }
    return -1;
}
var firstNumberDuplicated = firstDuplicate([2, 1, 3, 5, 3, 2]);
console.log(firstNumberDuplicated);
