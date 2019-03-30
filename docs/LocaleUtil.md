# LocaleUtil

```php
// Get an instance of LocaleUtil
$localeUtil = new LocaleUtil();
```


## Methods
This class has the following methods.


### array getAvailableLocales ()
Gets an immutable list of all available Locales (installed Java Locales and custom ones added by SiteVision).

```php
$result = $localeUtil->getAvailableLocales();
```


### string getLanguageTag (java.util.locale aLocale)
Returns the IETF BCP 47 language tag value for a Locale.

```php
$result = $localeUtil->getLanguageTag(aLocale);
```


### string getLocalizedLanguageName (java.util.locale aLocale, java.util.locale aDisplayLocale)
Gets the localized language name for a specified Locale.

```php
$result = $localeUtil->getLocalizedLanguageName(aLocale, aDisplayLocale);
```


### string getLocalizedLanguageNameByString (string aLocaleString, java.util.locale aDisplayLocale)
Gets the localized language name for a Locale that is resolved via a specified locale string.

```php
$result = $localeUtil->getLocalizedLanguageNameByString(aLocaleString, aDisplayLocale);
```


### string getNativeLanguageName (java.util.locale aLocale)
Gets the native language name for a specified Locale.

```php
$result = $localeUtil->getNativeLanguageName(aLocale);
```


### string getNativeLanguageNameByString (string aLocaleString)
Gets the native language name for a Locale that is resolved via a specified locale string.

```php
$result = $localeUtil->getNativeLanguageNameByString(aLocaleString);
```


### boolean isRTL (java.util.locale aLocale)
Checks if a locale has writing direction Right-To-Left (RTL).

```php
$result = $localeUtil->isRTL(aLocale);
```

