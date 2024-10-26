<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
header('HTTP/1.0 403 Forbidden', TRUE, 403);
die();
}
?>

<main class="container">
    <div class="mt-5 row">
        <div class="col-12">
            <h1 class="pre-title pre-title--centered">Images utilisées sur le site </h1>
        </div>
    </div>
    <div class="mt-5 row">
        <div class="col-12 col-md-6">
            <h2 class="els-text-lg"></h2>
            <ul class="els-list">
               
            </ul>
        </div>
        <div class="col-12 col-md-6">
            <ul class="els-list">
               
            </ul>
        </div>
    </div>
</main>
