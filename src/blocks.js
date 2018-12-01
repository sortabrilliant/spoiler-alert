import './style.scss';
import './editor.scss';

const { __ } = wp.i18n;
const { registerBlockStyle } = wp.blocks;

registerBlockStyle('core/paragraph', {
    name: 'spoiler-alert',
    label: __('Spoiler Alert'),
    isDefault: false,
});

// Default paragraph style for resetting block.
registerBlockStyle('core/paragraph', {
    name: 'default',
    label: __('Default'),
    isDefault: true,
});

registerBlockStyle('core/image', {
    name: 'spoiler-alert',
    label: __('Spoiler Alert'),
    isDefault: false,
});

// Default image style for resetting block.
registerBlockStyle('core/image', {
    name: 'default',
    label: __('Default'),
    isDefault: true,
});