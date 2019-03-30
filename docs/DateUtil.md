# DateUtil

```php
// Get an instance of DateUtil
$dateUtil = new DateUtil();
```


## Methods
This class has the following methods.


### string getCalendarAsISO8601String (java.util.calendar aCalendar)
Formats a calendar according to the ISO8601 specification.

```php
$result = $dateUtil->getCalendarAsISO8601String(aCalendar);
```


### string getCalendarAsString (string aFormatPattern, java.util.calendar aCalendar)
Formats the date of a calendar according to a SimpleDateFormat pattern.

```php
$result = $dateUtil->getCalendarAsString(aFormatPattern, aCalendar);
```


### string getDateAsISO8601String (java.util.date aDate)
Formats a date according to the ISO8601 specification.

```php
$result = $dateUtil->getDateAsISO8601String(aDate);
```


### string getDateAsString (string aFormatPattern, java.util.date aDate)
Formats a date according to a SimpleDateFormat pattern.

```php
$result = $dateUtil->getDateAsString(aFormatPattern, aDate);
```


### string getEditorFormatPattern (java.util.locale aLocale)
Gets the date format pattern used in the SiteVision editor for a specific Locale.

```php
$result = $dateUtil->getEditorFormatPattern(aLocale);
```

