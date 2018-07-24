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

class PlTest extends LocalizationTestCase
{
    const LOCALE = 'pl'; // Polish

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'W zeszłą sobotę o 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'W niedzielę o 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Jutro o 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Dziś o 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Dziś o 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Wczoraj o 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'W zeszły wtorek o 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'We wtorek o 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'W piątek o 00:00',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        '1 sekunda temu',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1s temu',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 sekundy temu',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2s temu',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        '1 minuta temu',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1m temu',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 minuty temu',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2m temu',
        // Carbon::now()->subHours(1)->diffForHumans()
        '1 godzina temu',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1g temu',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 godziny temu',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2g temu',
        // Carbon::now()->subDays(1)->diffForHumans()
        '1 dzień temu',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1d temu',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 dni temu',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2d temu',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 tydzień temu',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1tyg temu',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 tygodnie temu',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2tyg temu',
        // Carbon::now()->subMonths(1)->diffForHumans()
        '1 miesiąc temu',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1mies temu',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 miesiące temu',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2mies temu',
        // Carbon::now()->subYears(1)->diffForHumans()
        '1 rok temu',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1r temu',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 lata temu',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2l temu',
        // Carbon::now()->addSecond()->diffForHumans()
        'za 1 sekunda',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'za 1s',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        '1 sekunda po',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1s po',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        '1 sekunda przed',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1s przed',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        '1 sekunda',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1s',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 sekundy',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2s',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'za 1s',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        '1 minuta 1 sekunda',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2l 3mies 1d 1s',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 tydzień 10 godzin',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 tydzień 6 dni',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 tydzień 6 dni',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 tygodnie 1 godzina',
    ];
}
