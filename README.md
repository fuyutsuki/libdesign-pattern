## libdesign-pattern

Virion library that provides design-pattern traits.

### Requirement

- PHP >= 7.4

### Installation

#### Composer:

```bash
composer require fuyutsuki/libdesign-pattern
```

#### Virion:

Edit the .poggit.yml of the plugin you want to use this library as follows.

```yml
--- # Poggit-CI Manifest. Open the CI at https://poggit.pmmp.io/ci/author/YourProject
branches:
  - master
projects:
  YourProject:
    path: ""
    icon: ""
    libs:
      - src: fuyutsuki/libdesign-pattern/libdesign-pattern
        version: 0.2.0
...
```