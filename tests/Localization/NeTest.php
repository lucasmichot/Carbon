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

class NeTest extends LocalizationTestCase
{
    const LOCALE = 'ne'; // Nepali

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'गएको शनिबार, रातिको 12:00 बजे',
        // Carbon::now()->subDays(2)->calendar()
        'आउँदो आइतबार, रातिको 8:49 बजे',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'भोलि रातिको 10:00 बजे',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'आज बिहानको 10:00 बजे',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'आज रातिको 2:00 बजे',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'हिजो रातिको 1:00 बजे',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'गएको मङ्गलबार, रातिको 12:00 बजे',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'आउँदो मङ्गलबार, रातिको 12:00 बजे',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'आउँदो शुक्रबार, रातिको 12:00 बजे',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'केही क्षण अगाडि',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1 सेकेण्ड अगाडि',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 सेकेण्ड अगाडि',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2 सेकेण्ड अगाडि',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'एक मिनेट अगाडि',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1 मिनेट अगाडि',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 मिनेट अगाडि',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2 मिनेट अगाडि',
        // Carbon::now()->subHours(1)->diffForHumans()
        'एक घण्टा अगाडि',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1 घण्टा अगाडि',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 घण्टा अगाडि',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2 घण्टा अगाडि',
        // Carbon::now()->subDays(1)->diffForHumans()
        'एक दिन अगाडि',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1 दिन अगाडि',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 दिन अगाडि',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2 दिन अगाडि',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 हप्ता अगाडि',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1 हप्ता अगाडि',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 हप्ता अगाडि',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2 हप्ता अगाडि',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'एक महिना अगाडि',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1 महिना अगाडि',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 महिना अगाडि',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2 महिना अगाडि',
        // Carbon::now()->subYears(1)->diffForHumans()
        'एक बर्ष अगाडि',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1 वर्ष अगाडि',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 बर्ष अगाडि',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2 वर्ष अगाडि',
        // Carbon::now()->addSecond()->diffForHumans()
        'केही क्षणमा',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        '1 सेकेण्डमा',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'केही क्षण पछि',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 सेकेण्ड पछि',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'केही क्षण अघि',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 सेकेण्ड अघि',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'केही क्षण',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 सेकेण्ड',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 सेकेण्ड',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 सेकेण्ड',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        '1 सेकेण्डमा',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'एक मिनेट केही क्षण',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 वर्ष 3 महिना 1 दिन 1 सेकेण्ड',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 हप्ता 10 घण्टा',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 हप्ता 6 दिन',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 हप्ता 6 दिन',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 हप्ता एक घण्टा',
    ];
}
