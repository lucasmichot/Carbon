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

class BmTest extends LocalizationTestCase
{
    const LOCALE = 'bm'; // Bambara

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Sibiri tɛmɛnen lɛrɛ 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'Kari don lɛrɛ 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Sini lɛrɛ 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Bi lɛrɛ 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Bi lɛrɛ 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Kunu lɛrɛ 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Tarata tɛmɛnen lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tarata don lɛrɛ 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Juma don lɛrɛ 00:00',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'a bɛ sanga dama dama bɔ',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'a bɛ s bɔ',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'a bɛ sekondi 2 bɔ',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'a bɛ s bɔ',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'a bɛ miniti kelen bɔ',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'a bɛ min bɔ',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'a bɛ miniti 2 bɔ',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'a bɛ min bɔ',
        // Carbon::now()->subHours(1)->diffForHumans()
        'a bɛ lɛrɛ kelen bɔ',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'a bɛ h bɔ',
        // Carbon::now()->subHours(2)->diffForHumans()
        'a bɛ lɛrɛ 2 bɔ',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'a bɛ h bɔ',
        // Carbon::now()->subDays(1)->diffForHumans()
        'a bɛ tile kelen bɔ',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'a bɛ d bɔ',
        // Carbon::now()->subDays(2)->diffForHumans()
        'a bɛ tile 2 bɔ',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'a bɛ d bɔ',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'a bɛ dɔgɔkun 1 bɔ',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'a bɛ w bɔ',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'a bɛ dɔgɔkun 2 bɔ',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'a bɛ w bɔ',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'a bɛ kalo kelen bɔ',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'a bɛ m bɔ',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'a bɛ kalo 2 bɔ',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'a bɛ m bɔ',
        // Carbon::now()->subYears(1)->diffForHumans()
        'a bɛ san kelen bɔ',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'a bɛ y bɔ',
        // Carbon::now()->subYears(2)->diffForHumans()
        'a bɛ san 2 bɔ',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'a bɛ y bɔ',
        // Carbon::now()->addSecond()->diffForHumans()
        'sanga dama dama kɔnɔ',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        's kɔnɔ',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'after',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'after',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'before',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'before',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'sanga dama dama',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        's',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        'sekondi 2',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        's',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        's kɔnɔ',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'miniti kelen sanga dama dama',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'y m d s',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'dɔgɔkun 1 lɛrɛ 10',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'dɔgɔkun 1 tile 6',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'dɔgɔkun 1 tile 6',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        'dɔgɔkun 2 lɛrɛ kelen',
    ];
}
