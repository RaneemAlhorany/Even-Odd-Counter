# Even-Odd-Counter

It's stage 1 in your PHP language learning journey

project (6) : Even / Odd Counter

Create a PHP program that allows the user to enter a number N, then:

    Count how many even numbers exist from 1 to N  
    Count how many odd numbers exist from 1 to N
    Display both results clearly on the page

Requirements:

    Use an HTML form with GET
    Use a loop (for or while)
    Use functions
    Validate input using isset
    Handle edge cases (0, negative numbers)

Example

    Input:
    N = 10
    ---------
    Output:
    Even numbers count: 5
    Odd numbers count: 5


------------------------------------------------------------------------

Arithmetic Operations in PHP

    Arithmetic operators are used to perform mathematical calculations.

Basic arithmetic operators:


1. Addition (+)
   
            $a = 10;
            $b = 5;
            $sum = $a + $b;   // 15

2. Subtraction (-)
   
            $result = $a - $b;   // 5

3. Multiplication (*)
   
            $result = $a * $b;   // 50

4. Division (/)
   
            $result = $a / $b;   // 2

5. Modulus (%)
   
            // Returns the remainder of a division
            $result = $a % $b;   // 0

6. Exponentiation (**)
   
            // Power
            $result = $a ** 2;   // 100

^ Increment / Decrement operators:

7. Increment (++)

            $x = 5;
            $x++;        // 6
            ++$x;        // 7

8. Decrement (--)

            $y = 10;
            $y--;        // 9
            --$y;        // 8

? Difference between pre and post increment:

        $x++  → returns the value, then increments
        ++$x  → increments first, then returns the value

? Example:

        $x = 5;
        echo $x++; // Output: 5
        echo $x;   // Output: 6

-------------------------------------------------------------------

Loops in PHP

while loop

    ? The while loop executes a block of code
    ? as long as the condition is true.

Syntax:

        while (condition) {
            // code to execute
        }

Example:

        $i = 1;
        while ($i <= 5) {
            echo $i . " ";
            $i++;
        }
        // Output: 1 2 3 4 5

Important:

        - If the condition is false at the beginning,
          the loop will not run at all.


for loop

    ? The for loop is used when the number of iterations is known.

Syntax:

        for (initialization; condition; increment) {
            // code to execute
        }

Example:

        for ($i = 1; $i <= 5; $i++) {
            echo $i . " ";
        }
        // Output: 1 2 3 4 5

Breakdown:

        - Initialization: executed once at the start
        - Condition: checked before each iteration
        - Increment: executed after each loop cycle






