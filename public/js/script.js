
// Form category

var new_cat = document.getElementById('hid-elt');

new_cat.addEventListener('change', function(){

    if (new_cat.value==='new') {

        document.getElementById('new-elt').style.display='block';

    }else{
        document.getElementById('new-elt').style.display='none';
    }
    
});

$(document).ready(function(){        
    var tagInputEle = $('#tags-input');
    tagInputEle.tagsinput();
});