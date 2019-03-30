# PropertyUtil

```php
// Get an instance of PropertyUtil
$propertyUtil = new PropertyUtil();
```


## Methods
This class has the following methods.


### binary getBinary (Node aNode, string aPropertyName, [binary aDefaultValue])
Gets a Binary property from a node with a fallback value if the property doesn't exist.

```php
 $result = $propertyUtil->getBinary(aNode, aPropertyName, aDefaultValue);
```


### boolean getBoolean (Node aNode, string aPropertyName, [boolean aDefaultValue])
Gets a boolean property from a Node with a fallback value if the property doesn't exist or is incompatible with the boolean type.

```php
 $result = $propertyUtil->getBoolean(aNode, aPropertyName, aDefaultValue);
```


### double getDouble (Node aNode, string aPropertyName, [double aDefaultValue])
Gets a double property from a node with a fallback value if the property doesn't exist or is incompatible with the double type.

```php
 $result = $propertyUtil->getDouble(aNode, aPropertyName, aDefaultValue);
```


### Node getEnabledNode (Node aNode, string aEnablingPropertyName, string aNodePropertyName, [Node aDefaultValue])
Gets a Node property from a Node if an enabling property allows it, with a fallback Node value.

```php
 $result = $propertyUtil->getEnabledNode(aNode, aEnablingPropertyName, aNodePropertyName, aDefaultValue);
```


### string getEnabledString (Node aNode, string aEnablingPropertyName, string aStringPropertyName, [string aDefaultValue])
Gets a String property from a Node if an enabling boolean property allows it, with a fallback value.

```php
 $result = $propertyUtil->getEnabledString(aNode, aEnablingPropertyName, aStringPropertyName, aDefaultValue);
```


### string getEnabledStringEscaped (Node aNode, string aEnablingPropertyName, string aStringPropertyName, [string aDefaultValue])
Gets a String property from a Node if an enabling boolean property allows it, and returns it XML escaped with a fallback value.

```php
 $result = $propertyUtil->getEnabledStringEscaped(aNode, aEnablingPropertyName, aStringPropertyName, aDefaultValue);
```


### integer getInt (Node aNode, string aPropertyName, [integer aDefaultValue])
Gets an int property from a node with a fallback value if the property doesn't exist or is incompatible with the int type.

```php
 $result = $propertyUtil->getInt(aNode, aPropertyName, aDefaultValue);
```


### binary getNestedBinary (Node aNode, string aNodePropertyName, string aPropertyName, [binary aDefaultValue])
Gets a Binary property from a "nested" Node's property with a fallback value if the property doesn't exist.

```php
 $result = $propertyUtil->getNestedBinary(aNode, aNodePropertyName, aPropertyName, aDefaultValue);
```


### boolean getNestedBoolean (Node aNode, string aNodePropertyName, string aPropertyName, [boolean aDefaultValue])
Gets a boolean property from a "nested" Node's property with a fallback value if the property doesn't exist or is incompatible
 with the boolean type.

```php
 $result = $propertyUtil->getNestedBoolean(aNode, aNodePropertyName, aPropertyName, aDefaultValue);
```


### double getNestedDouble (Node aNode, string aNodePropertyName, string aPropertyName, [double aDefaultValue])
Gets a double property from a "nested" Node's property with a fallback value if the property doesn't exist or is incompatible
 with the double type.

```php
 $result = $propertyUtil->getNestedDouble(aNode, aNodePropertyName, aPropertyName, aDefaultValue);
```


### integer getNestedInt (Node aNode, string aNodePropertyName, string aPropertyName, [integer aDefaultValue])
Gets an int property from a "nested" Node's property with a fallback value if the property doesn't exist or is incompatible with the int type.

```php
 $result = $propertyUtil->getNestedInt(aNode, aNodePropertyName, aPropertyName, aDefaultValue);
```


### Node getNestedNode (Node aNode, string aNodePropertyName, string aPropertyName, [Node aDefaultValue])
Gets a Node property from a "nested" Node's property with a fallback value if the property doesn't exist.

```php
 $result = $propertyUtil->getNestedNode(aNode, aNodePropertyName, aPropertyName, aDefaultValue);
```


### string getNestedString (Node aNode, string aNodePropertyName, string aPropertyName, [string aDefaultValue])
Gets a String property from a "nested" Node's property with a fallback value if the property doesn't exist.

```php
 $result = $propertyUtil->getNestedString(aNode, aNodePropertyName, aPropertyName, aDefaultValue);
```


### string getNestedStringEscaped (Node aNode, string aNodePropertyName, string aPropertyName, [string aDefaultValue])
Gets a String property from a "nested" Node's property with a fallback value if the property doesn't exist, and returns it XML escaped.

```php
 $result = $propertyUtil->getNestedStringEscaped(aNode, aNodePropertyName, aPropertyName, aDefaultValue);
```


### array getNestedStrings (Node aNode, string aNodePropertyName, string aPropertyName, [mixed aDefaultValue])
Gets a List of property values from a "nested" Node's property with a fallback value if the property doesn't exist.

```php
 $result = $propertyUtil->getNestedStrings(aNode, aNodePropertyName, aPropertyName, aDefaultValue);
```


### array getNestedStringsEscaped (Node aNode, string aNodePropertyName, string aPropertyName, [mixed aDefaultValue])
Gets a List of property values from a "nested" Node's property with a fallback value if the property doesn't exist,
 and returns it XML escaped.

```php
 $result = $propertyUtil->getNestedStringsEscaped(aNode, aNodePropertyName, aPropertyName, aDefaultValue);
```


### Node getNode (Node aNode, string aPropertyName, [Node aDefaultValue])
Gets a Node property from a Node with a fallback value if the property doesn't exist.

```php
 $result = $propertyUtil->getNode(aNode, aPropertyName, aDefaultValue);
```


### string getString (Node aNode, string aPropertyName, [string aDefaultValue])
Gets a String property from a node with a fallback value if the property doesn't exist.

```php
 $result = $propertyUtil->getString(aNode, aPropertyName, aDefaultValue);
```


### string getStringEscaped (Node aNode, string aPropertyName, [string aDefaultValue])
Gets a String property from a Node, with a fallback value, and returns it XML escaped.

```php
 $result = $propertyUtil->getStringEscaped(aNode, aPropertyName, aDefaultValue);
```


### array getStrings (Node aNode, string aPropertyName, [mixed aDefaultValue])
Gets a List of property values from a Node with a fallback value if the property doesn't exist.

```php
 $result = $propertyUtil->getStrings(aNode, aPropertyName, aDefaultValue);
```


### array getStringsEscaped (Node aNode, string aPropertyName, [mixed aDefaultValue])
Gets a List of XML escaped property values from a Node with a fallback value if the property doesn't exist.

```php
 $result = $propertyUtil->getStringsEscaped(aNode, aPropertyName, aDefaultValue);
```

