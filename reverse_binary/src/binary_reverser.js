/**
 * Verifies a value is actually a number
 * @param {mixed} value - The value to be checked.
 * @returns {boolean}
 */
function isNumeric(value) {
  return !isNaN(parseFloat(value)) && isFinite(value);
}

/**
 * Convert first a number to its binary representation, then it reverse it and trasnform it again to decimal value.
 * There are 2 caveats:
 *  - it must be a numeric representation
 *  - it must be positive
 * @param {mixed} number - The number to be reversed binarly.
 * @returns {integer|undefined}
 */
function binaryReverser(number) {
  if (!isNumeric(number) || number < 0) {
    return undefined;
  }

  return parseInt(number.toString(2).split('').reverse().join(''), 2);
}

module.exports = binaryReverser;
