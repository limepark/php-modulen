# LogUtil

```php
// Get an instance of LogUtil
$logUtil = new LogUtil();
```


## Methods
This class has the following methods.


### void debug (string aMessage, [throwable aThrowable])
Logs a debug message to the SiteVision server log.

```php
$logUtil->debug(aMessage, aThrowable);
```


### void error (string aMessage, [throwable aThrowable])
Logs an error message to the SiteVision server log.

```php
$logUtil->error(aMessage, aThrowable);
```


### void info (string aMessage, [throwable aThrowable])
Logs an info message to the SiteVision server log.

```php
$logUtil->info(aMessage, aThrowable);
```


### boolean isDebugEnabled ()
Checks if debug logging is enabled.

```php
$result = $logUtil->isDebugEnabled();
```


### boolean isErrorEnabled ()
Checks if error logging is enabled.

```php
$result = $logUtil->isErrorEnabled();
```


### boolean isInfoEnabled ()
Checks if info logging is enabled.

```php
$result = $logUtil->isInfoEnabled();
```


### boolean isTraceEnabled ()
Checks if trace logging is enabled.

```php
$result = $logUtil->isTraceEnabled();
```


### boolean isWarnEnabled ()
Checks if warn logging is enabled.

```php
$result = $logUtil->isWarnEnabled();
```


### void trace (string aMessage, [throwable aThrowable])
Logs a trace message to the SiteVision server log.

```php
$logUtil->trace(aMessage, aThrowable);
```


### void warn (string aMessage, [throwable aThrowable])
Logs a warn message to the SiteVision server log.

```php
$logUtil->warn(aMessage, aThrowable);
```

