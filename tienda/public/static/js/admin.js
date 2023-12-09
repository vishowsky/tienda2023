var base = location.protocol+'//'+location.host

$(document).readyfunction(){
    editor_init(editor);
}


function editor_init(field){
    CKEDITOR.replace(field,{
        skin: 'moono',
        extraPlugins: 'codesnippet,ajax,xml,textmatch,autocomplete,textwatcher,emoji,panelbutton,preview,wordcount',
        toolbar: [
            {name: 'clipboard',items: ['Cut','Copy','Paste','PasteText',"_", 'undo','Redo']} ,
            {name:'basicstyles',items:['Bold','Italic']},
            {name: 'document', items:['CodeSnippet','EmojiPanel']}
        ]
    })
}