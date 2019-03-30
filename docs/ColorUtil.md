# ColorUtil

```php
// Get an instance of ColorUtil
$colorUtil = new ColorUtil();
```


## Methods
This class has the following methods.


### Node getColorByHtmlHexValue (string aHexString, [Node aDefaultValue])
Gets the color with a given html hex value (i.e. a '#' followed by 6 characters [0-9,a-f,A-F]) with a fallback value if no color matches.

```php
 $result = $colorUtil->getColorByHtmlHexValue(aHexString, aDefaultValue);
```


### Node getColorByName (string aColorName, [Node aDefaultValue])
Gets the color with a given name with a fallback value if no color matches

```php
 $result = $colorUtil->getColorByName(aColorName, aDefaultValue);
```

