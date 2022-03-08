# Insert Module By Alias Bundle

This is a utility which lets you reference a module by alias instead of ID. This is important if you have a deployment
process with multiple stages, databases and systems that do not ultimately share the same module ids.

The DCA of tl_module is extended by a field "alias".

## Requirements

- Contao 4.9+ (tested up to 4.13)
- PHP 7.4 or 8.0+

## Install

```BASH
$ composer require guave/insertmodulebyalias-bundle
```

## Usage

To load a module you can use the following syntax in your templates:

```PHP
{{insert_module_alias::modulealias}}
```

If you need modules for specific languages, add the language to the alias like `_en` and then load it in your template
with:

```PHP
{{insert_module_alias::modulealias_en}}
```

Since Contao 4.13 you can also create a "Root page dependent Modules" Module. There you can select which module should
be loaded for each root page. 
