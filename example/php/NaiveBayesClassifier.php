<?php

require_once "../../src/php/NaiveBayesClassifier.php";

$nbc = new NaiveBayesClassifier();

/**
 * Training data, it's better to do some text processing first like tokenizing, stopping, and stemming
 * before doing a training.
 */

$nbc->training("sad", "my dog died last night");
$nbc->training("sad", "she does not like me");
$nbc->training("sad", "i am lonely");
$nbc->training("sad", "no one likes me");
$nbc->training("sad", "my car just broke");
$nbc->training("sad", "she broke up with me");

$nbc->training("happy", "she love me so much");
$nbc->training("happy", "my mom bought me a new car");
$nbc->training("happy", "i got a good grade this semester");
$nbc->training("happy", "she hug me");
$nbc->training("happy", "my crush likes me");
$nbc->training("happy", "she gave me her love");

/**
 * classify words.
 */

print_r($nbc->classify("my dad gave me his car"));

/**
 *    [sad]     => 0.061046511627907
 *    [happy]   => 0.12790697674419
 */

print_r($nbc->classify("she broke me up and i am lonely"));

/**
 *    [sad]     => 0.24418604651163
 *    [happy]   => 0.015988372093023
 */

print_r($nbc->classify("she love my dog not me"));

/**
 *    [sad]     => 0.24418604651163
 *    [happy]   => 0.12790697674419
 */