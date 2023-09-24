# Time Breakdown & Reasoning

---

### `isPalindrome` Method

The construction of this method was by far the quickest to implement, being complete in less than 1 minute. Being already familiar with the concept of both a Palindrome, and the usage of PHP's `strrev()` function, it was evident that the most straightforward approach was to return the outcome of an equality comparison between the input parameter and its reverse.
 
In the event that the `strrev()` function were unavailable, a plausible alternative would involve iterating through each character of the given word, proceeding both forwards and backwards within the same loop, while subsequently comparing each character.

### `isAnagram` Method

The implementation of the `isAnagram()` method took slightly longer, at approximately 5 minutes. It was readily apparent that user input necessitated sanitisation and standardisation, entailing the conversion of all characters to lowercase and the removal of any punctuation. Being implemented in the form of a private method for efficient re-use, this precautionary measure was taken to mitigate potential discrepancies arising from variations in character cases and string lengths, which may result from variances in spacing. These steps were crucial in ensuring the accuracy of the returned result.
 
 
Following the execution of this method on both input strings, a check is performed to ensure that their lengths match. Subsequently, a private method, `countCharOccurrences()`, is employed to generate an associative array. In this array, the key signifies a character, while the corresponding value denotes the frequency of that character within the string. Then, the anagram status of the provided parameters can be determined by simply comparing the resultant arrays.

### `isPangram` Method

Similar to the `isPalindrome()` method, due to the groundwork that was already in place, implementing this method was notably swift, taking only a few minutes to complete. The `removePunctuation()` method is once again utilised to restrict the input string to lowercase letters (a-z), meaning only the standard 26 letters of the English alphabet are valid. Subsequently, the `countCharOccurrences()` method is executed, enabling us to ascertain if all 26 character choices have been accounted for, thereby confirming the input phrase as a pangram.