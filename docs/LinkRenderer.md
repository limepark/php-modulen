# LinkRenderer

```php
// Get an instance of LinkRenderer
$linkRenderer = new LinkRenderer();
```


## Methods
This class has the following methods.


### void addDataAttribute (string aName, string aValue)
Adds an HTML5 data-* attribute to the link element.

```php
$result = $linkRenderer->addDataAttribute(aName, aValue);
```


### void addTargetParameter (string key, string value)
Adds target parameters (key=value) to the link target (href attribute on the a element).

```php
$result = $linkRenderer->addTargetParameter(key, value);
```


### void clearAccessKey ()
Removes the accesskey, i.e. executes setAccessKey(null)

```php
$result = $linkRenderer->clearAccessKey();
```


### void clearAllOptional ()
Removes all optional settings.

```php
$result = $linkRenderer->clearAllOptional();
```


### void clearDataAttributes ()
Removes all existing data attributes

```php
$result = $linkRenderer->clearDataAttributes();
```


### void clearId ()
Removes the id value, i.e executes setId(null)

```php
$result = $linkRenderer->clearId();
```


### void clearOnclick ()
Removes the onclick value, i.e executes setOnclick(null)

```php
$result = $linkRenderer->clearOnclick();
```


### void clearOpenNewWindow ()
Utility method for executing setOpenNewWindow(false)

```php
$result = $linkRenderer->clearOpenNewWindow();
```


### void clearRel ()
Removes the rel value, i.e executes setRel(null)

```php
$result = $linkRenderer->clearRel();
```


### void clearStyle ()
Removes the style, i.e executes setStyle(null)

```php
$result = $linkRenderer->clearStyle();
```


### void clearTargetParameters ()
Removes all existing target parameters

```php
$result = $linkRenderer->clearTargetParameters();
```


### void clearUseAutoTitle ()
Utility method for executing setUseAutoTitle(false)

```php
$result = $linkRenderer->clearUseAutoTitle();
```


### void clearUseCrossSiteTargetChecking ()
Utility method for executing seUseCrossSiteTargetChecking(false)

```php
$result = $linkRenderer->clearUseCrossSiteTargetChecking();
```


### void clearUseEncoding ()
Utility method for executing setUseEncoding(false)

```php
$result = $linkRenderer->clearUseEncoding();
```


### void clearUseLinkDecorationSettings ()
Utility method for executing setUseLinkDecorationSettings(false)

```php
$result = $linkRenderer->clearUseLinkDecorationSettings();
```


### void clearUseParameterEncoding ()
Utility method for executing setUseParameterEncoding(false)

```php
$result = $linkRenderer->clearUseParameterEncoding();
```


### void clearUseResourceDecorationSettings ()
Utility method for executing setUseResourceDecorationSettings(false)

```php
$result = $linkRenderer->clearUseResourceDecorationSettings();
```


### void forceOpenNewWindow ()
Utility method for executing setOpenNewWindow(true)

```php
$result = $linkRenderer->forceOpenNewWindow();
```


### void forceUseAutoTitle ()
Utility method for executing setUseAutoTitle(true)

```php
$result = $linkRenderer->forceUseAutoTitle();
```


### void forceUseCrossSiteTargetChecking ()
Utility method for executing setUseCrossSiteTargetChecking(true)

```php
$result = $linkRenderer->forceUseCrossSiteTargetChecking();
```


### void forceUseEncoding ()
Utility method for executing setUseEncoding(true)

```php
$result = $linkRenderer->forceUseEncoding();
```


### void forceUseLinkDecorationSettings ()
Utility method for executing setUseLinkDecorationSettings(true)

```php
$result = $linkRenderer->forceUseLinkDecorationSettings();
```


### void forceUseParameterEncoding ()
Utility method for executing setUseParameterEncoding(true)

```php
$result = $linkRenderer->forceUseParameterEncoding();
```


### void forceUseResourceDecorationSettings ()
Utility method for executing setUseResourceDecorationSettings(true)

```php
$result = $linkRenderer->forceUseResourceDecorationSettings();
```


### boolean isRenderableTarget (Node aNode)
Checks if a Node is a renderable target or not (node type accepted).

```php
$result = $linkRenderer->isRenderableTarget(aNode);
```


### boolean isValidTarget (Node aNode)
Checks if a Node is a valid target or not (node type accepted and target is valid).

