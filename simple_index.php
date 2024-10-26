<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Vite!</title>

    <!-- This is just an example for local development, no full integration: -->
    <script type="module" src="https://<?php echo  $_SERVER['DDEV_HOSTNAME']; ?>:5173/@vite/client"></script>
    <script type="module" src="https://<?php echo  $_SERVER['DDEV_HOSTNAME']; ?>:5173/src/assets/main.js"></script>
    <!-- see https://vitejs.dev/guide/backend-integration.html -->

</head>

<body>
    <h1 class="undeline text-red-500">Hello, Vite!</h1>
    <p>This is a simple test for hot module reloading.</p>

    <div id="image-test"></div>
</body>

</html>