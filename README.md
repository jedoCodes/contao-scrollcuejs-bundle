<img src="https://raw.githubusercontent.com/jedoCodes/package-metadata/3728dc750472881a48aca6075efd7f4dc8af7356/meta/jedocodes/logo.svg" alt="Logo" width="250" height="auto">

[![Latest Stable Version](http://poser.pugx.org/jedocodes/contao-scrollcuejs-bundle/v)](https://packagist.org/packages/jedocodes/contao-scrollcuejs-bundle) [![Total Downloads](http://poser.pugx.org/jedocodes/contao-scrollcuejs-bundle/downloads)](https://packagist.org/packages/jedocodes/contao-scrollcuejs-bundle) [![Latest Unstable Version](http://poser.pugx.org/jedocodes/contao-scrollcuejs-bundle/v/unstable)](https://packagist.org/packages/jedocodes/contao-scrollcuejs-bundle) [![License](http://poser.pugx.org/jedocodes/contao-scrollcuejs-bundle/license)](https://packagist.org/packages/jedocodes/contao-scrollcuejs-bundle) [![PHP Version Require](http://poser.pugx.org/jedocodes/contao-scrollcuejs-bundle/require/php)](https://packagist.org/packages/jedocodes/contao-scrollcuejs-bundle)

# Contao scrollCue.js


Integrate scrollCue.js for a scroll animation of a Contao content element. 


## Install

1. Install via composer or use the [Contao Manager](https://docs.contao.org/books/manager/de/)

```
composer require jedocodes/contao-scrollcuejs-bundle
```

2. Open the install tool and do a database update.

3. Include the **js_scrollcuejs** template in the page layout.

-

#### Add custom animation types
Create a custom template if you want to set custom scrollCue.js options. See the [documentation](https://prjct-samwest.github.io/scrollCue/document.html) for more details. May be also add

```
/******************** 
*     foo
*********************/

[data-cue="foo"],[data-cues="foo"]>*{
  opacity: 0;
}
@keyframes foo {
  from{
    ...
  }
  to{
    opacity : 1;
    ...
  }
}


```

-

### Screenshot

![ContaoBackend options](public/images/backendsettings.png)