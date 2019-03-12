<script>
	function check(){
		var slide_title_th = document.getElementById("slide_title_th").value;
		var slide_title_en = document.getElementById("slide_title_en").value;
		var slide_description_th = document.getElementById("slide_description_th").value;
		var slide_description_en = document.getElementById("slide_description_en").value;

		slide_title_th = $.trim(slide_title_th);
        slide_title_en = $.trim(slide_title_en);
		slide_description_th = $.trim(slide_description_th);
		slide_description_en = $.trim(slide_description_en);

		if(slide_title_th.length == 0){
			alert("กรุณากรอก Title TH");
			document.getElementById("slide_title_th").focus();
			return false;
		}else if(slide_description_th.length == 0){
			alert("กรุณากรอก Description TH");
			document.getElementById("slide_description_th").focus();
			return false;
		}else if(slide_title_en.length == 0){
			alert("กรุณากรอก Title EN");
			document.getElementById("slide_title_en").focus();
			return false;
		}else if(slide_description_en.length == 0){
			alert("กรุณากรอก Description EN");
			document.getElementById("slide_description_en").focus();
			return false;
		}else{
			return true;
		}
	}
</script>

<h1>แก้ไขรายละเอียดหน้า</h1>
<div align="right">

</div>

<form role="form" method="post" onsubmit="return check();" action="index.php?content=slide&action=edit&id=<?PHP echo $slide_id; ?>" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label>หน้า </label>
                <input id="slide_name" name="slide_name" class="form-control" value="<?php echo $slide['slide_name']?>" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Title TH <font color="#F00"><b>*</b></font></label>
                <input id="slide_title_th" name="slide_title_th" class="form-control" value="<?php echo $slide['slide_title_th']?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Title EN <font color="#F00"><b>*</b></font></label>
                <input id="slide_title_en" name="slide_title_en" class="form-control" value="<?php echo $slide['slide_title_en']?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Description TH<font color="#F00"><b>*</b></font></label>
                <textarea id="slide_description_th" name="slide_description_th" style="min-height:250px;" class="form-control"><?php echo $slide['slide_description_th']?></textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Description EN<font color="#F00"><b>*</b></font></label>
                <textarea id="slide_description_en" name="slide_description_en" style="min-height:250px;" class="form-control"><?php echo $slide['slide_description_en']?></textarea>
            </div>
        </div>
    </div>
    <div align="right">
        <input type="hidden" id="slide_id" name="slide_id" class="form-control" value="<?php echo $slide['slide_id']?>">
        <button type="button" class="btn btn-default" onclick="window.location='?content=slide';" >ย้อนกลับ</button>
        <button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
    </div>
</form>