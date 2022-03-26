//JavaScriptのコード
let i=1;
let form=document.getElementById("form");
form.addEventListener("click", addForm);

function addForm() {
    if(i<2){
    //input_dataを定義.input要素を作成して，それをinput_dataに代入した
    // let textarea_data_contents = document.createElement('textarea');
    let input_data_image = document.createElement('input');
    
    //input_dataをtype="text"とした
    // textarea_data_contents.type = "text";
    // textarea_data_contents.name = "post[contents]"; 
    input_data_image.type = "file";
    input_data_image.name = "image["+i+"]"; 
    input_data_image.accept = ".jpg,.jpeg,.JPG,.JPEG,.png,.gif";
    
    //input_dataのidを，inputform_i番とする
    // textarea_data_contents.id = 'textareaform_contents_'+i;
    // input_data_image.id = "inputform_image_"+i;
    
    //input_dataのplaceholderは"フォーム-i"とする．
    // textarea_data_contents.placeholder = '本文-'+i;
    
    //parentに,'id="form_area"'の中にあるコードを取得し，それをparentへ代入
    let parent = document.getElementById('form_area');
    
    //上のコードで定義したparentに，input_data_title，input_data_contentsのコードを加える
    // parent.appendChild(textarea_data_contents);
    parent.appendChild(input_data_image);
    
    i ++;
    }else{
        ;//何もしない
    }
}