<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Localization;

class RoTest extends LocalizationTestCase
{
    const LOCALE = 'ro'; // Romanian

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'fosta sâmbătă la 0:00',
        // Carbon::now()->subDays(2)->calendar()
        'duminică la 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'mâine la 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'azi la 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'azi la 2:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'ieri la 1:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'fosta marți la 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'marți la 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'vineri la 0:00',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'o secundă în urmă',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'o secundă în urmă',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 secunde în urmă',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2 secunde în urmă',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'un minut în urmă',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'un minut în urmă',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 minute în urmă',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2 minute în urmă',
        // Carbon::now()->subHours(1)->diffForHumans()
        'o oră în urmă',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'o oră în urmă',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 ore în urmă',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2 ore în urmă',
        // Carbon::now()->subDays(1)->diffForHumans()
        'o zi în urmă',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'o zi în urmă',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 zile în urmă',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2 zile în urmă',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'o săptămână în urmă',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'o săptămână în urmă',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 săptămâni în urmă',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2 săptămâni în urmă',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'o lună în urmă',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'o lună în urmă',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 luni în urmă',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2 luni în urmă',
        // Carbon::now()->subYears(1)->diffForHumans()
        'un an în urmă',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'un an în urmă',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 ani în urmă',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2 ani în urmă',
        // Carbon::now()->addSecond()->diffForHumans()
        'peste o secundă',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'peste o secundă',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'peste o secundă',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'peste o secundă',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'acum o secundă',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'acum o secundă',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'o secundă',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        'o secundă',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 secunde',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 secunde',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'peste o secundă',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'un minut o secundă',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 ani 3 luni o zi o secundă',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'o săptămână 10 ore',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'o săptămână 6 zile',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'o săptămână 6 zile',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 săptămâni o oră',
    ];
}