```php
$result = $linkRenderer->isValidTarget(aNode);
```


### void removeTitle ()
Removes the title, i.e. executes setTitle(null)

```php
$result = $linkRenderer->removeTitle();
```


### string render ()
Builds a html link based on current state.

```php
$result = $linkRenderer->render();
```


### void setAccessKey (string anAccessKey)
Sets what access key the link should have (accesskey attribute on the a element)
 The accesskey attribute is optional when the result is rendered.

```php
$result = $linkRenderer->setAccessKey(anAccessKey);
```


### void setFont (Node aFontNode)
Sets the class name the link should use (class attribute on an a element) based on a given font node.

```php
$result = $linkRenderer->setFont(aFontNode);
```


### void setFontClass (string aFontClass)
Sets the class name the link should use (class attribute on the a element).

```php
$result = $linkRenderer->setFontClass(aFontClass);
```


### void setId (string anId)
Sets the id value (id attribute on the a element), most likely only needed if some kind of javascript/ajax code needs to access the
 rendered link via its id.

```php
$result = $linkRenderer->setId(anId);
```


### void setOnclick (string anOnclick)
Sets the onclick value (onclick attribute and onkeypress attribute on the a element), typically some kind of Javascript
 The onclick attribute is optional when the result is rendered.

```php
$result = $linkRenderer->setOnclick(anOnclick);
```


### void setOpenNewWindow (boolean openNewWindow)
Should the link target be opened in a new window or not?

```php
$result = $linkRenderer->setOpenNewWindow(openNewWindow);
```


### void setRel (string aRel)
Sets the rel that should be used (rel attribute on the a element)
 The rel attribute is optional when the result is rendered.

```php
$result = $linkRenderer->setRel(aRel);
```


### void setStringTarget (string aTarget)
Sets what the link target is, i.e "what the link links to" (href attribute on the a element).

```php
$result = $linkRenderer->setStringTarget(aTarget);
```


### void setStyle (string aStyle)
Sets the css style the link should have (style attribute on the a element).

```php
$result = $linkRenderer->setStyle(aStyle);
```


### void setTarget (Node aTarget)
Sets what the link target is, i.e "what the link links to" (href attribute on the a element).

```php
$result = $linkRenderer->setTarget(aTarget);
```


### void setText (string aText)
Sets the text that the link should display, i.e.

```php
$result = $linkRenderer->setText(aText);
```


### void setTitle (string aTitle)
Sets the title the link should have (title attribute on the a element).

```php
$result = $linkRenderer->setTitle(aTitle);
```


### void setUseAutoTitle (boolean useAutoTitle)
Ensures title always will have a value.

```php
$result = $linkRenderer->setUseAutoTitle(useAutoTitle);
```


### void setUseCrossSiteTargetChecking (boolean useCrossSiteTargetChecking)
Should cross-site internal Node links be handled or not?

```php
$result = $linkRenderer->setUseCrossSiteTargetChecking(useCrossSiteTargetChecking);
```


### void setUseEncoding (boolean performEncoding)
Should text and attributes be properly encoded or not?

```php
$result = $linkRenderer->setUseEncoding(performEncoding);
```


### void setUseLinkDecorationSettings (boolean useLinkDecorationSettings)
Use icons for "external", "new window" and "new window, external" according to Site's settings or not.

```php
$result = $linkRenderer->setUseLinkDecorationSettings(useLinkDecorationSettings);
```


### void setUseParameterEncoding (boolean performParameterEncoding)
Should target parameters be URL encoded or not?

```php
$result = $linkRenderer->setUseParameterEncoding(performParameterEncoding);
```


### void setUseResourceDecorationSettings (boolean useResourceDecorationSettings)
Use icons/descriptions for known file types according to Site's settings or not.

```php
$result = $linkRenderer->setUseResourceDecorationSettings(useResourceDecorationSettings);
```


### void update (Node aTarget, string aFontClass, string aText, [string aTitle])
Updates current state.

```php
$result = $linkRenderer->update(aTarget, aFontClass, aText, aTitle);
```


### void updateClean (Node aTarget, string aFontClass, string aText, [string aTitle])
Updates current state and removes all optional attributes.

```php
$result = $linkRenderer->updateClean(aTarget, aFontClass, aText, aTitle);
```

