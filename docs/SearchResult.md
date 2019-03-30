# SearchResult


## Methods
This class has the following methods.


### integer getApproximateCount ()
Predicts the number of hits by disregarding expensive operations like node authorization etc.

```php
 $result = $searchResult->getApproximateCount();
```


### array getCustomSorts ()
Returns the custom sorts for this search result.

```php
 $result = $searchResult->getCustomSorts();
```


### string getDisplayQuery ()
The "human friendly" variant of the query to display in search results.

```php
 $result = $searchResult->getDisplayQuery();
```


### integer getEffectiveCount (integer aHitCountThreshold)
Returns the exact hit count or the approximate hit count, given a specified count threshold.

```php
 $result = $searchResult->getEffectiveCount(aHitCountThreshold);
```


### integer getExactCount ()
Accessor to the exact number of hits.

```php
 $result = $searchResult->getExactCount();
```


### array getFacetFields ()
Returns the facet fields for this search result.

```php
 $result = $searchResult->getFacetFields();
```


### SearchHitIterator getHits ()
Accessor to the lazy loaded Iterator containing the search hits.

```php
 $result = $searchResult->getHits();
```


### string getQuery ()
The search query that was used to create this search result.

```php
 $result = $searchResult->getQuery();
```


### SearchHighlighter getSearchHighlighter ()
Deprecated. 
since SiteVision 3.0

```php
 $result = $searchResult->getSearchHighlighter();
```


### integer getStatus ()
The current status of the search.

```php
 $result = $searchResult->getStatus();
```


### string getStatusMessage ()
Accessor to a string representation of the status code.

```php
 $result = $searchResult->getStatusMessage();
```


### array getSuggestions ()
Returns suggestions for this search result.

```php
 $result = $searchResult->getSuggestions();
```


### boolean hasHits ()
Whether the search result contains hits or not.

```php
 $result = $searchResult->hasHits();
```


### SearchHitIterator iterator ()
Convenience method for iterating search hits using the Java foreach loop construct.

```php
 $result = $searchResult->iterator();
```

