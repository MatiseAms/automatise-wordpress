#!/usr/bin/env node

const path = require('path')
const sao = require('sao')

const generator = path.resolve(__dirname, './')
const outDir = path.resolve(process.argv[2] || '.')

console.log(`> Generating Matise wordpress project in ${outDir}`);

sao({ generator, outDir, npmClient: 'npm' })
	.run()
	.catch(err => {
		console.trace(err)
		process.exit(1)
	})
