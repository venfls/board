<?php

class StaticHTML {

    public function head($title) {
        return '<!DOCTYPE html>
        <html lang="de">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . $title . '</title>
            <link rel="stylesheet" href="css/uikit.min.css" />
            <script src="js/uikit.min.js"></script>
            <script src="js/uikit-icons.min.js"></script>
        </head>
        <body>';
    }

    public function foot() {
        return '</body>
        </html>';
    }
 

}