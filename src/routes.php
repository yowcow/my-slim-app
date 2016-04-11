<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    $this->logger->info("Slim-Skeleton '/' route");
    return $this->renderer->render($response, 'root.phtml', $args);
});
