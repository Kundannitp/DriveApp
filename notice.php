<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            border: solid 2px black;
            margin: 16px;
            padding: 16px;
        }
    </style>
</head>

<body>
    <?php include 'show_list.php' ?>
    <div class="announcement">
        <h1>Announcement</h1>
        <?php
        printData('csv/announcement.csv');
        ?>
    </div>
    <div class="important">
        <h1>Important</h1>
        <?php
        printData('csv/important.csv');
        ?>
    </div>
    <div class="event">
        <h1>Event</h1>
        <?php
        printData('csv/events.csv');
        ?>
    </div>
</body>

</html>