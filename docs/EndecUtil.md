# EndecUtil

```php
// Get an instance of EndecUtil
$endecUtil = new EndecUtil();
```


## Methods
This class has the following methods.


### string base64decode (string aString)
Decodes a base64 encoded string

```php
$result = $endecUtil->base64decode(aString);
```


### string base64encode (string aString)
Encodes a string using base64 encoding

```php
$result = $endecUtil->base64encode(aString);
```


### string br (string aString)
Converts line breaks to xhtml <br /> elements.

```php
$result = $endecUtil->br(aString);
```


### string decodeURL (string aURL)
Decodes a URL safe String into its original form using the default charset.

```php
$result = $endecUtil->decodeURL(aURL);
```


### string encodeURL (string aURL)
Encodes a String into its URL safe form using the default charset.

```php
$result = $endecUtil->encodeURL(aURL);
```


### string escapeIdentifier (string aPrefix, string anIdentifier)
Escapes/encodes an identifier.

```php
$result = $endecUtil->escapeIdentifier(aPrefix, anIdentifier);
```


### string escapeJcrName (string aJcrName)
Escapes/encodes a jcr name (property name or node name) that might contain illegal characters.

```php
$result = $endecUtil->escapeJcrName(aJcrName);
```


### string escapeXML (string aString)
Escapes/encodes the characters in a String using XML entities.

```php
$result = $endecUtil->escapeXML(aString);
```


### string getBaseSubstitute (string aString)
Replaces characters to their base subtitute.

```php
$result = $endecUtil->getBaseSubstitute(aString);
```


### string unEscapeHTML4 (string aString)
Unescapes/decodes a string containing HTML 4 entities to a string containing the actual Unicode characters corresponding to the entities.

```php
$result = $endecUtil->unEscapeHTML4(aString);
```


### string unEscapeIdentifier (string aPrefix, string anIdentifier)
Unescapes/decodes an escaped/encoded identifier.

```php
$result = $endecUtil->unEscapeIdentifier(aPrefix, anIdentifier);
```


### string unEscapeJcrName (string aJcrName)
Unescapes/decodes a jcr name (property name or node name) that might be escape/encoded.

```php
$result = $endecUtil->unEscapeJcrName(aJcrName);
```


### string unEscapeXML (string aString)
Unescapes/decodes a string containing basic XML entities to a string containing the actual Unicode characters corresponding to the entities.

```php
$result = $endecUtil->unEscapeXML(aString);
```

