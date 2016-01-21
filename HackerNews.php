<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Ha Phan <thanhha.work@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Haphan\SocialRanking;

class HackerNews
{
    /**
     * Implementation of Hacker News hot ranking version 1
     *
     * @param int   $age        Age of article in seconds
     * @param int   $up         Number of up votes
     * @param int   $down       Number of down votes
     * @param float $gravity    Gravity
     *
     * @return float
     */
    public static function scoreV1($age, $up, $down = 0, $gravity=1.8)
    {
        $votes = ($up - $down) >= 1 ?  ($up - $down) : 1;

        return ($votes - 1) / pow((($age/3600) +2), $gravity);
    }
}