#!/bin/sh
npm install
npm run build
npm test
node reverse_binary.js
