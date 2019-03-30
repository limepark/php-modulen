# UserFieldRenderer

```php
// Get an instance of UserFieldRenderer
$userFieldRenderer = new UserFieldRenderer();
```


## Methods
This class has the following methods.


### string getPlainUserFieldValueAsHtml (string aPlainUserFieldValue)
Returns a plain text user field value as html.

```php
 $result = $userFieldRenderer->getPlainUserFieldValueAsHtml(aPlainUserFieldValue);
```


### boolean isLoaded ()
Whether or not this renderer contains a user identity.

```php
 $result = $userFieldRenderer->isLoaded();
```


### boolean isRenderable (Node aNode)
Helper method to check if a certain node can be rendered.

```php
 $result = $userFieldRenderer->isRenderable(aNode);
```


### boolean isValidFieldName (string aUserFieldName)
Helper method to check if a named user field is available.

```php
 $result = $userFieldRenderer->isValidFieldName(aUserFieldName);
```


### string render (string aUserFieldName)
Returns the value as html for a named user field for currently loaded user identity.

```php
 $result = $userFieldRenderer->render(aUserFieldName);
```


### string renderPlain (string aUserFieldName)
Returns the value as plain text for a named user field for currently loaded user identity.

```php
 $result = $userFieldRenderer->renderPlain(aUserFieldName);
```


### void update (Node aUserIdentity)
Updates the renderer with a new user identity node.

```php
$userFieldRenderer->update(aUserIdentity);
```

