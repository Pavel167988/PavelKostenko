<?php
    function month($mt)
    {
        switch ($mt) {
            case "January":
                echo 31;
                break;
            case 'February':
                echo 28;
                break;
            case 'March':
                echo 31;
                break;
            case 'April':
                echo 30;
                break;
            case 'May':
                echo 31;
                break;
            case 'June':
                echo 30;
                break;
            case 'July':
                echo 31;
                break;
            case 'August':
                echo 31;
                break;
            case 'September':
                echo 30;
                break;
            case 'October':
                echo 31;
                break;
            case 'November':
                echo 31;
                break;
            case 'December':
                echo 31;
                break;

        }
    }
month("February");
    //Задача на месяца
?>