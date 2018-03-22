<?php
/** set your paypal credential **/
//sandbox
// $config['client_id'] = 'AU0MBAjVUc5YfobHITWGHsbs92bRU1Y1HBv0Ga4Zfjj5AhPGsj4SZp3CgRYUFq8RW7WdUUOmaB9hCLMR';
// $config['secret'] = 'EDZq6ktHC6rlPUul9Q7PqacvxruM85-fN64xa5Ani_8Dsl_oV96nKhr_V5ugFyLniJ4QY93qn0KLnI0N';
//live
$config['client_id'] = 'AWAtcIvh6BNhhtqVB5416q2Bh1Y8IYVP70oEm84tUUWMh9nxBuF6K2UjMxhULnwuFz2z2et4obQzmHOQ';
$config['secret'] = 'EOrdKV8RCPXbVrq-PtMvy0_pIMdBTvy68ccb0zvyKlfNRIuej1a5fx3P6V5DJjSAy7-HN3EmLM6lkiMM';

/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

    'mode' => 'sandbox',
    /**
     * Specify the max request time in seconds
     */
    'http.ConnectionTimeOut' => 1000,
    /**
     * Whether want to log to a file
     */
    'log.LogEnabled' => true,
    /**
     * Specify the file that want to write on
     */
    'log.FileName' => 'application/logs/paypal.log',
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);
