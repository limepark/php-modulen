# MetadataDefinitionUtil

```php
// Get an instance of MetadataDefinitionUtil
$metadataDefinitionUtil = new MetadataDefinitionUtil();
```


## Methods
This class has the following methods.


### void addAlternative (Node aNode, string aDefinitionName, string aAlternativeName)
Add an alternative to a definition

```php
$metadataDefinitionUtil->addAlternative(aNode, aDefinitionName, aAlternativeName);
```


### Node getDefinition (Node aNode, string aDefinitionName, [Node aDefaultValue])
Gets a metadata definition as a Node from a Node with a fallback value if the definition does not exist.

```php
$result = $metadataDefinitionUtil->getDefinition(aNode, aDefinitionName, aDefaultValue);
```


### array getDefinitions (Node aNode)
Gets all metadata definitions available for the current user on a Node

```php
$result = $metadataDefinitionUtil->getDefinitions(aNode);
```

