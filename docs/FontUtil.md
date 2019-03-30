# FontUtil

```php
// Get an instance of FontUtil
$fontUtil = new FontUtil();
```


## Methods
This class has the following methods.


### Node getFontByClassName (string aClassName, [Node aDefaultValue])
Gets the font with a given class name with a fallback value if no font matches

```php
 $result = $fontUtil->getFontByClassName(aClassName, aDefaultValue);
```


### Node getFontByName (string aFontName, [Node aDefaultValue])
Gets the font with a given font name with a fallback value if no font matches

```php
 $result = $fontUtil->getFontByName(aFontName, aDefaultValue);
```

