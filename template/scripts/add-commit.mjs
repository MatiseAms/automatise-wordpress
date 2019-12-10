import { readFile, writeFile } from 'fs'

const someFile = './themesrc/functions.php'

readFile(someFile, 'utf8', function(err, data) {
	if (err) {
		// eslint-disable-next-line no-console
		return console.log(err)
	}

	let result = data.replace(/<commit>/g, process.env.GITHUB_SHA.substr(0,8))
	if(process.env.GITHUB_REF){
		result = result.replace(/<branch_ref>/g, process.env.GITHUB_REF)
	}

	writeFile(someFile, result, 'utf8', function(err) {
		// eslint-disable-next-line no-console
		if (err) return console.log(err)
	})
})
