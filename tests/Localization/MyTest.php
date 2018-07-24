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

class MyTest extends LocalizationTestCase
{
    const LOCALE = 'my'; // Burmese

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ပြီးခဲ့သော စနေ 00:00 မှာ',
        // Carbon::now()->subDays(2)->calendar()
        'တနင်္ဂနွေ 20:49 မှာ',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'မနက်ဖြန် 22:00 မှာ',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'ယနေ. 10:00 မှာ',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ယနေ. 02:00 မှာ',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'မနေ.က 01:00 မှာ',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ပြီးခဲ့သော အင်္ဂါ 00:00 မှာ',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'အင်္ဂါ 00:00 မှာ',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'သောကြာ 00:00 မှာ',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'လွန်ခဲ့သော စက္ကန်.အနည်းငယ် က',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 1 စက္ကန့် က',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'လွန်ခဲ့သော 2 စက္ကန့် က',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 2 စက္ကန့် က',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'လွန်ခဲ့သော တစ်မိနစ် က',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 1 မိနစ် က',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'လွန်ခဲ့သော 2 မိနစ် က',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 2 မိနစ် က',
        // Carbon::now()->subHours(1)->diffForHumans()
        'လွန်ခဲ့သော တစ်နာရီ က',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 1 နာရီ က',
        // Carbon::now()->subHours(2)->diffForHumans()
        'လွန်ခဲ့သော 2 နာရီ က',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 2 နာရီ က',
        // Carbon::now()->subDays(1)->diffForHumans()
        'လွန်ခဲ့သော တစ်ရက် က',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 1 ရက် က',
        // Carbon::now()->subDays(2)->diffForHumans()
        'လွန်ခဲ့သော 2 ရက် က',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 2 ရက် က',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'လွန်ခဲ့သော 1 ပတ် က',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 1 ပတ် က',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'လွန်ခဲ့သော 2 ပတ် က',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 2 ပတ် က',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'လွန်ခဲ့သော တစ်လ က',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 1 လ က',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'လွန်ခဲ့သော 2 လ က',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 2 လ က',
        // Carbon::now()->subYears(1)->diffForHumans()
        'လွန်ခဲ့သော တစ်နှစ် က',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 1 နှစ် က',
        // Carbon::now()->subYears(2)->diffForHumans()
        'လွန်ခဲ့သော 2 နှစ် က',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'လွန်ခဲ့သော 2 နှစ် က',
        // Carbon::now()->addSecond()->diffForHumans()
        'လာမည့် စက္ကန်.အနည်းငယ် မှာ',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'လာမည့် 1 စက္ကန့် မှာ',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'စက္ကန်.အနည်းငယ် ကြာပြီးနောက်',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 စက္ကန့် ကြာပြီးနောက်',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'စက္ကန်.အနည်းငယ် မတိုင်ခင်',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 စက္ကန့် မတိုင်ခင်',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'စက္ကန်.အနည်းငယ်',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 စက္ကန့်',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 စက္ကန့်',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 စက္ကန့်',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'လာမည့် 1 စက္ကန့် မှာ',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'တစ်မိနစ် စက္ကန်.အနည်းငယ်',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 နှစ် 3 လ 1 ရက် 1 စက္ကန့်',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 ပတ် 10 နာရီ',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 ပတ် 6 ရက်',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 ပတ် 6 ရက်',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 ပတ် တစ်နာရီ',
    ];
}
