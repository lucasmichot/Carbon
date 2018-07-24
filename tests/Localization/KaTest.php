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

class KaTest extends LocalizationTestCase
{
    const LOCALE = 'ka'; // Georgian

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'წინა შაბათს 12:00 AM-ზე',
        // Carbon::now()->subDays(2)->calendar()
        'შემდეგ კვირას 8:49 PM-ზე',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ხვალ 10:00 PM-ზე',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'დღეს 10:00 AM-ზე',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'დღეს 2:00 AM-ზე',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'გუშინ 1:00 AM-ზე',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'წინა სამშაბათს 12:00 AM-ზე',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'შემდეგ სამშაბათს 12:00 AM-ზე',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'შემდეგ პარასკევს 12:00 AM-ზე',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'რამდენიმე წამშიში',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1 წამისში',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 წამშიში',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2 წამისში',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'წუთშიში',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1 წუთისში',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 წუთშიში',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2 წუთისში',
        // Carbon::now()->subHours(1)->diffForHumans()
        'საათშიში',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1 საათისში',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 საათშიში',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2 საათისში',
        // Carbon::now()->subDays(1)->diffForHumans()
        'დღეში',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1 დღისში',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 დღეში',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2 დღისში',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 კვირისში',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1 კვირისში',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 კვირისში',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2 კვირისში',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'თვეში',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1 თვისში',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 თვეში',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2 თვისში',
        // Carbon::now()->subYears(1)->diffForHumans()
        'წელშიში',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1 წლისში',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 წელშიში',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2 წლისში',
        // Carbon::now()->addSecond()->diffForHumans()
        'რამდენიმე წამის წინ',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        '1 წამის',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'რამდენიმე წამი შემდეგ',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 წამის შემდეგ',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'რამდენიმე წამი უკან',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 წამის უკან',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'რამდენიმე წამი',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 წამის',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 წამი',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 წამის',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        '1 წამის',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'წუთი რამდენიმე წამი',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 წლის 3 თვის 1 დღის 1 წამის',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 კვირის 10 საათი',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 კვირის 6 დღე',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 კვირის 6 დღე',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 კვირის საათი',
    ];
}
