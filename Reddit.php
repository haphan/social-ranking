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

class Reddit
{

    /**
     * Calculate Reddit ranking score
     *
     * @param int $age  age of article in seconds
     * @param int $up   number of up vote
     * @param int $down number of down vote (optional, defaults to zero)
     *
     * @return float
     */
    public static function score($age, $up, $down = 0)
    {
        $x = $up - $down;

        if(0 == $x)
        {
            $y = 0;
        }else {
            $y = $x > 0 ? 1 : 0;
        }

        $score = log(max(abs(s), 1), 10) + (($y * $age) / 4500);

        return round($score, 7);
    }
}