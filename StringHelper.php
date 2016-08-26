<?php

namespace twisted1919\helpers;

class StringHelper extends \yii\helpers\StringHelper
{
    /**
     * @param $string
     * @param $length
     * @param string $replacement
     * @param null $encoding
     * @return mixed
     */
    public static function truncateMiddle($string, $length, $replacement = '...')
    {
        if (($stringLength = strlen($string)) > $length) {
            return substr_replace($string, $replacement, $length / 2, $stringLength - $length);
        }
        return $string;
    }
}
