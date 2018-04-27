const binaryReverser = require('./lib/binary_reverser');

function reverse(value) {
    return binaryReverser(value);
};

console.log(reverse(13));
console.log(reverse());
console.log(reverse('a'));
