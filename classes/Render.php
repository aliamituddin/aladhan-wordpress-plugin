<?php

class Render {
    
    public static function timings($format = 'horizontal', $prayerTimings, $displayHeadingBgColour, $displayHeadingColour, $displayHeading, $headerBg, $rowBg, $headerText, $rowText)
    {
        if ($format == 'horizontal') { ?>
        <table class="aladhan-pt-table">
            <tr class="aladhan-pr-heading">
                <th colspan="5" style="background-color: <?= $displayHeadingBgColour; ?>; color: <?= $displayHeadingColour; ?>">
                    <?=$displayHeading; ?>
                </th>
            </tr>
            <tr class="aladhan-pt-header" style="background-color: <?= esc_attr( get_option('prayer_times_display_header_bg') ); ?>; color: <?= esc_attr( get_option('prayer_times_display_header_text') ); ?>;">
                <th style="">Fajr</th>
                <th style="">Zhuhr</th>
                <th style="">Asr</th>
                <th style="">Maghrib</th>
                <th style="">Isha</th>
            </tr>
            <tr class="aladhan-pt-row" style="background-color: <?= esc_attr( get_option('prayer_times_display_row_bg') ); ?>; color: <?= esc_attr( get_option('prayer_times_display_row_text') ); ?>;">
                <td style=""><?=$prayerTimings['data']['timings']['Fajr']; ?></td>
                <td style=""><?=$prayerTimings['data']['timings']['Dhuhr']; ?></td>
                <td style=""><?=$prayerTimings['data']['timings']['Asr']; ?></td>
                <td style=""><?=$prayerTimings['data']['timings']['Maghrib']; ?></td>
                <td style=""><?=$prayerTimings['data']['timings']['Isha']; ?></td>
            </tr>
        </table>
    <?php } else { ?>
        <table class="aladhan-pt-table">
            <tr class="aladhan-pr-heading">
                <th colspan="2" style="background-color: <?= $displayHeadingBgColour; ?>; color: <?= $displayHeadingColour; ?>">
                    <?=$displayHeading; ?>
                </th>
            </tr>
            <tr class="aladhan-pt-header" style="">
                <th style="background-color: <?= $headerBg; ?>; color: <?= $headerText; ?>;">Fajr</th>
                <td style="background-color: <?= $rowBg; ?>; color: <?= $rowText; ?>;"><?=$prayerTimings['data']['timings']['Fajr']; ?></td>
            </tr>
            <tr class="aladhan-pt-header" style="">
                <th style="background-color: <?= $headerBg; ?>; color: <?= $headerText; ?>;">Zhuhr</th>
                <td style="background-color: <?= $rowBg; ?>; color: <?= $rowText; ?>;"><?=$prayerTimings['data']['timings']['Dhuhr']; ?></td>
            </tr>
            <tr class="aladhan-pt-header" style="">
                <th style="background-color: <?= $headerBg; ?>; color: <?= $headerText; ?>;">Asr</th>
                <td style="background-color: <?= $rowBg; ?>; color: <?= $rowText; ?>;"><?=$prayerTimings['data']['timings']['Asr']; ?></td>
            </tr>
            <tr class="aladhan-pt-header" style="">
                <th style="background-color: <?= $headerBg; ?>; color: <?= $headerText; ?>;">Maghrib</th>
                <td style="background-color: <?= $rowBg; ?>; color: <?= $rowText; ?>;"><?=$prayerTimings['data']['timings']['Maghrib']; ?></td>
            </tr>
            <tr class="aladhan-pt-header" style="">
                <th style="background-color: <?= $headerBg; ?>; color: <?= $headerText; ?>;">Isha</th>
                <td style="background-color: <?= $rowBg; ?>; color: <?= $rowText; ?>;"><?=$prayerTimings['data']['timings']['Isha']; ?></td>
            </tr>
        </table>
    
    <?php }
    }
}