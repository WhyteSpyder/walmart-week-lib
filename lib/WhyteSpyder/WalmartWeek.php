<?php
 /**
 * Created by Roger Dickey, Jr
 * rdickey@whytespyder.com
 * 10/12/18 9:01 PM
 */

namespace WhyteSpyder;

class WalmartWeek {

    public function getWalmartWeek() {
        return $this->toWalmartWeek(date('Y-m-d'));
    }
    
    // Convert a normal date (YYYY-MM-DD) into the Walmart Week format (YYYYWW)
    public function toWalmartWeek($date) {
        $year = idate('Y', strtotime($date));
        $start_week = idate('W', strtotime($year . '-02-01'));
        $weeks_in_year = date('W', mktime(0,0,0,12,28,$year));
        $weekly_offset = $weeks_in_year == 53 ? 1 : 2; 
        $offset_weeks = ($start_week - $weekly_offset);

        $day_of_week = idate('w', strtotime($date));
        if ($day_of_week < 6) {
            $offset_weeks += 1;
        }

        $current_week = idate('W', strtotime($date));
        
        $walmart_week = $current_week - $offset_weeks;
        if ($walmart_week == 0) {
            $walmart_week = 1;
        }

        return sprintf("%4d%02d", $year, $walmart_week);
    }

    // Convert a Walmart Week (YYYYWW) into a normal date format (YYYY-MM-DD)
    public function fromWalmartWeek($date) {
        $year = substr($date, 0, 4);
        $week = substr($date, 4, 2);

        $start_week = idate('W', strtotime($year . '-02-01'));
        $weeks_in_year = date('W', mktime(0,0,0,12,28,$year));
        $weekly_offset = $weeks_in_year == 53 ? 1 : 2; 

        if (intval($week) > 1) {
            $week += ($start_week - $weekly_offset);
        }
        else {
            $week = ($start_week - 1);
        }
        $week = sprintf("%02d", $week);
        $date2 = date("Y-m-d", strtotime($year."W".$week."6")); // First day of week
        return $date2;
    }
}