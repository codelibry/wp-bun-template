import path from 'path';
import * as sass from 'sass';
import fs from 'fs';
import { Server, Bundler } from 'bun-bundler/modules';
import browserSync from 'browser-sync';

const debugMode = false;
const bundler = new Bundler();
const server = new Server();

const root = path.resolve('./');
const dist = path.resolve('./dist');
const src = path.resolve('./src');

const criticalPath = path.resolve(src, './scss/critical/critical.scss');

const compileCSS = () => {
	// app
	const appStyles = path.resolve(src, './scss/app.scss');
	const result = sass.compile(appStyles, { style: 'compressed' });
	fs.writeFileSync(path.join(`${dist}/css/`, 'app.css'), result.css);

	// critical
	if (fs.existsSync(criticalPath)) {
		console.log('Compiling critical.css...');
		const criticalResult = sass.compile(criticalPath, { style: 'compressed' });
		fs.writeFileSync(path.join(`${dist}/css/`, 'critical.css'), criticalResult.css);
	}
};

bundler.watch({
	production: process.env.NODE_ENV === 'production',
	debug: debugMode,
	sass: [`${src}/scss/app.scss`, `${src}/scss/critical/critical.scss`],
	js: [`${src}/js/app.js`],
	staticFolders: [`${src}/images/`, `${src}/fonts/`, `${src}/static/`],
	dist,
	htmlDir: dist,
	cssDist: `${dist}/css/`,
	assembleStyles: `${dist}/css/app.css`,
	jsDist: `${dist}/js/`,
	onStart: () => {
		browserSync.init({
			proxy: 'http://template-v2/',
			port: 3000,
			open: true,
			notify: false,
			ghostMode: false,
			files: [
				`${root}/**/*.php`,
				`${src}/**/*.js`,
				`${src}/**/*`,
				`!${root}/node_modules/**/*`,
				`!${dist}/**/*`,
				`!${root}/helpers/**/*`,
			],
		});

		compileCSS();
	},
	onBuildComplete: () => {
		compileCSS();
	},
});
