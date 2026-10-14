<?php

declare(strict_types=1);

use OCP\Util;

Util::addScript(OCA\KuhleMonitor\AppInfo\Application::APP_ID, OCA\KuhleMonitor\AppInfo\Application::APP_ID . '-main');
Util::addStyle(OCA\KuhleMonitor\AppInfo\Application::APP_ID, OCA\KuhleMonitor\AppInfo\Application::APP_ID . '-main');

?>

<div id="kuhlemonitor"></div>
