<?php

/**
 * Naive Bayes Classifier is a simple probabilistic classifiers based on applying 
 * Bayes' theorem with strong (naive) independence assumptions between the features.
 *
 * @author     Andi Muqsith Ashari
 * @version    v1.0
 *
 */

class NaiveBayesClassifier
{

    /**
     * Trained words.
     *
     * @var array
     */
    private $trainedWords;

    /**
     * Add word into trained words
     *
     * @param string $class The class name for words.
     * @param string $words The words that classified as $class.
     */
    public function training($class, $words)
    {

        if (!@$this->trainedWords[$class]) {
            $this->trainedWords[$class] = array();
        }

        $arrayOfWord                = explode(' ', $words);
        $this->trainedWords[$class] = array_merge($this->trainedWords[$class], $arrayOfWord);
        $this->trainedWords[$class] = array_unique($this->trainedWords[$class]);
    }

    /**
     * Classify words based on trained words using Naive Bayes formula
     *
     * @param string $inWords The words that wanted to classified.
     * @var array of words probability in class
     */
    public function classify($inWords)
    {

        $arrayOfInWords = explode(' ', $inWords);
        $nWords         = $this->totalTrainedWords();

        $classifyResult = array();

        foreach ($this->trainedWords as $class => $words) {
            $probabilityOfClass = sizeof($words) / $nWords;
            foreach ($arrayOfInWords as $inWord) {
                $isExists                 = (int) in_array($inWord, $words);
                $probabilityOfWordInClass = (1 + $isExists) / sizeof($this->trainedWords);
                $probabilityOfClass *= $probabilityOfWordInClass;
            }
            $classifyResult[$class] = $probabilityOfClass;
        }

        return $classifyResult;

    }

    /**
     * Count all total trained words
     *
     * @var int
     */
    private function totalTrainedWords()
    {
        $n = 0;
        foreach ($this->trainedWords as $class => $words) {
            $n += sizeof($words);
        }
        return $n;
    }

}