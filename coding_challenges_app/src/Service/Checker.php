<?php
declare(strict_types=1);

namespace App\Service;

class Checker {
    /**
     * A palindrome is a word, phrase, number, or other sequence of characters 
     * which reads the same backward or forward.
     *
     * @param string $word
     * @return bool
    */
    public function isPalindrome(string $word) : bool {
        // Return result of equality operator between $word and reversed $word
        return $word == strrev($word);
    }
    
    /**
     * An anagram is the result of rearranging the letters of a word or phrase 
     * to produce a new word or phrase, using all the original letters 
     * exactly once.
     * 
     * @param string $word
     * @param string $comparison
     * @return bool
    */
    public function isAnagram(string $word, string $comparison) : bool {
        // Standardise input
        $word = $this->removePunctuation($word);
        $comparison = $this->removePunctuation($comparison);

        // Check for differing string lengths
        if (mb_strlen($word) != mb_strlen($comparison)) {
            return false;
        }

        // Return result of equality operator between each character occurence array
        return $this->countCharOccurrences($word) == $this->countCharOccurrences($comparison);
    }
    
    /**
     * A Pangram for a given alphabet is a sentence using every letter of the 
     * alphabet at least once. 
     * 
     * @param string $phrase
     * @return bool
    */
    public function isPangram(string $phrase) : bool {
        // Standardise input
        $phrase = $this->removePunctuation($phrase);

        // Reuse countCharOccurrences function, if number of keys is 26, all letters occur at least once
        return count($this->countCharOccurrences($phrase)) == 26;
    }

    /**
     * Removes all punctuation and non-a-z characters from a string
     * 
     * @param string $input_string
     * @return string
    */
    private function removePunctuation($input_string) : string {
        // Use Regex to disallow any characters that aren't standard letters, convert all to lowercase beforehand
        return preg_replace("/[^a-z]+/i", "", strtolower($input_string));
    }

    /**
     * Counts the number of occurrences of each character in a string.
     * Returns an associative array in which the key represents the character,
     * and the value represents the number of occurrences in the string
     * 
     * @param string $input_string
     * @return array
    */
    private function countCharOccurrences($input_string) : array {
        // Initialise associative array for storing character occurrences
        $output_array = [];
        
        // Iterate through each character of $input_string
        foreach (str_split($input_string) as $char) {
            $output_array[$char] = isset($output_array[$char]) ? $output_array[$char] + 1 : 1;
        }

        return $output_array;
    }
}