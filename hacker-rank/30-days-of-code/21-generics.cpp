// REF: https://www.hackerrank.com/challenges/30-generics/problem
#include <iostream>
#include <vector>
#include <string>

using namespace std;

/**
*    Name: printArray
*    Print each element of the generic vector on a new line. Do not return anything.
*    @param A generic vector
**/
template<typename T>

// Write your code here
void printArray(vector<T> vect) {
    int i;
    for (int i = 0; i < vect.size(); i++) {
        cout << vect[i] << "\n";
    }
}

int main() {
    int n;

    cin >> n;
    vector<int> int_vector(n);
    for (int i = 0; i < n; i++) {
        int value;
        cin >> value;
        int_vector[i] = value;
    }

    cin >> n;
    vector<string> string_vector(n);
    for (int i = 0; i < n; i++) {
        string value;
        cin >> value;
        string_vector[i] = value;
    }

    printArray<int>(int_vector);
    printArray<string>(string_vector);

    return 0;
}
