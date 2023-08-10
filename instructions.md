# Instructions

## Initialisation

- Navigate to the `/test-site` folder.
- You may need to run `composer install` in order to load any dependencies.
- To start the symfony development server, please run `symfony server:start`.

## PHPUnit tests

- To run the unit tests that have been created, please run `php bin/phpunit`. This will run the tests defined in `/test-site/tests`.

## Checker operations

- There are two ways to use the Checker operations - using console commands, or through the web interface.

### Console commands

- The 'IsPalindrome' operation can be used with the `check:is-palindrome` command.
    - The following command can be used from a terminal to check if a `{testWord}` is a palindrome:
        - `php bin/console check:is-palindrome "{testWord}"`
    - Please append a verbosity flag in order to see the results:
        - `-v` will only show the outcome (i.e. `true` or `false`).
        - `-vv` will additionality show the given `testWord` (i.e. `'Anna' isPalindrome: true`)

- The 'IsAnagram' operation can be used with the `check:is-anagram` command.
    - The following command can be used from a terminal to check if a `{testWord}` and `{comparisonWord}` are anagrams:
        - `php bin/console check:is-anagram "{testWord}" "{comparisonWord}"`
    - Please append a verbosity flag in order to see the results:
        - `-v` will only show the outcome (i.e. `true` or `false`).
        - `-vv` will additionality show the given word (i.e. `'Anna' and 'naan' isAnagram: true`)

- The 'IsPangram' operation can be used with the `check:is-pangram` command.
    - The following command can be used from a terminal to check if a `{testPhrase}` is a pangram:
        - `php bin/console check:is-pangram "{testPhrase}"`
    - Please append a verbosity flag in order to see the results:
        - `-v` will only show the outcome (i.e. `true` or `false`).
        - `-vv` will additionality show the given `testPhrase` (i.e. `'Anna' isPangram: false`)

### Web Interface

- The 'IsPalindrome' operation can be accessed by navigating to http://localhost:8000/test/palindrome
    - The `testWord` can be put into the text box, and when the 'Check for palindrome' button is pressed (and the form is submitted), an alert will appear telling you if the word is a palindrome or not.
- The 'IsAnagram' operation can be accessed by navigating to http://localhost:8000/test/anagram
    - The two words to check can be put into the text boxes, and when the 'Checkif these words are anagrams' button is pressed (and the form is submitted), an alert will appear telling you if the words are anagrams.
- The 'IsPangram' operation can be accessed by navigating to http://localhost:8000/test/pangram
    - The `testPhrase` can be put into the text box, and when the 'Check for pangram' button is pressed (and the form is submitted), an alert will appear telling you if the phrase is a pangram.
