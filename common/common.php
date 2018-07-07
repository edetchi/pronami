<?php

function gengo($seireki)
{
    if (1868 <= $seireki && $seireki <= 1911)
    {
        $gengo = '明治';
    }

    if (1912 <= $seireki && $seireki <= 1925)
    {
        $gengo = '大正';
    }

    if (1926 <= $seireki && $seireki <= 1988)
    {
        $gengo = '昭和';
    }

    if (1989 <= $seireki)
    {
        $gengo = '平成';
    }

    return $gengo;
}

function sanitize($before)
{
    foreach ($before as $key => $value)
    {
        $after[$key] = htmlspecialchars($value);
    }
    return $after;
}

function pulldown_year()
{
    print '<select name="year">';
    print '<option value="2013">2013</option>';
    print '<option value="2013">2014</option>';
    print '<option value="2013">2015</option>';
    print '<option value="2013">2016</option>';
    print '</select>';
}

function pulldown_month()
{
    print '<select name="month">';
    print '<option value="01">01</option>';
    print '<option value="01">02</option>';
    print '<option value="01">03</option>';
    print '<option value="01">04</option>';
    print '<option value="01">05</option>';
    print '<option value="01">06</option>';
    print '<option value="01">07</option>';
    print '<option value="01">08</option>';
    print '<option value="01">09</option>';
    print '<option value="01">10</option>';
    print '<option value="01">11</option>';
    print '<option value="01">12</option>';
    print '</select>';
}

function pulldown_day()
{
    print '<select name="day">';
    print '<option value="01">01</optio>';
    print '<option value="01">02</optio>';
    print '<option value="01">03</optio>';
    print '<option value="01">04</optio>';
    print '<option value="01">05</optio>';
    print '<option value="01">06</optio>';
    print '<option value="01">07</optio>';
    print '<option value="01">08</optio>';
    print '<option value="01">09</optio>';
    print '<option value="01">10</optio>';
    print '<option value="01">11</optio>';
    print '<option value="01">12</optio>';
    print '<option value="01">13</optio>';
    print '<option value="01">14</optio>';
    print '<option value="01">15</optio>';
    print '<option value="01">16</optio>';
    print '<option value="01">17</optio>';
    print '<option value="01">18</optio>';
    print '<option value="01">19</optio>';
    print '<option value="01">20</optio>';
    print '<option value="01">21</optio>';
    print '<option value="01">22</optio>';
    print '<option value="01">23</optio>';
    print '<option value="01">24</optio>';
    print '<option value="01">25</optio>';
    print '<option value="01">26</optio>';
    print '<option value="01">27</optio>';
    print '<option value="01">28</optio>';
    print '<option value="01">29</optio>';
    print '<option value="01">30</optio>';
    print '<option value="01">31</optio>';
    print '</select>';
}
?>