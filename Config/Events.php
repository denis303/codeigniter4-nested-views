<?php

use CodeIgniter\Events\Events;

Events::on('pre_system', function() {

    helper('app_view');

});