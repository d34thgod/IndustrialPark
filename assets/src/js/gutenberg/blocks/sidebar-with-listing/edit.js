import { __ } from "@wordpress/i18n/build-types";

const { RichText } = require("@wordpress/block-editor");

const Edit = ( {clasName,attributes,setAttributes} ) => {
    
    const {content} = attributes;
    return (
         <div>
             <span>
                 <RichText
                    tagName="h4"
                    className={className}
                    value={content}
                    onchange={(content) => setAttributes({content})}
                    placeholder={ __('Heading...','IndustrailPark')}
                 />
             </span>
         </div>
    )
}

export default Edit