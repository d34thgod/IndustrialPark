import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { RichText } from "@wordpress/block-editor";
import Edit from './edit';

registerBlockType( 'industrial-blocks/sideheading', {
    title: __('Sidebar with listing', 'IndustrialPark'),
    icon:   'admin-customizer',
    category: 'industrial',
    attributes: {
        option: {
            type:'string',
            default: 'dos',
        },
        content: {
            type: 'string',
            source: 'html',
            selector: 'h4',
            default: __('Dos','IndustrailPark')
        },
    },
    edit: Edit,
    save() {
        return <div>hellow world. forntend</div>;
    },
});