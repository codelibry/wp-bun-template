import Accordion from './components/accordion';
import marquee from './components/marquee';
import initScrollSmoother from './components/init-scroll-smoother';

import header from './components/header';
import layout from './layout/layout';
import { documentReady, pageLoad } from './utils';

const styles = ['color: #fff', 'background: #cf8e1f'].join(';');
const message = 'Who is the king of the gym?';

// eslint-disable-next-line no-console
console.info('%c%s', styles, message);

window.NodeList.prototype.map = Array.prototype.map;
window.NodeList.prototype.filter = Array.prototype.filter;

const app = () => {
	layout();
	pageLoad(() => {
		document.body.classList.add('body--loaded');

		const accordion = Accordion({
			triggers: document.querySelectorAll('.js-acc-trigger'),
			activeStateName: 'accordion__item--active-mod',
		});

		initScrollSmoother();
		marquee();
		header();
	});
};

// -------------------  init App
documentReady(() => {
	app();
});
// -------------------  init App##
