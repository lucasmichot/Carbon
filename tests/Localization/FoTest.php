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

class FoTest extends LocalizationTestCase
{
    const LOCALE = 'fo'; // Faroese

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'síðstu leygardagur kl 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'sunnudagur kl. 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Í morgin kl. 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Í dag kl. 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Í dag kl. 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Í gjár kl. 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'síðstu týsdagur kl 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'týsdagur kl. 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'fríggjadagur kl. 00:00',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'fá sekund síðani',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1 sekund síðani',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 sekundir síðani',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2 sekundir síðani',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'ein minutt síðani',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1 minutt síðani',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 minuttir síðani',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2 minuttir síðani',
        // Carbon::now()->subHours(1)->diffForHumans()
        'ein tími síðani',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1 tími síðani',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 tímar síðani',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2 tímar síðani',
        // Carbon::now()->subDays(1)->diffForHumans()
        'ein dagur síðani',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1 dag síðani',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 dagar síðani',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2 dagar síðani',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 vika síðani',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1 vika síðani',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 vikur síðani',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2 vikur síðani',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'ein mánaði síðani',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1 mánaður síðani',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 mánaðir síðani',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2 mánaðir síðani',
        // Carbon::now()->subYears(1)->diffForHumans()
        'eitt ár síðani',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1 ár síðani',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 ár síðani',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2 ár síðani',
        // Carbon::now()->addSecond()->diffForHumans()
        'um fá sekund',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'um 1 sekund',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'fá sekund aftaná',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 sekund aftaná',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'fá sekund áðrenn',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 sekund áðrenn',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'fá sekund',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 sekund',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 sekundir',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 sekundir',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'um 1 sekund',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'ein minutt fá sekund',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 ár 3 mánaðir 1 dag 1 sekund',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 vika 10 tímar',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 vika 6 dagar',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 vika 6 dagar',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 vikur ein tími',
    ];
}
