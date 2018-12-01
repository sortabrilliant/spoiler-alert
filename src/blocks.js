import './style.scss';
import './editor.scss';

const { __ } = wp.i18n;
const { registerBlockStyle } = wp.blocks;

registerBlockStyle('core/paragraph', {
    name: 'spoiler-alert',
    label: __('Spoiler Alert'),
    isDefault: false,
});

registerBlockStyle('core/image', {
    name: 'spoiler-alert',
    label: __('Spoiler Alert'),
    isDefault: false,
});