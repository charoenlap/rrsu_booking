<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="assets/boostrap_jquery/css/bootstrap.min.css">
	<style type="text/css">
	    body {
	        width: 100%;
	        height: 100%;
	        margin: 0;
	        padding: 0;
	        background-color: #FAFAFA;
	        font: 12pt "Tahoma";
	    }
	    * {
	        box-sizing: border-box;
	        -moz-box-sizing: border-box;
	    }
	    .page {
	        width: 210mm;
	        min-height: 297mm;
	        padding: 10mm 20mm;
	        margin: 10mm auto;
	        border: 1px #D3D3D3 solid;
	        border-radius: 5px;
	        background: white;
	        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
	        position: relative;
	    }
	    .subpage {
	    	height: 100%;
	    }
	    @page {
	        size: A4;
	        margin: 0;
	    }
	    @media print {
	        html, body {
	            width: 210mm;
	            height: 297mm;        
	        }
	        .page {
	            margin: 0;
	            border: initial;
	            border-radius: initial;
	            width: initial;
	            min-height: initial;
	            box-shadow: initial;
	            background: initial;
	            page-break-after: always;
	        }
	    }
	</style>
</head>
<body>
    <div class="page">
        <div class="subpage">
        	<div class="float-right text-center" style="position: absolute; border: 1px solid #333; padding: 5px; right: 20mm;">
        		<p class="mb-0">ลำดับที่</p>
				<h4 class="mb-0">50</h4>
        	</div>
        	<div class="row mb-3">
        		<div class="col-sm-12 text-center">
        			<img src="assets/images/logo.png" alt="" width="70" style="margin-bottom: 10px;">
        			<p>กองพัฒนานักศึกษา</p>
        			<p>มหาวิทยาลัยราชภัฏสวนสุนันทา</p>
        			<br>
        			<p>โครงการส่งเสริมจริยธรรมและคุณธรรม ประจำปี พ.ศ. 2563 ภาคเรียนที่ 1/2563 ครั้งที่</p>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-3">
        			<p>รหัสนักศึกษา :</p>
        		</div>
        		<div class="col-sm-9">
        			<p>1234567890</p>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-3">
        			<p>ชื่อ - นามสกุล :</p>
        		</div>
        		<div class="col-sm-9">
        			<p>1234567890</p>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-3">
        			<p>โปรแกรม/สาขาวิชา :</p>
        		</div>
        		<div class="col-sm-9">
        			<p>2230-พยาบาลศาสตร์</p>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-3">
        			<p>คณะ/วิทยาลัย  :</p>
        		</div>
        		<div class="col-sm-9">
        			<p>วิทยาลัยพยาบาลและสุขภาพ</p>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-3">
        			<p>ระดับการศึกษา :</p>
        		</div>
        		<div class="col-sm-9">
        			<p>ปริญญาตรี (ภาคปกติ)</p>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-3">
        			<p>ศูนย์ให้การศึกษา :</p>
        		</div>
        		<div class="col-sm-9">
        			<p>สวนสุนันทา</p>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-3">
        			<p>รายละเอียดการจอง :</p>
        		</div>
        		<div class="col-sm-9">
        			<p>
        				โครงการส่งเสริมจริยธรรมและคุณธรรม ประจำปี พ.ศ. 2561 ภาคเรียนที่ 1/2561 ครั้งที่ 5 <br>
        				วันที่ 16 ตุลาคม 2561 เวลา 12.00 น. ถึง 16.00 น. <br>
        				ลำดับที่จอง : 29
        			</p>
        		</div>
        	</div>

        	<div class="row mb-3">
        		<div class="col-sm-12 text-center">
        			<p>(วันที่พิมพ์ <?php echo date('d-m-Y H:i:s'); ?>)</p>
        		</div>
        		<div class="col-md-12">
        			<div class="card">
        				<div class="card-header bg-white">
    						<div class="row">
    							<div class="col-sm-2">
    								<img src="assets/images/logo.png" alt="" width="50">
    							</div>
    							<div class="col-md-10">
    								<p class="pt-2">
    									โครงการส่งเสริมจริบธรรมและคุณธรรม ประจำปี <br>
    									พ.ศ. 2561 ภาคเรียนที่ 1/2561 ครั้งที่ 5 
    								</p>
    							</div>
    						</div>
        				</div>
        				<div class="card-body">
        					<div class="row">
        						<div class="col-md-6">
        							<p class="mb-0">รหัสนักศึกษา 1234567890</p>
        							<p class="mb-0">1234567890</p>
        							<p class="mb-0">สาขา พยาบาลศาสตร์</p>
        							<p class="mb-0">คณะ วิทยาลัยพยาบาลและสุขภาพ</p>
        						</div>
        						<div class="col-md-6">
        							<p class="mb-0">วันนัด 16 ตุลาคม 2561</p>
        							<p class="mb-0">เวลา 12.00 น. ถึง 16.00 น.</p>
        						</div>
        					</div>
        				</div>
        				<div class="card-footer bg-white">
        					<div class="row">
        						<div class="col-md-12 text-center">
        							<p>
        								กองพัฒนานักศึกษา มหาวิทยาลัยราชภัฏสวนสุนันทา <br>
        								โทรศัพท์ 02-1601352-7 โทรสาร 02-1601353
        							</p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="row">
    			<div class="col-sm-7">
    				<div class="card rounded-0">
    					<div class="card-body">
    						<div class="row">
    							<div class="col-sm-12 text-center">
    								<p class="mb-0">dsfkqwpkprk</p>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-5">
    				<img src="assets/images/barcode.jpg" alt="" class="w-100">
    			</div>
    		</div>
        </div>    
    </div>
</body>
</html>