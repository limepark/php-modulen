# SearchHit


## Methods
This class has the following methods.


### boolean fieldContains (string aFieldName, string aValue)
Checks if the value(-s) for a specified field contains a specific value.

```php
 $result = $searchHit->fieldContains(aFieldName, aValue);
```


### boolean fieldEquals (string aFieldName, string aValue)
Checks if the value(-s) for a specified field equals a specific value.

```php
 $result = $searchHit->fieldEquals(aFieldName, aValue);
```


### boolean fieldEqualsIgnoreCase (string aFieldName, string aValue)
Checks if the value(-s) for a specified field equals a specific value, case-insensitively.

```php
 $result = $searchHit->fieldEqualsIgnoreCase(aFieldName, aValue);
```


### boolean fieldMatches (string aFieldName, string aRegularExpression)
Checks if the value(-s) for a specified field matches a specified regular expression.

```php
 $result = $searchHit->fieldMatches(aFieldName, aRegularExpression);
```


### boolean getBooleanField (string aFieldName)
The indexed content as Boolean for a specified field.

```php
 $result = $searchHit->getBooleanField(aFieldName);
```


### array getBooleanFields (string aFieldName)
The indexed contents as a list of Boolean values for a specified field.

```php
 $result = $searchHit->getBooleanFields(aFieldName);
```


### string getClickTrackingCallback ()
Returns a jQuery expression with a token that enables tracking of search hit clicks.

```php
 $result = $searchHit->getClickTrackingCallback();
```


### array getDateFields (string aFieldName)
The indexed contents as a list of Date values for a specified field.

```php
 $result = $searchHit->getDateFields(aFieldName);
```


### string getField (string aFieldName, [string aDefaultValue])
The indexed content as string for a specified field, or a default value if no such field exist.

```php
 $result = $searchHit->getField(aFieldName, aDefaultValue);
```


### string getFieldEscaped (string aFieldName, [string aDefaultValue])
The indexed content as XML escaped string for a specified field, or a default value if no such field exist.

```php
 $result = $searchHit->getFieldEscaped(aFieldName, aDefaultValue);
```


### array getFieldNames ()
The names of all fields available in this search hit.

```php
 $result = $searchHit->getFieldNames();
```


### array getFields (string aFieldName)
The indexed content as a list of strings for a specified field.

```php
 $result = $searchHit->getFields(aFieldName);
```


### array getFieldsEscaped (string aFieldName)
The indexed content as a list of XML escaped strings for a specified field.

```php
 $result = $searchHit->getFieldsEscaped(aFieldName);
```


### array getFieldsTruncated (string aFieldName, integer maxContentLength, [boolean useLenientTruncation])
The indexed content as a list of truncated (lenient or not) strings for a specified field.

```php
 $result = $searchHit->getFieldsTruncated(aFieldName, maxContentLength, useLenientTruncation);
```


### string getFieldTruncated (string aFieldName, integer maxContentLength)
The indexed content as string for a specified field, truncated to a lenient max size.

```php
 $result = $searchHit->getFieldTruncated(aFieldName, maxContentLength);
```


### float getFloatField (string aFieldName)
The indexed content as Float for a specified field.

```php
 $result = $searchHit->getFloatField(aFieldName);
```


### array getFloatFields (string aFieldName)
The indexed contents as a list of Float values for a specified field.

```php
 $result = $searchHit->getFloatFields(aFieldName);
```


### string getHighlightedField (string aFieldName, integer maxNonHighlightedLength)
The encoded and highlighted content of a highlighted field.

```php
 $result = $searchHit->getHighlightedField(aFieldName, maxNonHighlightedLength);
```


### array getHighlightedFields (string aFieldName, integer maxNonHighlightedLength)
The encoded and highlighted contents of a highlighted field.

```php
 $result = $searchHit->getHighlightedFields(aFieldName, maxNonHighlightedLength);
```


### long getLongField (string aFieldName)
The indexed content as Long for a specified field.

```php
 $result = $searchHit->getLongField(aFieldName);
```


### array getLongFields (string aFieldName)
The indexed contents as a list of Long values for a specified field.

```php
 $result = $searchHit->getLongFields(aFieldName);
```


### Node getNode ()
Accesses the Node corresponding to a TYPE_INTERNAL hit.

```php
 $result = $searchHit->getNode();
```


### float getScore ()
The relative search score of the hit.

```php
 $result = $searchHit->getScore();
```


### integer getType ()
The type of SearchHit object.

```php
 $result = $searchHit->getType();
```


### boolean isElevated ()
Whether or not the search hit was elevated in the query result.

```php
 $result = $searchHit->isElevated();
```

