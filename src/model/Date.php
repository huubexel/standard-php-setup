<?php

declare(strict_types=1);

namespace src\model;

class Date
{

    private string $dateString;

    public function __toString(): string
    {
        return $this->dateString;
    }

    public function getDateString(): string
    {
        return $this->dateString;
    }

    public function __construct(string $date = '')
    {
        $this->dateString = ($date === '') ? self::getCurrentDateString() : $date;
    }

    public static function isDateInFuture(string $dateToCheck, string $comparedToDate = ''): bool
    {
        if ($comparedToDate === '') {
            $comparedToDate = self::getCurrentDateString();
        }

        return strtotime($dateToCheck) > strtotime($comparedToDate);
    }

    public static function getCurrentDateString(string $format = 'd-m-Y'): string
    {
        return date($format);
    }

}
