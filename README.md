# PHP Modulen
Ända sedan 2002, när vi gick över ifrån PHP och började utveckla i Java och Javascript i Sitevision, så har vi känt att något saknats. Därför känns det som att SiteVision äntligen kommer ikapp utvecklingen nu när man kommer kunna göra utvecklingen i PHP istället för allt det här nya och effektiva. Ett stort steg frammåt! Äntligen!

Därför lanserar Limepark den 1 april 2019 PHP-modulen Beta som en lösning för att kunna köra PHP-kod i SiteVision.

## Installation
Gå in under Releases och hämta senaste versionen som zip-fil. Följ sedan Sitevisions guide hur du installerar en webapp.

## Beta
Då webappen släpps som en Beta så är den inte heller signerad med ett certifikat. För att kunna köra webappen behöver du en server med en utvecklarlicens.

I dagsläget ligger dessutom en begränsning som gör att webappen enbart körs ifall användaren som försöker se innehållet har skrivrättigheter på sidan: `permissionUtil.hasWritePermission()`.

**OBS!** Denna modul är _inte_ redo att köras i produktion utan bör endast testas i din lokala Sitevision-instans.

## Status
- En begränsad del av SiteVisions publika API har implementerats i modulen.
- En begränsad del av PHPs standardbibliotek är implementerat.
