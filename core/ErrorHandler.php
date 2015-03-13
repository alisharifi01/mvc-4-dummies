<?php
/*
 * added by Keramatifar
 * Edited by Ali Sharifi 93-12-20  (add an exception handler and fatal error handler)
 */

class ErrorHandler
{
    private function __construct(){}
    /* Set user error-handler method to ErrorHandler::Handler method */
    public static function SetHandler($errTypes = ERROR_TYPES)
    {
        error_reporting(0);
        register_shutdown_function(array('ErrorHandler','fatalHandler'));
        set_exception_handler(array('ErrorHandler','exceptionHandler'));
        return set_error_handler(array ('ErrorHandler','Handler'), $errTypes);
    }
    // Error handler method
    public static function exceptionHandler(Exception $exception) {
        // these are our templates
        $traceline = "#%s %s(%s): %s(%s)";
        $msg = "Uncaught exception '%s' \n<br>MESSAGE: '%s' \n<br>LOCATION: %s:%s\nStack trace:\n%s\n  thrown in %s on line %s";

        // alter your trace as you please, here
        $trace = $exception->getTrace();
        foreach ($trace as $key => $stackPoint) {
            // I'm converting arguments to their type
            // (prevents passwords from ever getting logged as anything other than 'string')
            $trace[$key]['args'] = array_map('gettype', $trace[$key]['args']);
        }

        // build your tracelines
        $result = array();
        foreach ($trace as $key => $stackPoint) {
            $result[] = sprintf(
                $traceline,
                $key,
                $stackPoint['file'],
                $stackPoint['line'],
                $stackPoint['function'],
                implode(', ', $stackPoint['args'])
            );
        }
        // trace always ends with {main}
        $result[] = '#' . ++$key . ' {main}';

        // write tracelines into main template
        $msg = sprintf(
            $msg,
            get_class($exception),
            $exception->getMessage(),
            $exception->getFile(),
            $exception->getLine(),
            implode("\n", $result),
            $exception->getFile(),
            $exception->getLine()
        );

        // log or echo as you please
        //echo $msg;
        trigger_error($msg,E_USER_ERROR);
    }
    public static function fatalHandler(){
        $errfile = "unknown file";
        $errstr  = "shutdown";
        $errno   = E_CORE_ERROR;
        $errline = 0;

        $error = error_get_last();

        if( $error !== NULL) {
            $errno   = $error["type"];
            $errfile = $error["file"];
            $errline = $error["line"];
            $errstr  = $error["message"];
            $msg = "PHP FATAL ERROR : \n<br>";
            $msg .= "ERROR NO : $errno \n<br>";
            $msg .= "TEXT : $errstr \n<br>";
            $msg .= "LOCATION : $errfile \n<br>";
            $msg .= "LINE : $errline \n<br>";
            trigger_error($msg,E_USER_ERROR);
        }
    }
    public static function Handler($errNo, $errStr, $errFile, $errLine)
    {
        /* The first two elements of the backtrace array are irrelevant:
        - ErrorHandler.GetBacktrace
        - ErrorHandler.Handler */
        
        $backtrace = ErrorHandler::GetBacktrace(2);
        // Error message to be displayed, logged, or mailed
        $error_message = "\nERRNO: $errNo\nTEXT: $errStr" .
        "\nLOCATION: $errFile, line " .
        "$errLine, at " . date('F j, Y, g:i a') .
        "\n\n<hr>\n\n<hr>\nShowing backtrace:\n\n\n<hr>$backtrace\n\n";
        // Email the error details, in case SEND_ERROR_MAIL is true
        if (SEND_ERROR_MAIL == true)
        error_log($error_message, 1, ADMIN_ERROR_MAIL, "From: " .
        SENDMAIL_FROM . "\r\nTo: " . ADMIN_ERROR_MAIL);
        // Log the error, in case LOG_ERRORS is true
        if (LOG_ERRORS == true)
        error_log($error_message, 3, LOG_ERRORS_FILE);
        /* Warnings don't abort execution if IS_WARNING_FATAL is false
        E_NOTICE and E_USER_NOTICE errors don't abort execution */
        if (($errNo == E_WARNING && IS_WARNING_FATAL == false) ||
        ($errNo == E_NOTICE || $errNo == E_USER_NOTICE))
        // If the error is nonfatal ...
        {
            // Show message only if DEBUGGING is true
            
            if (DEBUGGING == true)
            echo '<div class="error_box"><pre>' . $error_message . '</pre></div>';
        }
        else
        // If error is fatal ...
        {
           
            // Show error message
            if (DEBUGGING == true)
            echo '<div class="error_box"><pre>'. $error_message . '</pre></div>';
            else
            echo SITE_GENERIC_ERROR_MESSAGE;
            // Stop processing the request
            exit();
        }
    }
    // Builds backtrace message
    public static function GetBacktrace($irrelevantFirstEntries)
    {
        $s = '';
        $MAXSTRLEN = 64;
        $trace_array = debug_backtrace();
        for ($i = 0; $i < $irrelevantFirstEntries; $i++)
        array_shift($trace_array);
        $tabs = sizeof($trace_array) - 1;
        foreach ($trace_array as $arr)
        {
            $tabs -= 1;
            if (isset ($arr['class']))
            $s .= $arr['class'] . '.';
            $args = array ();
            if (!empty ($arr['args']))
            foreach ($arr['args']as $v)
            {
                if (is_null($v))
                $args[] = 'null';
                elseif (is_array($v))
                $args[] = 'Array[' . sizeof($v) . ']';
                elseif (is_object($v))
                $args[] = 'Object: ' . get_class($v);
                elseif (is_bool($v))
                $args[] = $v ? 'true' : 'false';
                else
                {
                    $v = (string)@$v;
                    $str = htmlspecialchars(substr($v, 0, $MAXSTRLEN));
                    if (strlen($v) > $MAXSTRLEN)
                    $str .= '...';
                    $args[] = '"' . $str . '"';
                }
            }
            $s .= $arr['function'] . '(' . implode(', ', $args) . ')';
            $line = (isset ($arr['line']) ? $arr['line']: 'unknown');
            $file = (isset ($arr['file']) ? $arr['file']: 'unknown');
            $s .= sprintf('\n\n<br> # line %4d\n<br> file: %s', $line, $file);
            $s .= "\n\n<hr>";
        }
        return $s;
    }
    
}

?>