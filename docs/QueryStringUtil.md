# QueryStringUtil

```php
// Get an instance of QueryStringUtil
$queryStringUtil = new QueryStringUtil();
```


## Methods
This class has the following methods.


### string getDateAsString (java.util.date aDate)
Returns a date formatted according to the Solr date string representation.

```php
$result = $queryStringUtil->getDateAsString(aDate);
```


### string getFieldQuery (string aFieldName, string aValueExpression)
Returns a field query that is properly grouped.

```php
$result = $queryStringUtil->getFieldQuery(aFieldName, aValueExpression);
```


### string removeQuerySyntaxChars (string aQueryString)
Removes query syntax characters from a query string and trims the result.

```php
$result = $queryStringUtil->removeQuerySyntaxChars(aQueryString);
```


### string splitCollectionToQueryParts (mixed aStringsToSplit, string aSplitExpression)
Transforms multiple strings with delimiters to a string that could be used in a field-grouped query expression.

```php
$result = $queryStringUtil->splitCollectionToQueryParts(aStringsToSplit, aSplitExpression);
```


### string splitToQueryParts (string aStringToSplit, string aSplitExpression)
Transforms a string with delimiters to a string that could be used in a field-grouped query expression.

```php
$result = $queryStringUtil->splitToQueryParts(aStringToSplit, aSplitExpression);
```

