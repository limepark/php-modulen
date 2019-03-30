# ImageRenderer

```php
// Get an instance of ImageRenderer
$imageRenderer = new ImageRenderer();
```


## Methods
This class has the following methods.


### void clearDescription ()
Removes the description, i.e. executes setDescription(null)

```php
$result = $imageRenderer->clearDescription();
```


### void clearHoverImage ()
Utility method for executing setHoverImage(null)

```php
$result = $imageRenderer->clearHoverImage();
```


### void clearImageScaler ()
Removes the image scaler, i.e. executes setImageScaler(null)

```php
$result = $imageRenderer->clearImageScaler();
```


### void clearSourceSetMode ()
Utility method for executing setSourceSetMode(SourceSetMode.OFF).

```php
$result = $imageRenderer->clearSourceSetMode();
```


### void clearStyle ()
Removes the style, i.e. executes setStyle(null)

```php
$result = $imageRenderer->clearStyle();
```


### void clearUseAutoDescription ()
Utility method for executing setUseAutoDescription(false)

```php
$result = $imageRenderer->clearUseAutoDescription();
```


### void clearUseAutoTitle ()
Utility method for executing setUseAutoTitle(false)

```php
$result = $imageRenderer->clearUseAutoTitle();
```


### void clearUseEncoding ()
Utility method for executing setUseEncoding(false)

```php
$result = $imageRenderer->clearUseEncoding();
```


### void clearUseImageScaler ()
Utility method for executing setUseImageScaler(false)

```php
$result = $imageRenderer->clearUseImageScaler();
```


### void clearUseTitleRendering ()
Utility method for executing setUseTitleRendering(false)

```php
$result = $imageRenderer->clearUseTitleRendering();
```


### void forceSourceSetMode ()
Utility method for executing setSourceSetMode(SourceSetMode.ON).

```php
$result = $imageRenderer->forceSourceSetMode();
```


### void forceUseAutoDescription ()
Utility method for executing setUseAutoDescription(true)

```php
$result = $imageRenderer->forceUseAutoDescription();
```


### void forceUseAutoTitle ()
Utility method for executing setUseAutoTitle(true)

```php
$result = $imageRenderer->forceUseAutoTitle();
```


### void forceUseEncoding ()
Utility method for executing setUseEncoding(true)

```php
$result = $imageRenderer->forceUseEncoding();
```


### void forceUseImageScaler ()
Utility method for executing setUseImageScaler(true)

```php
$result = $imageRenderer->forceUseImageScaler();
```


### void forceUseTitleRendering ()
Utility method for executing setUseTitleRendering(true)

```php
$result = $imageRenderer->forceUseTitleRendering();
```


### boolean isHoverImageLoaded ()
Whether or not a hover image is loaded.

```php
$result = $imageRenderer->isHoverImageLoaded();
```


### boolean isImageLoaded ()
Whether or not an image is loaded.

```php
$result = $imageRenderer->isImageLoaded();
```


### boolean isImageScalerLoaded ()
Whether or not an image scaler is loaded.

```php
$result = $imageRenderer->isImageScalerLoaded();
```


### string render ()
Builds a xhtml img element based on current state.

```php
$result = $imageRenderer->render();
```


### void resetSourceSetMode ()
Utility method for executing setSourceSetMode(SourceSetMode.AUTO).

```php
$result = $imageRenderer->resetSourceSetMode();
```


### void setDescription (string aDescription)
Sets the image description (alt attribute on the img element).

```php
$result = $imageRenderer->setDescription(aDescription);
```


### void setHoverImage (Node anImageNode)
Sets a hover image that will be activated on the onmouseover javascript event.

```php
$result = $imageRenderer->setHoverImage(anImageNode);
```


### void setImage (Node anImageNode)
Sets the image to be rendered.

```php
$result = $imageRenderer->setImage(anImageNode);
```


### void setImageScaler (ImageScaler anImageScaler)
Sets the image scaler that should be used by the renderer if useImageScaler is true.

```php
$result = $imageRenderer->setImageScaler(anImageScaler);
```


### void setSourceSetMode (sourcesetmode aSourceSetMode)
The srcset attribute rendering strategy.

```php
$result = $imageRenderer->setSourceSetMode(aSourceSetMode);
```


### void setStyle (string aStyle)
Sets the style (style attribute on the img element).

```php
$result = $imageRenderer->setStyle(aStyle);
```


### void setUseAutoDescription (boolean useAutoDescription)
A description fallback strategy that makes it possible to render a description value even if no description has been set.

```php
$result = $imageRenderer->setUseAutoDescription(useAutoDescription);
```


### void setUseAutoTitle (boolean useAutoTitle)
A title fallback strategy that makes it possible to render a title value even if no description is available.

```php
$result = $imageRenderer->setUseAutoTitle(useAutoTitle);
```


### void setUseEncoding (boolean performEncoding)
Sets whether or not descriptions should be encoded.

```php
$result = $imageRenderer->setUseEncoding(performEncoding);
```


### void setUseImageScaler (boolean useImageScaler)
Decides if an image scaler should be used or not.

```php
$result = $imageRenderer->setUseImageScaler(useImageScaler);
```


### void setUseTitleRendering (boolean useTitleRendering)
A title strategy that makes it possible to render a title attribute with the description as value.

```php
$result = $imageRenderer->setUseTitleRendering(useTitleRendering);
```


### void update (Node anImageNode, [string aDescription])
Updates the renderer with a new image and a new description.

```php
$result = $imageRenderer->update(anImageNode, aDescription);
```

