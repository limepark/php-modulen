# FileIconRenderer

```php
// Get an instance of FileIconRenderer
$fileIconRenderer = new FileIconRenderer();
```


## Methods
This class has the following methods.


### void clearDefaultIcon ()
Removes loaded default icon (does nothing if no default icon is loaded)

```php
$result = $fileIconRenderer->clearDefaultIcon();
```


### void clearFontClass ()
Removes the CSS class name(-s).

```php
$result = $fileIconRenderer->clearFontClass();
```


### void clearIcon ()
Removes loaded icon (does nothing if no icon is loaded)

```php
$result = $fileIconRenderer->clearIcon();
```


### void clearUseDescription ()
Utility method for executing setUseDescription(false), i.e.

```php
$result = $fileIconRenderer->clearUseDescription();
```


### void clearUseSmallIcons ()
Utility method for executing setUseSmallIcons(false), i.e.

```php
$result = $fileIconRenderer->clearUseSmallIcons();
```


### void forceUseDescription ()
Utility method for executing setUseDescription(true), i.e.

```php
$result = $fileIconRenderer->forceUseDescription();
```


### void forceUseSmallIcons ()
Utility method for executing setUseSmallIcons(true), i.e.

```php
$result = $fileIconRenderer->forceUseSmallIcons();
```


### boolean isDefaultIconLoaded ()
Whether or not a default icon is loaded.

```php
$result = $fileIconRenderer->isDefaultIconLoaded();
```


### boolean isIconLoaded ()
Whether or not an icon is loaded.

```php
$result = $fileIconRenderer->isIconLoaded();
```


### boolean loadDefaultIconByContentType (string aContentType)
Uses a content type to load the fallback icon that should be used when rendering if no icon is loaded.

```php
$result = $fileIconRenderer->loadDefaultIconByContentType(aContentType);
```


### boolean loadDefaultIconByFileExtension (string aFileExtension)
Uses a file extension to load the fallback icon that should be used when rendering if no icon is loaded.

```php
$result = $fileIconRenderer->loadDefaultIconByFileExtension(aFileExtension);
```


### boolean loadDefaultIconByURI (string aURI)
Uses a URI to load the fallback icon that should be used when rendering if no icon is loaded.

```php
$result = $fileIconRenderer->loadDefaultIconByURI(aURI);
```


### boolean loadIconByContentType (string aContentType)
Uses a content type to load the icon that should be rendered.

```php
$result = $fileIconRenderer->loadIconByContentType(aContentType);
```


### boolean loadIconByFileExtension (string aFileExtension)
Uses a URI to load the icon that should be rendered.

```php
$result = $fileIconRenderer->loadIconByFileExtension(aFileExtension);
```


### boolean loadIconByURI (string aURI)
Uses a URI to load the icon that should be rendered.

```php
$result = $fileIconRenderer->loadIconByURI(aURI);
```


### string render ()
Builds a html img element based on current state.

```php
$result = $fileIconRenderer->render();
```


### void setFontClass (string aFontClass)
Sets the CSS class name(-s) to use when rendering.

```php
$result = $fileIconRenderer->setFontClass(aFontClass);
```


### void setLocale (java.util.locale aLocale)
The locale to use when extracting the decription of file icons.

```php
$result = $fileIconRenderer->setLocale(aLocale);
```


### void setUseDescription (boolean aUseDescription)
If file icon descriptions should be used or not.

```php
$result = $fileIconRenderer->setUseDescription(aUseDescription);
```


### void setUseSmallIcons (boolean aUseSmallIcons)
Which type if file icons (small or large) that should be rendered.

```php
$result = $fileIconRenderer->setUseSmallIcons(aUseSmallIcons);
```

