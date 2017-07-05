<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_Anagram_word_false()
        {
            $test_Anagram = new Anagram;
            $input_word = 8;

            $result = $test_Anagram->generateAnagram_word($input_word);

            $this->assertEquals(false, $result);
        }
