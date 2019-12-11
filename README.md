# Create Matise Wordpress App

[![NPM version](https://img.shields.io/npm/v/automatise-wordpress.svg?style=flat)](https://npmjs.com/package/automatise-wordpress) [![NPM downloads](https://img.shields.io/npm/dm/automatise-wordpress.svg?style=flat)](https://npmjs.com/package/automatise-wordpress)

> Create a Matise Wordpress project

</details>

## Usage

Make sure you have [npx](https://www.npmjs.com/package/npx) installed (`npx` is shipped by default since NPM `5.2.0`)

```bash
npx automatise-wordpress <my-project>
```

## Credits

- Matise - [matise.nl](https://www.matise.nl)

## Critical information
This package creates a simple Wordpress installation, for the api version checkout: https://github.com/MatiseAms/create-matise-wordpress

This package uses SAO v0.22.17 which to my knowledge does not support async data functions (sao.js ln28).
So what i did to fix this is copy the lib/index.js and lib/generate.js from the sao node_module and added some async await keywords to support this.
The same thing goes for the kopy.js in the kopy node_module.
So if anything breaks in future versions, this might have something to do with it.
