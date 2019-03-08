<script>
    //---------ฟังชั่นแสดงรูป----------------
    function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }else{
            $('#_img').attr('src',   '../img_upload/agent/default.png');
        }
    }

</script>

<form id="form_target" role="form" method="post" action="index.php?content=agent&action=insert" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        หน้าเพิ่มข้อมูลบริการต่างๆ
                    </h1>
                </div>
                <div class="col-lg-6">

                    <button type="submit" class="btn btn-primary float-right">เพิ่ม</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <input type="hidden" id="agent_img_o" name="agent_img_o" value="" />
            <input type="hidden" id="agent_id" name="agent_id" value="" />

            <div class="col-12">

            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <div class="form-group" align="center">
                        <img id="_img" width="400" src="<?PHP echo $img_path . 'default.png';?>" class="img-fluid" alt="">
                        <input accept=".jpg , .png" type="file" id="agent_img" name="agent_img" class="form-control"
                            style="margin: 14px 0 0 0 ;" onChange="readURL(this);" value="">
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
                                <textarea class="form-control " id="agent_detail_th" name="agent_detail_th"rows="6" /><?PHP echo $agent[$id]['agent_detail_th'];?></textarea>
                                <p class="help-block">Example : </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Sub Title EN<font color="#F00"><b>*</b></font></label>
                                <textarea class="form-control " id="agent_detail_en" name="agent_detail_en"rows="6" /><?PHP echo $agent[$id]['agent_detail_en'];?></textarea>
                                <p class="help-block">Example : </p>
                            </div>
                        </div>




                    </div>

                </div>

                
            </div>

        </div>
    </div>


</form>

