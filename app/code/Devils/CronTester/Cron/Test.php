<?php

namespace Devils\CronTester\Cron;

class Test
{
    /**
     * Create Backup
     *
     * @return $this
     */
    public function execute()
    {
        error_log('Devils_CronTester: ' . date("Y-m-d H:i:s") . "\n", 3, 'var/log/Devils_CronTester.log');

        return $this;
    }
}
