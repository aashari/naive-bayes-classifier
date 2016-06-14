# Naive Bayes Classifier

Naive Bayes Classifier is a simple probabilistic classifiers based on applying Bayes' theorem with strong (naive) independence assumptions between the features.

### What can I use this for?
  - Classify Twitter user mood based on his/her tweets
  - Classify News topics
  - And many things

### Naive Bayes Classifier Formula

> P(class|words) = (P(class)*P(words|class))/(P(words))

with assumtion that P(words) is the same for every class leeds to calculating so the new formula is
     
> P(class|words)     => P(class)*P(words|class)

* P(words|class) => P(word1|class) * P(word2|class) * P(wordn|class)
* P(class) => number of words in class divide by number of words in total

### Version
##### 1.0
* Initialize Project
* Language Added : PHP (v1.0)