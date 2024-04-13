<img src="https://raw.githubusercontent.com/jedoCodes/package-metadata/3728dc750472881a48aca6075efd7f4dc8af7356/meta/jedocodes/logo.svg" alt="Logo" width="250" height="auto">

#Contao scrollCue.js


Integrate scrollCue.js for a scroll animation of a Contao content element. 

Simply enable the `js_scrollcuejs` template in your page layout. 

Create a custom template if you want to set custom scrollCue.js options. See the [documentation](https://prjct-samwest.github.io/scrollCue/document.html) for more details. May be also add


####Add custom animation types
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


See [scrollCue](https://github.com/prjct-samwest/scrollCue).


-

### Screenshot

![ContaoBackend options](public/images/backendsettings.png)