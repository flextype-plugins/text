# Text Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.0.0-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.x-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Text plugin provides you useful shortcodes to work with texts on your pages.

## Installation
1. Unzip plugin to the folder `/site/plugins/`
2. Go to `/site/config/site.yaml` and add plugin name to plugins section.
3. Save your changes.

Example:
```
plugins:
  - text
```

## Usage in page content

Cut text
```
[text-cut length=10]Lorem ipsum dolor sit amet, consectetur adipisicing elit[/text-cut]
```

Make a text lowercase
```
[text-lowercase]Text here[/text-lowercase]
```

Make a text uppercase
```
[text-uppercase]Text here[/text-uppercase]
```

Create a lorem ipsum text
```
[text-lorem num=3]
```

Extract the last num characters from a text.
```
[text-right num=3]Text here[/text-right]
```

Extract the first num characters from a text.
```
[text-left num=3]Text here[/text-left]
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/text/blob/master/LICENSE)
