# BuddyIconRenderer

```php
// Get an instance of BuddyIconRenderer
$buddyIconRenderer = new BuddyIconRenderer();
```


## Methods
This class has the following methods.


### void clearUseLinkBuddyIcon ()
Utility method for executing setLinkBuddyIcon(false)

```php
$buddyIconRenderer->clearUseLinkBuddyIcon();
```


### void forceUseLargeBuddyIconSize ()
Utility method for executing setBuddyIconSize(BuddyIconSize.LARGE)

```php
$buddyIconRenderer->forceUseLargeBuddyIconSize();
```


### void forceUseLinkBuddyIcon ()
Utility method for executing setLinkBuddyIcon(true)

```php
$buddyIconRenderer->forceUseLinkBuddyIcon();
```


### void forceUseSmallBuddyIconSize ()
Utility method for executing setBuddyIconSize(BuddyIconSize.SMALL)

```php
$buddyIconRenderer->forceUseSmallBuddyIconSize();
```


### boolean isLoaded ()
Whether or not this renderer contains a node that can be rendered.

```php
$result = $buddyIconRenderer->isLoaded();
```


### boolean isRenderable (Node aNode)
Helper method to check if a certain node can be rendered as a buddy icon.

```php
$result = $buddyIconRenderer->isRenderable(aNode);
```


### string render ()
Builds a html string based on current state.

```php
$result = $buddyIconRenderer->render();
```


### void setBuddyIconSize (buddyiconrenderer.buddyiconsize aBuddyIconSize)
Sets the size for rendered buddy icons.

```php
$buddyIconRenderer->setBuddyIconSize(aBuddyIconSize);
```


### void setLinkBuddyIcon (boolean aLinkBuddyIcon)
Whether or not rendered buddy icons should be linked.

```php
$buddyIconRenderer->setLinkBuddyIcon(aLinkBuddyIcon);
```


### void update (Node aBuddyIconNode)
Updates the renderer with a new buddy icon supported node.

```php
$buddyIconRenderer->update(aBuddyIconNode);
```

