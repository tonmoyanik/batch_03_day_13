<?php

    require_once '../vendor/autoload.php';
    use App\classes\Series;

        if (isset($_POST['btn']))
        {
            $series = new Series($_POST);
            $result = $series->makeSeries();
            include 'index.php';
        }

            else
            {
                header('Location:index.php');
            }

