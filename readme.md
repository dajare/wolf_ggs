# Golden Grid Solarized (GGS)

## A Simple 'Responsive' Theme for Wolf CMS

### What is it?

This is a 'theme' (or Layout) for [Wolf CMS][wcms]. It is designed to be a fairly simple drop-in **responsive** theme.
![GGS Thumbnail](https://dl.dropboxusercontent.com/u/21063042/html/ggs_dark-light_thumb.png "Light-Dark GGS")

**Features**

- Uses the [Golden Grid System][ggjk] by [Joni Korpi][joko]
- Colours based on the [Solarized][sola] palette by [Ethan Schoonover][etsc]
- from Google fonts, uses [Cantarell][ca] for the headings, and [Noticia Text][nt] for the body

Also note:

- main navigation in the header
- 'perpetual' ('rolling') navigation in footer: always points left to parent page (if there is one), and right to any child pages (if there are any) from the current page
- images resize with screen size
- both [dark][dk] and [light][lt] versions available; see lines 25-29 in the `GGS.html` (layout) file to set this option

**Warnings**

- this is a SIMPLE layout!
- the nav does not 'collapse' in smaller view-ports


### Installing

1. In your Wolf admin, go to `Files > themes` and create a folder named `ggs`; open the folder.
1. Upload the four (4) `.css` files to the `ggs` folder (ggs-dark, ggs-layout, ggs-light, screen).
1. Go the `Snippets` tab, and create new snippet called `ggs-inline`. Copy/paste the contents of the `ggs-inline.snippet.php` file into the body of this snippet; make sure filter is set to `--none--`. Save.
1. Go to the `Layouts` tab, and create a new layout called `GGS`, with the Content-Type of `text/html`. Copy/paste the contents of the `GGS.html` file into the body of this layout.\* Save.  
\* *The default 'flavour' is DARK; change line 29 to call `ggs-light.css` if you prefer to use the LIGHT version.* 
1. Go to the `Pages` tab, and open the `Home Page` for editing. Under the `Settings` tab, choose `GGS` from the Layout drop-down. Save.

**Your site is now using the GGS Layout!**

Enjoy!

### Changelog

20131019 - first public release

----

Please use the [Github repo's issue tracker][grit] to log any bugs or enhancement requests. Thank you!

[ca]: http://www.google.com/webfonts/specimen/Cantarell
[nt]: http://www.google.com/webfonts/specimen/Noticia+Text
[dk]: https://www.dropbox.com/s/az36jurl8tb9odf/GGS_2013-10-19_dark.png
[lt]: https://www.dropbox.com/s/wuqtwfyn0dco6vf/GGS_2013-10-19_light.png

[wcms]: http://www.wolfcms.org/
[ggjk]: http://goldengridsystem.com/
[joko]: http://jonikorpi.com/
[sola]: http://ethanschoonover.com/solarized
[etsc]: http://ethanschoonover.com/

[grit]: https://github.com/dajare/wolf_ggs/issues