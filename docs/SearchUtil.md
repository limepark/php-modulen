# SearchUtil

```php
// Get an instance of SearchUtil
$searchUtil = new SearchUtil();
```


## Methods
This class has the following methods.


### SearchResult search (string aQuery, [string aFieldName], mixed sortFields, integer aStartAtHit, integer aMaxHitsToReturn)
Searches the default index using the single-field ("standard") parser with a specified default field.

```php
$result = $searchUtil->search(aQuery, aFieldName, sortFields, aStartAtHit, aMaxHitsToReturn);
```

