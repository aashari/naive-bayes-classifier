# Naive Bayes Classifier

Naive Bayes Classifier is a simple probabilistic classifiers based on applying Bayes' theorem with strong (naive) independence assumptions between the features.

Logic and algorithm guided by Mrs. Lili Ayu Wulandhari, S.Si., M.Sc., Ph.D.

### What can I use this for?
  - Sentiment analysis
  - Document classify
  - Forecasting
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
