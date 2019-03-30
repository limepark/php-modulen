# ImageUtil

```php
// Get an instance of ImageUtil
$imageUtil = new ImageUtil();
```


## Methods
This class has the following methods.


### Node createImage (Node aParent, string aFileName, string anUri)
Adds an image to a sv:localImageRepository, sv:imageRepository, sv:personalImageRepository
    or a sv:folder residing as sub node to an image repository.

```php
 $result = $imageUtil->createImage(aParent, aFileName, anUri);
```


### void createImages (Node aParent, mixed aImages)
Adds several images to a sv:localImageRepository, sv:imageRepository, sv:personalImageRepository
    or a sv:folder residing as sub node to an image repository.

```php
$imageUtil->createImages(aParent, aImages);
```


### void updateBinaryContent (Node anImage, string anUri)
Updates the binary content of an existing image.

```php
$imageUtil->updateBinaryContent(anImage, anUri);
```

