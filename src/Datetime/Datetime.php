<?php

namespace Jimmeak\Datetime;

use DateTime as DateTimeMutable;
use DateTimeImmutable;
use DateTimeZone;
use Exception;

class Datetime
{
    private const TIMEZONE = 'Europe/Prague';

    /**
     * Shortcut for creating DateTime|DateTimeImmutable objects
     * with timezone Europe/Prague and datetime now. The method
     * is not meant for general use, only for local projects.
     *
     * @param bool $mutable false
     * @return DateTimeMutable|DateTimeImmutable
     *
     * @throws Exception
     */
    public static function now(bool $mutable = false): DateTimeImmutable|DateTimeMutable
    {
        $timezone = new DateTimeZone(self::TIMEZONE);
        return $mutable ? new DateTimeMutable(timezone: $timezone) : new DateTimeImmutable(timezone: $timezone);
    }

    /**
     * Shortcut for creating DateTime|DateTimeImmutable objects
     * with timezone Europe/Prague and given datetime. The method
     * is not meant for general use, only for local projects.
     *
     * @param string $datetime
     * @param bool $mutable false
     * @return DateTimeMutable|DateTimeImmutable
     *
     * @throws Exception
     */
    public static function datetime(string $datetime, bool $mutable = false): DateTimeImmutable|DateTimeMutable
    {
        $timezone = new DateTimeZone(self::TIMEZONE);
        return $mutable ? new DateTimeMutable(datetime: $datetime, timezone: $timezone) : new DateTimeImmutable(datetime: $datetime, timezone: $timezone);
    }
}
