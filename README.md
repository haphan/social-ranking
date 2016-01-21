#Reddit Ranking Algorithm


This is PHP implementation of various social media news "Hot" Ranking algoritm. 

[Reddit Ranking](https://medium.com/hacking-and-gonzo/how-reddit-ranking-algorithms-work-ef111e33d0d9#.tcktrdgh6)

[HackerNews Ranking](https://medium.com/hacking-and-gonzo/how-hacker-news-ranking-algorithm-works-1d9b0cf2c08d#.4xh80a84x)

###Usage
```php
<?php

require 'vendor/autoload.php';

use Haphan\SocialRanking\Reddit;
use Haphan\SocialRanking\HackerNews;

$redditScore = Reddit::score($age, $upVote, $downVote);
$hackerNewsScore = HackerNews::scoreV1($age, $upVote, $downVote);


```