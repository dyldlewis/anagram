<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    session_start();
    if (empty($_SESSION['words'])) {
    $_SESSION['words'] = array();
};

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render('anagram.html.twig');
    });

    $app->get("/results", function() use($app) {
        $Anagram = new Anagram;
        $base_word = $Anagram->implodeAnagram($_GET['base_word']);
        $word_list = $Anagram->implodeListAnagram(array($_GET['possible_anagram1'], $_GET['possible_anagram2'], $_GET['possible_anagram3'], $_GET['possible_anagram4'], $_GET['possible_anagram5']));

        $new_word_list = array($_GET['possible_anagram1'] => $word_list[0], $_GET['possible_anagram2'] => $word_list[1], $_GET['possible_anagram3'] => $word_list[2], $_GET['possible_anagram4'] => $word_list[3], $_GET['possible_anagram5'] => $word_list[4]);

        $filtered_array = array();

        foreach($new_word_list as $word => $word_value) {
            if ($base_word == $word_value) {
                array_push($filtered_array, $word);
            }
        }

        return $app['twig']->render('results.html.twig', array('string' => $base_word, 'array' => $filtered_array, 'name' => $_GET['base_word']));
    });

      return $app;
  ?>
