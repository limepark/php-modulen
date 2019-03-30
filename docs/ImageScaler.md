# ImageScaler


## Methods
This class has the following methods.


### integer getMaxHeight ()
Returns max height in pixels for images scaled with instances of this interface.

```php
$result = $imageScaler->getMaxHeight();
```


### integer getMaxWidth ()
Returns max width in pixels for images scaled with instances of this interface.

```php
$result = $imageScaler->getMaxWidth();
```


### Node getScaledImage (Node aImageNode)
Creates a scaled image using the width and height of this scaler.

```php
$result = $imageScaler->getScaledImage(aImageNode);
```

