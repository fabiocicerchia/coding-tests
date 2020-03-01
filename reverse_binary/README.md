# TASK 1

**Language:** Javascript

**Description:**

Write a function for reversing numbers in binary. For instance, the binary representation of 13 is 1101, and reversing it gives 1011, which corresponds to number 11.

**How to submit:**

Complete the source code file named `reverse_binary.js`.

## Requirements

 * Docker & Docker Compose
 * Node & Npm

## How to run it

In order to make the things easier the project is provided with a Docker container it can be started with the following command:

```
docker-compose up
```

Otherwise, in case you don't have docker (nor docker-compose) installed, you can run the following command to build the project first, run the tests, then execute the required script.
Although, it is enough just to run the last command.

```
npm install
npm run build
npm test
node reverse_binary.js
```

## Additional information

The script has 2 caveats:

 * It accepts only numeric representations
 * It accepts only positive numbers

The code coverage is generated in the `./coverage` folder.
