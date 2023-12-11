var base = location.protocol+'//'+location.host;

$(document).ready(function(){
    editor_init('editor');
})


function editor_init(field){
    CKEDITOR.replace(field,{
        toolbar: [
            {name: 'clipboard',items: ['Cut','Copy','Paste','PasteText',"_", 'undo','Redo']} ,
            {name:'basicstyles',items:['Bold','Italic','BuletedList', 'strike','Image','Link']},
            {name: 'document', items:['CodeSnippet','EmojiPanel']}
        ]
    });
}