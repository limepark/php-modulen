# InstanceCreatorUtil

```php
// Get an instance of InstanceCreatorUtil
$instanceCreatorUtil = new InstanceCreatorUtil();
```


## Methods
This class has the following methods.


### object getArgumentInstance (string aQualifiedClassName, TypedArgument aConstructorArgument)
Creates and returns an instance of a specified Java class using a single argument constructor.

```php
 $result = $instanceCreatorUtil->getArgumentInstance(aQualifiedClassName, aConstructorArgument);
```


### object getArgumentsInstance (string aQualifiedClassName, mixed aConstructorArguments)
Creates and returns an instance of a specified Java class using a multiple argument constructor.

```php
 $result = $instanceCreatorUtil->getArgumentsInstance(aQualifiedClassName, aConstructorArguments);
```


### ArraysInstance getArraysInstance ()
Gets a java.util.Arrays wrapper instance.

```php
 $result = $instanceCreatorUtil->getArraysInstance();
```


### TypedArgument getBooleanArgument (boolean aBoolean)
Gets a typed argument for a boolean primitive.

```php
 $result = $instanceCreatorUtil->getBooleanArgument(aBoolean);
```


### TypedArgument getByteArgument (byte aByte)
Gets a typed argument for a byte primitive.

```php
 $result = $instanceCreatorUtil->getByteArgument(aByte);
```


### TypedArgument getCharArgument (char aChar)
Gets a typed argument for a char primitive.

```php
 $result = $instanceCreatorUtil->getCharArgument(aChar);
```


### CollectionsInstance getCollectionsInstance ()
Gets a java.util.Collections wrapper instance.

```php
 $result = $instanceCreatorUtil->getCollectionsInstance();
```


### TypedArgument getCustomArgument (string aQualifiedClassName, object aValue)
Gets a typed argument that specifies a certain class/interface for an object.

```php
 $result = $instanceCreatorUtil->getCustomArgument(aQualifiedClassName, aValue);
```


### object getDefaultInstance (string aQualifiedClassName)
Creates and returns an instance of a specified Java class using the default constructor.

```php
 $result = $instanceCreatorUtil->getDefaultInstance(aQualifiedClassName);
```


### TypedArgument getDoubleArgument (double aDouble)
Gets a typed argument for a double primitive.

```php
 $result = $instanceCreatorUtil->getDoubleArgument(aDouble);
```


### TypedArgument getEnumArgument (string aQualifiedEnumClassName, object anEnum)
Gets a typed argument for an Enum value for a specified enum class.

```php
 $result = $instanceCreatorUtil->getEnumArgument(aQualifiedEnumClassName, anEnum);
```


### enum getEnumInstance (string aQualifiedEnumClassName, string anEnumName)
Gets an enum instance for a specified enum class.

```php
 $result = $instanceCreatorUtil->getEnumInstance(aQualifiedEnumClassName, anEnumName);
```


### TypedArgument getFloatArgument (float aFloat)
Gets a typed argument for a float primitive.

```php
 $result = $instanceCreatorUtil->getFloatArgument(aFloat);
```


### TypedArgument getIntArgument (integer anInt)
Gets a typed argument for a int primitive.

```php
 $result = $instanceCreatorUtil->getIntArgument(anInt);
```


### ListWrapper getListWrapper ()
Gets a ListWrapper instance.

```php
 $result = $instanceCreatorUtil->getListWrapper();
```


### TypedArgument getLongArgument (long aLong)
Gets a typed argument for a long primitive.

```php
 $result = $instanceCreatorUtil->getLongArgument(aLong);
```


### MathInstance getMathInstance ()
Gets a java.lang.Math wrapper instance.

```php
 $result = $instanceCreatorUtil->getMathInstance();
```


### TypedArgument getNullArgument (string aQualifiedClassName)
Gets a typed argument for a null value for a specified class/interface.

```php
 $result = $instanceCreatorUtil->getNullArgument(aQualifiedClassName);
```


### TypedArgument getObjectArgument (object aValue)
Gets a typed argument for an Object.

```php
 $result = $instanceCreatorUtil->getObjectArgument(aValue);
```


### TypedArgument getShortArgument (short aShort)
Gets a typed argument for a short primitive.

```php
 $result = $instanceCreatorUtil->getShortArgument(aShort);
```

