# NodeFilterUtil

```php
// Get an instance of NodeFilterUtil
$nodeFilterUtil = new NodeFilterUtil();
```


## Methods
This class has the following methods.


### Filter getAfterCalendarPropertyFilter (string aPropertyName, Calendar aAfterThresholdValue)
Gets a filter that matches by an after value for a specified Calendar property.

```php
$result = $nodeFilterUtil->getAfterCalendarPropertyFilter(aPropertyName, aAfterThresholdValue);
```


### Filter getAfterNestedCalendarPropertyFilter (string aNodePropertyName, string aPropertyName, Calendar aAfterThresholdValue)
Gets a filter that matches by an after value of a nested node's specified Calendar property.

```php
$result = $nodeFilterUtil->getAfterNestedCalendarPropertyFilter(aNodePropertyName, aPropertyName, aAfterThresholdValue);
```


### Filter getAlwaysAcceptFilter ()
Gets a filter that always matches.

```php
$result = $nodeFilterUtil->getAlwaysAcceptFilter();
```


### Filter getBeforeCalendarPropertyFilter (string aPropertyName, Calendar aBeforeThresholdValue)
Gets a filter that matches by a before value for a specified Calendar property.

```php
$result = $nodeFilterUtil->getBeforeCalendarPropertyFilter(aPropertyName, aBeforeThresholdValue);
```


### Filter getBeforeNestedCalendarPropertyFilter (string aNodePropertyName, string aPropertyName, Calendar aBeforeThresholdValue)
Gets a filter that matches by a before value of a nested node's specified Calendar property.

```php
$result = $nodeFilterUtil->getBeforeNestedCalendarPropertyFilter(aNodePropertyName, aPropertyName, aBeforeThresholdValue);
```


### Filter getBooleanPropertyFilter (string aPropertyName, boolean aMatchValue)
Gets a filter that matches by a specified boolean property.

```php
$result = $nodeFilterUtil->getBooleanPropertyFilter(aPropertyName, aMatchValue);
```


### Filter getCalendarPropertyFilter (string aPropertyName, Calendar aMatchValue)
Gets a filter that matches by a specified Calendar property.

```php
$result = $nodeFilterUtil->getCalendarPropertyFilter(aPropertyName, aMatchValue);
```


### Filter getContainsStringMultiPropertyFilter (string aPropertyName, string aContainsValue)
Gets a filter that matches by the value-contains of a specified multi-valued string property.

```php
$result = $nodeFilterUtil->getContainsStringMultiPropertyFilter(aPropertyName, aContainsValue);
```


### Filter getContainsStringPropertyFilter (string aPropertyName, string aContainsValue)
Gets a filter that matches by the value-contains of a specified string property.

```php
$result = $nodeFilterUtil->getContainsStringPropertyFilter(aPropertyName, aContainsValue);
```


### Filter getDoublePropertyFilter (string aPropertyName, double aMatchValue)
Gets a filter that matches by a specified double property.

```php
$result = $nodeFilterUtil->getDoublePropertyFilter(aPropertyName, aMatchValue);
```


### Filter getEndsWithStringPropertyFilter (string aPropertyName, string aEndsWithValue)
Gets a filter that matches by the value-ends-with of a specified string property.

```php
$result = $nodeFilterUtil->getEndsWithStringPropertyFilter(aPropertyName, aEndsWithValue);
```


### map getFilteredKeyMap (mixed aNodeKeyMap, Filter aNodeFilter)
Applies a node filter to a Map with Node keys and gets the result.

```php
$result = $nodeFilterUtil->getFilteredKeyMap(aNodeKeyMap, aNodeFilter);
```


### array getFilteredList (mixed aNodeList, Filter aNodeFilter)
Applies a node filter to a list and gets the result.

```php
$result = $nodeFilterUtil->getFilteredList(aNodeList, aNodeFilter);
```


### map getFilteredValueMap (mixed aNodeValueMap, Filter aNodeFilter)
Applies a node filter to a Map with Node values and gets the result.

```php
$result = $nodeFilterUtil->getFilteredValueMap(aNodeValueMap, aNodeFilter);
```


### Filter getHasPropertyFilter (string aPropertyName)
Gets a filter that matches by the existence of a specified property.

```php
$result = $nodeFilterUtil->getHasPropertyFilter(aPropertyName);
```


