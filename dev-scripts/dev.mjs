/**
 * Development script for bundling and serving a web application.
 * This script sets up a development environment using bun-bundler,
 * watches for file changes, processes images, builds sprites,
 * and starts a local development server.
 */

import path from 'path';
import { Bundler } from 'bun-bundler';
import { SpriteBuilder } from 'bun-bundler/modules';
import browserSync from 'browser-sync';
const bundler = new Bundler();
const spriteBuilder = new SpriteBuilder();

const root = path.resolve('./');
const dist = path.resolve('./dist');
const src = path.resolve('./src');
const debugMode = false;

const dev = () => {
	bundler.watch({
		production: process.env.NODE_ENV === 'production',
		debug: debugMode,
		sass: [`${src}/scss/app.scss`],
		js: [`${src}/js/app.js`],
		staticFolders: [`${src}/images/`, `${src}/fonts/`, `${src}/static/`],
		dist,
		htmlDir: dist,
		cssDist: `${dist}/css/`,
		assembleStyles: `${dist}/css/app.css`,
		jsDist: `${dist}/js/`,
		onStart: () => {
			browserSync.init({
				proxy: 'http://woocommerce/',
				port: 3000,
				// reloadDebounce: 500,
				files: [
					`${root}/**/*.php`,
					`${src}/**/*.js`,
					`${src}/**/*`,
					`!${root}/node_modules/**/*`,
					`!${dist}/**/*`,
					`!${root}/helpers/**/*`,
				],
				open: true,
				notify: false,
				ghostMode: false,
				// reloadOnRestart: true, // Перезагрузка при перезапуске
			});
		},
		onBuildComplete: () => {
			spriteBuilder.build({
				debug: debugMode,
				htmlDir: dist,
				dist: `${dist}/images/sprite/sprite.svg`,
			});
		},
		onCriticalError: () => {
			console.log('Critical Error');
		},
	});
};

dev();
