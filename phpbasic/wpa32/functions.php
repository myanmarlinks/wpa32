<?php
/**
 * must have app/view folder 
 */
function _get_view($view, $data = null) {
    $file = DD . "/app/view/" . $view . ".php";
    if(file_exists($file)) {
        ob_start();
        if($data != null) {
            extract($data);
        }
        require $file;
        ob_end_flush();
    } else {
        trigger_error("view ဖိုဒါထဲမှာ view file မရှိဘူးဟ၊ သောက်ရူးရ", E_USER_ERROR);
    }
}
?>