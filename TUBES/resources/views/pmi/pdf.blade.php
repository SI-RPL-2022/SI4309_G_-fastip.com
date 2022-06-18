<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tiket Donor Darah</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .bg-red {
            background-color: red;
        }

        .bg-white {
            background-color: white;
        }

        .text-center {
            text-align: center;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }

        .text-left {
            text-align: left;
        }

        h5 {
            font-size: 20px;
        }

        .m-0 {
            margin: 0;
        }
    </style>
</head>
<body>
<div class="bg-red text-center" style="padding: 20px">
    <h2 class="m-0" style="padding-bottom: 20px;">Donor Darah</h2>
    <div class="bg-white">
        <h4 class="m-0" style="padding: 10px">{{ \Carbon\Carbon::parse($donor['schedule']['time'])->isoFormat('dddd, DD MMMM Y') }}</h4>
        <hr>