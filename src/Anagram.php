<?php
    class Anagram
    {
        function splitAnagram($input_word)
        {
            $letters_of_anagram = str_split($input_word);
            return $letters_of_anagram;
        }

        function sortAnagram($input_word)
        {
            $letters_of_anagram = str_split($input_word);
            sort($letters_of_anagram);
            return $letters_of_anagram;
        }

        function implodeAnagram($input_word)
        {
            $input_word = strtolower($input_word);
            $letters_of_anagram = str_split($input_word);
            sort($letters_of_anagram);
            return implode("", $letters_of_anagram);
        }

        function listAnagram($input_list)
        {
            $words_of_anagram = array();
            foreach ($input_list as $word) {
                $array_of_letters = str_split($word);
                array_push($words_of_anagram, $array_of_letters);
            }
            return $words_of_anagram;
        }

        function sortlistAnagram($input_list)
        {
            $words_of_anagram = array();
            foreach ($input_list as $word) {
                $array_of_letters = str_split($word);
                sort($array_of_letters);
                array_push($words_of_anagram, $array_of_letters);
            }
            return $words_of_anagram;
        }

        function implodeListAnagram($input_list)
        {
            $words_of_anagram = array();
            foreach ($input_list as $word) {
                $array_of_letters = str_split($word);
                sort($array_of_letters);
                $sorted_string = implode("", $array_of_letters);
                $sorted_string = strtolower($sorted_string);
                array_push($words_of_anagram, $sorted_string);
            }
            return $words_of_anagram;
        }
    }
?>
