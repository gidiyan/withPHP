<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Checkout Form</title>

    <link rel='stylesheet' href='/assets/fontawesome/css/all.min.css'>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

        body {

            font-family: 'Roboto Condensed', sans-serif;
            color: #262626;
            margin: 5% 0;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .d-flex {
            display: flex;
            flex-direction: row;
            background: #f6f6f6;
            border-radius: 0 0 5px 5px;
            padding: 25px;
        }

        .form {
            flex: 4;
        }

        .Yorder {
            flex: 2;
        }

        .title {
            background: linear-gradient(to bottom right, indigo 0%, #7048FF 100%);
            border-radius: 5px 5px 0 0;
            padding: 20px;
            color: #f6f6f6;
        }

        h2 {
            margin: 0;
            padding-left: 15px;
        }

        .required {
            color: red;
        }

        label,
        table {
            display: block;
            margin: 15px;
        }

        label > span {
            float: left;
            width: 25%;
            margin-top: 12px;
            padding-right: 10px;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        select {
            width: 70%;
            height: 30px;
            padding: 5px 10px;
            margin-bottom: 10px;
            border: 1px solid #dadada;
            color: #888;
        }

        select {
            width: 72%;
            height: 45px;
            padding: 5px 10px;
            margin-bottom: 10px;
        }

        .Yorder {
            margin-top: 15px;
            /* height: 600px; */
            padding: 20px;
            border: 1px solid #dadada;
        }

        table {
            margin: 0;
            padding: 0;
        }

        th {
            border-bottom: 1px solid #dadada;
            padding: 10px 0;
        }

        tr > td:nth-child(1) {
            text-align: left;
            color: #2d2d2a;
        }

        tr > td:nth-child(2) {
            text-align: right;
            color: indigo;
        }

        td {
            border-bottom: 1px solid #dadada;
            padding: 25px 25px 25px 0;
        }

        p {
            display: block;
            color: #888;
            margin: 0;
            padding-left: 25px;
        }

        .Yorder > div {
            padding: 15px 0;
        }

        button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            border: none;
            border-radius: 30px;
            background: indigo;
            color: #fff;
            font-size: 15px;
            font-weight: bold;
        }

        button:hover {
            cursor: pointer;
            background: #428add;
        }
    </style>

</head>

<body>
<!-- Page Content  -->

<?php include(VIEWS . "/" . $template); ?>

</body>

</html>