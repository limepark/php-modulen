# SearchFactory

```php
// Get an instance of SearchFactory
$searchFactory = new SearchFactory();
```


## Methods
This class has the following methods.


### IndexingUtil getIndexingUtil ()
Gets an IndexingUtil instance.

```php
 $result = $searchFactory->getIndexingUtil();
```


### IndexUtil getIndexUtil ()
Gets an IndexUtil instance.

```php
 $result = $searchFactory->getIndexUtil();
```


### QueryStringUtil getQueryStringUtil ()
Gets a QueryStringUtil instance.

```php
 $result = $searchFactory->getQueryStringUtil();
```


### searchsortfield getSearchSortField (string aField, boolean isDescending)
Convenience method to get a SearchSortField instance.

```php
 $result = $searchFactory->getSearchSortField(aField, isDescending);
```


### SearchUtil getSearchUtil ()
Convenience method to get a SearchUtil instance.

```php
 $result = $searchFactory->getSearchUtil();
```

