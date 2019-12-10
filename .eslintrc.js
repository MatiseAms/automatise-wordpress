module.exports = {
	root: true,
	env: {
		browser: true,
		node: true
	},
	parserOptions: {
		parser: 'babel-eslint',
		soureceType: 'module'
	},
	extends: [
		// https://github.com/vuejs/eslint-plugin-vue#priority-a-essential-error-prevention
		'plugin:vue/recommended',
		'eslint:recommended'
	],
	// required to lint *.vue files
	plugins: ['prettier', 'vue'],
	// add your custom rules here
	rules: {
		'prettier/prettier': [
			'warn',
			{
				printWidth: 100,
				semi: true,
				useTabs: true,
				tabWidth: 1,
				singleQuote: true,
				bracketSpacing: true,
				arrowParens: 'always'
			}
		],
		semi: ['warn', 'always'],
		'no-console': 'off',
		'no-trailing-spaces': 'warn',
		'no-undef': 'warn',
		'no-irregular-whitespace': 'warn',
		indent: [
			'warn',
			'tab',
			{
				SwitchCase: 1, //1 tab for each Switch statement
				VariableDeclarator: 1, //Use more variables with 1 tab
				MemberExpression: 1, //Use 1 tab when variable with moore expressions
				outerIIFEBody: 1,
				FunctionDeclaration: {
					parameters: 2,
					body: 1
				},
				CallExpression: {
					arguments: 1
				},
				ArrayExpression: 1, //Use 1 tab for array notation
				ObjectExpression: 1 //Use 1 tab for object notation
			}
		],
		'newline-per-chained-call': [
			'warn',
			{
				ignoreChainWithDepth: 2
			}
		],
		'no-mixed-spaces-and-tabs': 'warn',
		//base
		'vue/comment-directive': 'warn',
		'vue/jsx-uses-vars': 'warn',
		//essential
		'vue/no-async-in-computed-properties': 'warn',
		'vue/no-dupe-keys': 'error',
		'vue/no-duplicate-attributes': 'off',
		'vue/no-parsing-error': 'warn',
		'vue/no-reserved-keys': 'error',
		'vue/no-shared-component-data': 'error',
		'vue/no-side-effects-in-computed-properties': 'error',
		'vue/no-template-key': 'error',
		'vue/no-textarea-mustache': 'warn',
		'vue/no-unused-vars': 'warn',
		'vue/require-component-is': 'warn',
		'vue/require-render-return': 'warn',
		'vue/require-v-for-key': 'warn',
		'vue/require-valid-default-prop': 'warn',
		'vue/return-in-computed-property': 'warn',
		'vue/valid-template-root': 'warn',
		'vue/valid-v-bind': 'warn',
		'vue/valid-v-cloak': 'warn',
		'vue/valid-v-else-if': 'warn',
		'vue/valid-v-else': 'warn',
		'vue/valid-v-for': 'warn',
		'vue/valid-v-html': 'warn',
		'vue/valid-v-if': 'warn',
		'vue/valid-v-model': 'warn',
		'vue/valid-v-on': 'warn',
		'vue/valid-v-once': 'warn',
		'vue/valid-v-pre': 'warn',
		'vue/valid-v-show': 'warn',
		'vue/valid-v-text': 'warn',
		//strongly
		'vue/attribute-hyphenation': 'warn',
		'vue/html-closing-bracket-newline': [
			'warn',
			{
				singleline: 'never',
				multiline: 'always'
			}
		],
		'vue/html-end-tags': 'warn',
		'vue/html-indent': [
			'warn',
			'tab',
			{
				attribute: 1,
				closeBracket: 0,
				alignAttributesVertically: true,
				ignores: []
			}
		],
		'vue/html-self-closing': [
			'error',
			{
				html: {
					void: 'always',
					normal: 'always',
					component: 'always'
				},
				svg: 'any',
				math: 'always'
			}
		],
		'vue/html-closing-bracket-spacing': [
			'warn',
			{
				startTag: 'never',
				endTag: 'never',
				selfClosingTag: 'always'
			}
		],
		'vue/max-attributes-per-line': [
			'warn',
			{
				singleline: 3,
				multiline: {
					max: 1,
					allowFirstLine: false
				}
			}
		],
		'vue/mustache-interpolation-spacing': 'error',
		'vue/mustache-interpolation-spacing': ['warn', 'always'],
		'vue/no-multi-spaces': 'warn',
		'vue/require-default-prop': 'error',
		'vue/require-prop-types': 'warn',
		'vue/v-bind-style': 'warn',
		'vue/v-on-style': 'warn',
		//recommended
		'vue/attributes-order': 'warn',
		'vue/html-quotes': 'warn',
		'vue/order-in-components': 'warn',
		'vue/this-in-template': 'error',
		'vue/attributes-order': 'warn'
	}
};
