# SearchFieldUtil


## Methods
This class has the following methods.


### Calendar dateFieldToCalendar (string aDateFieldValue)
Deprecated. Returns the Calendar for a string field that contains a date value generated via Lucene's DateTools class.

```php
$result = $searchFieldUtil->dateFieldToCalendar(aDateFieldValue);
```


### double doubleFieldToDouble (string aDoubleFieldValue)
Deprecated. Returns the Double for a string field that contains a double value generated to be a sortable search value.

```php
$result = $searchFieldUtil->doubleFieldToDouble(aDoubleFieldValue);
```


### integer intFieldToInt (string anIntFieldValue)
Deprecated. Returns the Integer for a string field that contains a integer value generated via Lucene's NumberTools (i.e. long) class.

```php
$result = $searchFieldUtil->intFieldToInt(anIntFieldValue);
```


### long longFieldToLong (string aLongFieldValue)
Deprecated. Returns the Long for a string field that contains a long value generated via Lucene's NumberTools class.

```php
$result = $searchFieldUtil->longFieldToLong(aLongFieldValue);
```

