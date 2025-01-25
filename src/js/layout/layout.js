import { calcViewportHeight, onWindowResize } from '../utils';
import header from '../components/header';

const layout = () => {
	header();
	onWindowResize(() => {
		calcViewportHeight();
	});
	calcViewportHeight();
};

export default layout;
