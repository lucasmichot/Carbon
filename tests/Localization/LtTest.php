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

class LtTest extends LocalizationTestCase
{
    const LOCALE = 'lt'; // Lithuanian

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Saturday at 12:00 AM',
        // Carbon::now()->subDays(2)->calendar()
        'Sunday at 8:49 PM',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tomorrow at 10:00 PM',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Today at 10:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Today at 2:00 AM',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Yesterday at 1:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Last Tuesday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tuesday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Friday at 12:00 AM',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'prieš 1 sekundę',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'prieš 1 sekundę',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'prieš 2 sekundes',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'prieš 2 sekundes',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'prieš 1 minutę',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'prieš 1 minutę',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'prieš 2 minutes',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'prieš 2 minutes',
        // Carbon::now()->subHours(1)->diffForHumans()
        'prieš 1 valandą',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'prieš 1 valandą',
        // Carbon::now()->subHours(2)->diffForHumans()
        'prieš 2 valandas',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'prieš 2 valandas',
        // Carbon::now()->subDays(1)->diffForHumans()
        'prieš 1 dieną',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'prieš 1 dieną',
        // Carbon::now()->subDays(2)->diffForHumans()
        'prieš 2 dienas',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'prieš 2 dienas',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'prieš 1 savaitę',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'prieš 1 savaitę',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'prieš 2 savaites',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'prieš 2 savaites',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'prieš 1 mėnesį',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'prieš 1 mėnesį',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'prieš 2 mėnesius',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'prieš 2 mėnesius',
        // Carbon::now()->subYears(1)->diffForHumans()
        'prieš 1 metus',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'prieš 1 metus',
        // Carbon::now()->subYears(2)->diffForHumans()
        'prieš 2 metus',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'prieš 2 metus',
        // Carbon::now()->addSecond()->diffForHumans()
        'už 1 sekundės',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'už 1 sekundę',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'po 1 sekundę',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'po 1 sekundę',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        '1 sekundę nuo dabar',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 sekundę nuo dabar',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        '1 sekundę',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 sekundę',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 sekundes',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 sekundes',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'už 1 sekundę',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        '1 minutę 1 sekundę',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 metus 3 mėnesius 1 dieną 1 sekundę',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 savaitę 10 valandų',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 savaitę 6 dienas',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 savaitę 6 dienas',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 savaites 1 valandą',
    ];
}
