const br = require('./binary_reverser');

test('0 reverses to 0', () => {
  expect(br(0)).toBe(0);
});

test('1 reverses to 1', () => {
  expect(br(1)).toBe(1);
});

test('2 reverses to 1', () => {
  expect(br(2)).toBe(1);
});

test('10 reverses to 5', () => {
  expect(br(10)).toBe(5);
});

test('13 reverses to 11', () => {
  expect(br(13)).toBe(11);
});

test('100 reverses to 19', () => {
  expect(br(100)).toBe(19);
});

test('1234 reverses to 601', () => {
  expect(br(1234)).toBe(601);
});

test('-10 reverses to undefined', () => {
  expect(br(-10)).toBeUndefined();
});

test('empty string reverses to undefined', () => {
  expect(br('')).toBeUndefined();
});

test('string reverses to undefined', () => {
  expect(br('a')).toBeUndefined();
});

test('array reverses to undefined', () => {
  expect(br([])).toBeUndefined();
});

test('object reverses to undefined', () => {
  expect(br({})).toBeUndefined();
});
