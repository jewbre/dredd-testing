<?php

use Dredd\Hooks;

Hooks::before("Resource group > Resource > Delete resource", function (&$transaction) {
    $transaction->skip = true;

    $id = 5;
    $transaction->fullPath = "/dredd-testing/api/web/resources/$id";
    $transaction->id = "DELETE (204) /resources/$id";
    $transaction->request->uri = "/resources/$id";
    echo "vilim before";
});

Hooks::after("Resource group > Resource > Delete resource", function (&$transaction) {

});
