<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_Anagram_split()
        {
            $test_Anagram = new Anagram;
            $input_word = "dog";

            $result = $test_Anagram->splitAnagram($input_word);

            $this->assertEquals(["d", "o", "g"], $result);
        }

        function test_Anagram_sort()
        {
            $test_Anagram = new Anagram;
            $input_word = "dog";

            $result = $test_Anagram->sortAnagram($input_word);

            $this->assertEquals(["d", "g", "o"], $result);
        }

        function test_Anagram_implode()
        {
            $test_Anagram = new Anagram;
            $input_word = "dog";

            $result = $test_Anagram->implodeAnagram($input_word);

            $this->assertEquals("dgo", $result);
        }

        function test_Anagram_list_split()
        {
            $test_Anagram = new Anagram;
            $input_list_of_words = ["dog", "fish" , "cat"];

            $result = $test_Anagram->listAnagram($input_list_of_words);

            $this->assertEquals([["d", "o", "g"], ["f", "i", "s", "h"], ["c", "a", "t"]], $result);
        }

        function test_Anagram_list_sort()
        {
            $test_Anagram = new Anagram;
            $input_list_of_words = ["dog", "fish" , "cat"];

            $result = $test_Anagram->sortlistAnagram($input_list_of_words);

            $this->assertEquals([["d", "g", "o"], ["f", "h", "i", "s"], ["a", "c", "t"]], $result);
        }

        function test_Anagram_list_implode()
        {
            $test_Anagram = new Anagram;
            $input_list_of_words = ["dog", "fish" , "cat"];

            $result = $test_Anagram->implodeListAnagram($input_list_of_words);

            $this->assertEquals(["dgo", "fhis", "act"], $result);
        }

    }
?>