### Filter getIdentifierFilter (string aIdentifier)
Gets a filter that matches by a specified node identifier.

```php
$result = $nodeFilterUtil->getIdentifierFilter(aIdentifier);
```


### Filter getIdentifierPrefixFilter (string aIdentifierPrefix)
Gets a filter that matches by a specified node identifier prefix.

```php
$result = $nodeFilterUtil->getIdentifierPrefixFilter(aIdentifierPrefix);
```


### Filter getIdentifierSuffixFilter (string aIdentifierSuffix)
Gets a filter that matches by a specified node identifier suffix.

```php
$result = $nodeFilterUtil->getIdentifierSuffixFilter(aIdentifierSuffix);
```


### Filter getIgnoreCaseStringPropertyFilter (string aPropertyName, string aCaseInsensitiveValue)
Gets a filter that matches case-insensitive by a specified string property.

```php
$result = $nodeFilterUtil->getIgnoreCaseStringPropertyFilter(aPropertyName, aCaseInsensitiveValue);
```


### Filter getIntPropertyFilter (string aPropertyName, integer aMatchValue)
Gets a filter that matches by a specified int property.

```php
$result = $nodeFilterUtil->getIntPropertyFilter(aPropertyName, aMatchValue);
```


### Filter getInvertedFilter (Filter aFilter)
Gets a filter that inverts the result of another filter.

```php
$result = $nodeFilterUtil->getInvertedFilter(aFilter);
```


### Filter getMaxDoublePropertyFilter (string aPropertyName, double aMaxValue)
Gets a filter that matches by the max value of a specified double property.

```php
$result = $nodeFilterUtil->getMaxDoublePropertyFilter(aPropertyName, aMaxValue);
```


### Filter getMaxIntPropertyFilter (string aPropertyName, integer aMaxValue)
Gets a filter that matches by the max value of a specified int property.

```php
$result = $nodeFilterUtil->getMaxIntPropertyFilter(aPropertyName, aMaxValue);
```


### Filter getMaxNestedIntPropertyFilter (string aNodePropertyName, string aPropertyName, integer aMaxValue)
Gets a filter that matches by a nested node's max value of a specified int property.

```php
$result = $nodeFilterUtil->getMaxNestedIntPropertyFilter(aNodePropertyName, aPropertyName, aMaxValue);
```


### Filter getMinDoublePropertyFilter (string aPropertyName, double aMinValue)
Gets a filter that matches by the min value of a specified double property.

```php
$result = $nodeFilterUtil->getMinDoublePropertyFilter(aPropertyName, aMinValue);
```


### Filter getMinIntPropertyFilter (string aPropertyName, integer aMinValue)
Gets a filter that matches by the min value of a specified int property.

```php
$result = $nodeFilterUtil->getMinIntPropertyFilter(aPropertyName, aMinValue);
```


### Filter getMinNestedIntPropertyFilter (string aNodePropertyName, string aPropertyName, integer aMinValue)
Gets a filter that matches by a nested node's min value of a specified int property.

```php
$result = $nodeFilterUtil->getMinNestedIntPropertyFilter(aNodePropertyName, aPropertyName, aMinValue);
```


### Filter getNestedBooleanPropertyFilter (string aNodePropertyName, string aPropertyName, boolean aMatchValue)
Gets a filter that matches by a nested node's specified boolean property.

```php
$result = $nodeFilterUtil->getNestedBooleanPropertyFilter(aNodePropertyName, aPropertyName, aMatchValue);
```


### Filter getNestedCalendarPropertyFilter (string aNodePropertyName, string aPropertyName, Calendar aMatchValue)
Gets a filter that matches by a nested node's specified Calendar property.

```php
$result = $nodeFilterUtil->getNestedCalendarPropertyFilter(aNodePropertyName, aPropertyName, aMatchValue);
```


### Filter getNestedDoublePropertyFilter (string aNodePropertyName, string aPropertyName, double aMatchValue)
Gets a filter that matches by a nested node's specified double property.

```php
$result = $nodeFilterUtil->getNestedDoublePropertyFilter(aNodePropertyName, aPropertyName, aMatchValue);
```


### Filter getNestedIntPropertyFilter (string aNodePropertyName, string aPropertyName, integer aMatchValue)
Gets a filter that matches by a nested node's specified int property.

