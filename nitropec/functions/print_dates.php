<?php

if (!function_exists('nitropec_print_dates_and_time')) :
    /**
     * Returns a string with dates and times formatted for the event.
     * $start_date: Date object
     * $end_date: Date object
     * $start_time: String
     * $end_time: String
     */
    function nitropec_print_dates_and_time($start_date_str, $end_date_str, $start_time, $end_time)
    {
        if ($start_date_str && $end_date_str) {

            $start_date = new DateTime('@' . strtotime($start_date_str));
            $end_date = new DateTime('@' . strtotime($end_date_str));

            $start_day = $start_date->format('j');
            $start_month = $start_date->format('M');
            $start_year = $start_date->format('Y');
            $end_day = $end_date->format('j');
            $end_month = $end_date->format('M');
            $end_year = $end_date->format('Y');
            $content = '';
            if ($start_year == $end_year) {
                if ($start_month == $end_month) {
                    if ($start_day == $end_day) {
                        $content =  $start_month . ' ' . $start_day . ', ' . $start_year;
                    } else {
                        $content =  $start_month . ' ' . $start_day . '-' . $end_day . ', ' . $start_year;
                    }
                } else {
                    $content =  $start_month . ' ' . $start_day . ' - ' . $end_month . ' ' . $end_day . ', ' . $start_year;
                }
            } else {
                $content = $start_month . ' ' . $start_day . ', ' . $start_year . ' - ' . $end_month . ' ' . $end_day . ', ' . $end_year;
            }
        } else if ($start_date_str) {
            $start_date = new DateTime('@' . strtotime($start_date_str));
            $start_day = $start_date->format('j');
            $start_month = $start_date->format('M');
            $start_year = $start_date->format('Y');
            $content = $start_month . ' ' . $start_day . ', ' . $start_year;
        }
        if ($start_time) {
            $content .= ' @ ' . $start_time;
        }
        if ($end_time) {
            $content .= ' - ' . $end_time;
        }
        echo $content;
    }
endif;

if (!function_exists('nitropec_print_dates')) :
    /**
     * Returns a string with dates formatted for the event.
     * $start_date: Date object
     * $end_date: Date object
     */
    function nitropec_print_dates($start_date_str, $end_date_str)
    {
        if ($start_date_str && $end_date_str) {

            $start_date = new DateTime('@' . strtotime($start_date_str));
            $end_date = new DateTime('@' . strtotime($end_date_str));

            $start_day = $start_date->format('j');
            $start_month = $start_date->format('M');
            $start_year = $start_date->format('Y');
            $end_day = $end_date->format('j');
            $end_month = $end_date->format('M');
            $end_year = $end_date->format('Y');
            $content = '';
            if ($start_year == $end_year) {
                if ($start_month == $end_month) {
                    if ($start_day == $end_day) {
                        $content =  $start_month . ' ' . $start_day . ', ' . $start_year;
                    } else {
                        $content =  $start_month . ' ' . $start_day . '-' . $end_day . ', ' . $start_year;
                    }
                } else {
                    $content =  $start_month . ' ' . $start_day . ' - ' . $end_month . ' ' . $end_day . ', ' . $start_year;
                }
            } else {
                $content = $start_month . ' ' . $start_day . ', ' . $start_year . ' - ' . $end_month . ' ' . $end_day . ', ' . $end_year;
            }
        } else if ($start_date_str) {
            $start_date = new DateTime('@' . strtotime($start_date_str));
            $start_day = $start_date->format('j');
            $start_month = $start_date->format('M');
            $start_year = $start_date->format('Y');
            $content = $start_month . ' ' . $start_day . ', ' . $start_year;
        }
        echo $content;
    }
endif;
