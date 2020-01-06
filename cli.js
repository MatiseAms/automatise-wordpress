#!/usr/bin/env node

const path = require('path')
const sao = require('sao')

const generator = path.resolve(__dirname, './')
const outDir = path.resolve(process.argv[2] || '.')

console.log(`> Generating Matise wordpress project in ${outDir}`);

const options = { generator, outDir, npmClient: 'npm' }

if(process.argv[3]){
	options.answers = process.argv[3]
}

sao(options)
	.run()
	.catch(err => {
		console.trace(err)
		process.exit(1)
	})