```php
$result = $nodeFilterUtil->getNestedIntPropertyFilter(aNodePropertyName, aPropertyName, aMatchValue);
```


### Filter getNeverAcceptFilter ()
Gets a filter that never matches.

```php
$result = $nodeFilterUtil->getNeverAcceptFilter();
```


### Filter getNonNullFilter ()
Gets a filter that matches non-null nodes.

```php
$result = $nodeFilterUtil->getNonNullFilter();
```


### Filter getNullFilter ()
Gets a filter that matches null nodes.

```php
$result = $nodeFilterUtil->getNullFilter();
```


### Filter getPatternStringMultiPropertyFilter (string aPropertyName, string aRegularExpression)
Gets a filter that matches by a regular expression of a specified multi-valued string property.

```php
$result = $nodeFilterUtil->getPatternStringMultiPropertyFilter(aPropertyName, aRegularExpression);
```


### Filter getPatternStringPropertyFilter (string aPropertyName, string aRegularExpression)
Gets a filter that matches by a regular expression of a specified string property.

```php
$result = $nodeFilterUtil->getPatternStringPropertyFilter(aPropertyName, aRegularExpression);
```


### Filter getPrimaryNodeTypeFilter (string aPrimaryNodeTypeName)
Gets a filter that matches by a specified primary node type.

```php
$result = $nodeFilterUtil->getPrimaryNodeTypeFilter(aPrimaryNodeTypeName);
```


### Filter getRangeCalendarPropertyFilter (string aPropertyName, Calendar aAfterThresholdValue, Calendar aBeforeThresholdValue)
Gets a filter that matches by the between range of a specified Calendar property.

```php
$result = $nodeFilterUtil->getRangeCalendarPropertyFilter(aPropertyName, aAfterThresholdValue, aBeforeThresholdValue);
```


### Filter getRangeDoublePropertyFilter (string aPropertyName, double aMinValue, double aMaxValue)
Gets a filter that matches by the range of a specified double property.

```php
$result = $nodeFilterUtil->getRangeDoublePropertyFilter(aPropertyName, aMinValue, aMaxValue);
```


### Filter getRangeIntPropertyFilter (string aPropertyName, integer aMinValue, integer aMaxValue)
Gets a filter that matches by the range of a specified int property.

```php
$result = $nodeFilterUtil->getRangeIntPropertyFilter(aPropertyName, aMinValue, aMaxValue);
```


### Filter getRangeNestedCalendarPropertyFilter (string aNodePropertyName, string aPropertyName, Calendar aAfterThresholdValue, Calendar aBeforeThresholdValue)
Gets a filter that matches by the between range of a nested node's specified Calendar property.

```php
$result = $nodeFilterUtil->getRangeNestedCalendarPropertyFilter(aNodePropertyName, aPropertyName, aAfterThresholdValue, aBeforeThresholdValue);
```


### Filter getRangeNestedIntPropertyFilter (string aNodePropertyName, string aPropertyName, integer aMinValue, integer aMaxValue)
Gets a filter that matches by a nested node's range of a specified int property.

```php
$result = $nodeFilterUtil->getRangeNestedIntPropertyFilter(aNodePropertyName, aPropertyName, aMinValue, aMaxValue);
```


### Filter getStartsWithStringPropertyFilter (string aPropertyName, string aStartsWithValue)
Gets a filter that matches by the value-starts-with of a specified string property.

```php
$result = $nodeFilterUtil->getStartsWithStringPropertyFilter(aPropertyName, aStartsWithValue);
```


### Filter getStringMultiPropertyFilter (string aPropertyName, string aMatchValue)
Gets a filter that matches by a specified multi-valued string property.

```php
$result = $nodeFilterUtil->getStringMultiPropertyFilter(aPropertyName, aMatchValue);
```


### Filter getStringPropertyFilter (string aPropertyName, string aMatchValue)
Gets a filter that matches by a specified string property.

```php
$result = $nodeFilterUtil->getStringPropertyFilter(aPropertyName, aMatchValue);
```


### filtersplit<node> split (mixed aNodeCollection, Filter aNodeFilter)
Gets the filtering result of a split operation for a collection of nodes with a node filter as divider.

```php
$result = $nodeFilterUtil->split(aNodeCollection, aNodeFilter);
```

