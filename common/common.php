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
    print '<option value="2014">2014</option>';
    print '<option value="2015">2015</option>';
    print '<option value="2016">2016</option>';
    print '<option value="2017">2017</option>';
    print '<option value="2018">2018</option>';
    print '</select>';
}

function pulldown_month()
{
    print '<select name="month">';
    print '<option value="01">01</option>';
    print '<option value="02">02</option>';
    print '<option value="03">03</option>';
    print '<option value="04">04</option>';
    print '<option value="05">05</option>';
    print '<option value="06">06</option>';
    print '<option value="07">07</option>';
    print '<option value="08">08</option>';
    print '<option value="09">09</option>';
    print '<option value="10">10</option>';
    print '<option value="11">11</option>';
    print '<option value="12">12</option>';
    print '</select>';
}

function pulldown_day()
{
    print '<select name="day">';
    print '<option value="01">01</optio>';
    print '<option value="02">02</optio>';
    print '<option value="03">03</optio>';
    print '<option value="04">04</optio>';
    print '<option value="05">05</optio>';
    print '<option value="06">06</optio>';
    print '<option value="07">07</optio>';
    print '<option value="08">08</optio>';
    print '<option value="09">09</optio>';
    print '<option value="10">10</optio>';
    print '<option value="11">11</optio>';
    print '<option value="12">12</optio>';
    print '<option value="13">13</optio>';
    print '<option value="14">14</optio>';
    print '<option value="15">15</optio>';
    print '<option value="16">16</optio>';
    print '<option value="17">17</optio>';
    print '<option value="18">18</optio>';
    print '<option value="19">19</optio>';
    print '<option value="20">20</optio>';
    print '<option value="21">21</optio>';
    print '<option value="22">22</optio>';
    print '<option value="23">23</optio>';
    print '<option value="24">24</optio>';
    print '<option value="25">25</optio>';
    print '<option value="26">26</optio>';
    print '<option value="27">27</optio>';
    print '<option value="28">28</optio>';
    print '<option value="29">29</optio>';
    print '<option value="30">30</optio>';
    print '<option value="31">31</optio>';
    print '</select>';
}
?>