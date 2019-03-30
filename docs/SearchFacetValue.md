# SearchFacetValue


## Methods
This class has the following methods.


### integer getCount ()
Returns the number of occurrences (number of expected hits when searching with this facet value).

```php
 $result = $searchFacetValue->getCount();
```


### string getFilterQueryParams ()
Returns the query parameters for this facet value.

```php
 $result = $searchFacetValue->getFilterQueryParams();
```


### string getFilterURL ()
Returns the relative URL for executing a query for this facet value.

```php
 $result = $searchFacetValue->getFilterURL();
```


### string getName ()
Returns the name of this facet value

```php
 $result = $searchFacetValue->getName();
```


### boolean isSelected ()
Returns whether or not this facet value is selected.

```php
 $result = $searchFacetValue->isSelected();
```

