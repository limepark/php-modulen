<?php
$portletContextUtil = new PortletContextUtil();
$propertyUtil       = new PropertyUtil();
$dateUtil           = new DateUtil();
$currentPage        = $portletContextUtil->getCurrentPage();

$publishedBy = $propertyUtil->getNestedString($currentPage, 'publishedBy', 'displayName');
$isPublished = $propertyUtil->getBoolean($currentPage, 'published');

if ($isPublished) {
  $publishDate = $propertyUtil->getCalendar($currentPage, 'publishDate');
  $publishDateString = $dateUtil->getCalendarAsString('yyyy-MM-dd', $publishDate);
  echo "<p class=\"normal\">Sidan publicerades $publishDateString av $publishedBy.</p>";
} else {
  $creationDate = $propertyUtil->getCalendar($currentPage, 'creationDate');
  $creationDateString = $dateUtil->getCalendarAsString('yyyy-MM-dd', $creationDate);
  echo "<p class=\"normal\">Sidan skapades $$creationDateString av $publishedBy.</p>";
}
?>