# ImageLinkRenderer

```php
// Get an instance of ImageLinkRenderer
$imageLinkRenderer = new ImageLinkRenderer();
```


## Methods
This class has the following methods.


### ImageRenderer getImageRenderer ()
Returns the ImageRenderer instance used by this image link renderer to control (linked) image behaviour.

```php
 $result = $imageLinkRenderer->getImageRenderer();
```


### LinkRenderer getLinkRenderer ()
Returns the LinkRenderer instance used by this image link renderer to control linking behaviour.

```php
 $result = $imageLinkRenderer->getLinkRenderer();
```


### string render ()
Builds a html link based on current state of the link renderer and the image render.

```php
 $result = $imageLinkRenderer->render();
```

