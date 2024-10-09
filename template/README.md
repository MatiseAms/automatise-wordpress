# <%= name %>

<%= name %> Wordpress

Start new project on this branch run:

If you created this with npx, the following will be taken care of:

- npm install

## Work on this project
```bash
npm install
```

### To work on this project with Local:
1. Run: 
```bash
npm run setup
```
2. Install  [**Local** by Flywheel](https://localwp.com/)
3. Create a new site with the name "<%= name %>"

<img width="300px" src="https://github.com/MatiseAms/automatise-wordpress/blob/master/readme-images/319538677-fe3afd3e-55f1-4080-9f2e-cb4819432b05.jpg?raw=true"/>
<img width="300px" src="https://github.com/MatiseAms/automatise-wordpress/blob/master/readme-images/319540923-202037a9-7d52-4bde-8421-ad008f5d83c9.jpg?raw=true"/>

4. Click open the Advanced options and click Browse to link to the dist folder of this project

<img width="300px" src="https://github.com/MatiseAms/automatise-wordpress/blob/master/readme-images/319539282-dec002af-d973-438e-9e63-d0cfb3b02cdb.jpg?raw=true"/>

5. Choose the Preferred environment in the next step 

<img width="300px" src="https://github.com/MatiseAms/automatise-wordpress/blob/master/readme-images/319540923-202037a9-7d52-4bde-8421-ad008f5d83c9.jpg?raw=true"/>

6. Create dummy account, you can replace the database easily within Local and use the account on the staging/live environment

<img width="300px" src="https://github.com/MatiseAms/automatise-wordpress/blob/master/readme-images/319540388-a7c848e5-98c6-4f48-98e8-a5dbc123971e.jpg?raw=true"/>


### Starting the dev server:
```bash
npm run dev
```

### Build a minified theme for production:
```bash
npm run production
```