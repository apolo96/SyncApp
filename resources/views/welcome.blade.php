<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SyncApp</title>

        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        <script>
            var OneSignal = window.OneSignal || [];
            OneSignal.push(function() {
                OneSignal.init({
                    appId: "f2c27a0a-ab93-4fa4-b1b0-52be6b848755",
                });
            });
        </script>
    </head>
    <body>
       <h1>OneSignal</h1>
    </body>
</html>
