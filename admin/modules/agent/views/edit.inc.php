<script>
//---------ฟังชั่นแสดงรูป----------------
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        $('#_img').attr('src', '../img_upload/agent/default.jpg');
    }
}
</script>

<form id="form_target" role="form" method="post" action="index.php?content=agent&action=edit"
    enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        หน้าแก้ไขข้อมูลบริการ
                        <?PHP 
echo $agent[$id]['agent_name'];  ?>
                    </h1>
                </div>
                <div class="col-lg-6">

                    <button type="submit" class="btn btn-primary float-right">แก้ไข</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <input type="hidden" id="agent_img_o" name="agent_img_o"
                value="<?php echo  $agent[$id]['agent_img']; ?>" />
            <input type="hidden" id="agent_id" name="agent_id"
                value="<?php echo  $agent[$id]['agent_id']; ?>" />

            <div class="col-12">

            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <div class="form-group" align="center">
                        <img id="_img" width="400"
                            src="<?PHP 
                        if ($agent[$id]['agent_img'] != "" || $agent[$id]['agent_img'] != null) { 
                            echo $img_path . $agent[$id]['agent_img']; 
                            } else {
                                echo $img_path . 'default.jpg';
                            }  ?> "
                            class="img-fluid" alt="">
                        <input accept=".jpg , .png" type="file" id="agent_img" name="agent_img"
                            class="form-control" style="margin: 14px 0 0 0 ;" onChange="readURL(this);"
                            value="<?php echo  $agent[$id]['agent_img']; ?>">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Agent Name TH <font color="#F00"><b>*</b></font></label>
                                <input id="agent_name_th" name="agent_name_th" class="form-control"
                                    value="<?PHP echo $agent[$id]['agent_name_th'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Agent Name EN<font color="#F00"><b>*</b></font></label>
                                <input id="agent_name_en" name="agent_name_en" class="form-control"
                                    value="<?PHP echo $agent[$id]['agent_name_en'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Sub Title TH <font color="#F00"><b>*</b></font></label>
                                <textarea class="form-control " id="agent_detail_th" name="agent_detail_th"rows="6"><?PHP echo $agent[$id]['agent_detail_th'];?></textarea>
                                <p class="help-block">Example : </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Sub Title EN<font color="#F00"><b>*</b></font></label>
                                <textarea class="form-control " id="agent_detail_en" name="agent_detail_en"rows="6"><?PHP echo $agent[$id]['agent_detail_en'];?></textarea>
                                <p class="help-block">Example : </p>
                            </div>
                        </div>



                    </div>

                </div>

            </div>

        </div>
    </div>


</form>

<script src="">





CKEDITOR.replace("agent_detail_th", {
    filebrowserBrowseUrl: '../template/backend/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Images',
    filebrowserFlashBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Flash',
    filebrowserUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKEDITOR.replace("agent_detail_en", {
    filebrowserBrowseUrl: '../template/backend/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Images',
    filebrowserFlashBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Flash',
    filebrowserUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
</script>