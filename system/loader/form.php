<?php 
	class Form{
	    static function text($id_name='',$placeholder='',$default='',$class=''){
	    	$default = (isset($default)?$default:$placeholder);
	    	$html = 	'<div class="form-group">'; 
	    	$html .=		'<input type="text" name="'.$id_name.'" id="'.$id_name.'" class="form-control '.$class.'" placeholder="'.$placeholder.'" value="'.$default.'">';
	    	$html .= 		'<small id="" class="form-text"></small>'; 
			$html .= 	'</div>';
			echo $html;
	    }
	    static function number($id_name='',$placeholder='',$default='',$class=''){
	    	$default = (isset($default)?$default:'');
	    	$html = 	'<div class="form-group">';
	    	$html .=		'<input type="number" name="'.$id_name.'" id="'.$id_name.'" class="form-control '.$class.'" placeholder="'.$placeholder.'" value="'.$default.'">';
	    	$html .= 		'<small id="" class="form-text"></small>';
			$html .= 	'</div>';
			echo $html;
	    }
	    static function hidden($id_name='',$val=''){
	    	$html = 	'<input type="hidden" name="'.$id_name.'" id="'.$id_name.'" value="'.$val.'">';
			echo $html;
	    }
	    static function select($id_name,$data=array(),$class='',$index='',$print='',$selected=''){
	     	$html = 	'<div class="form-group">';
			$html .=		'<select class="form-control '.$class.'" name="'.$id_name.'" id="'.$id_name.'" style="width: 100%">';
								foreach($data as $val){ 
			$html .=			'<option value="'.$val[$index].'" '.($val[$index]==$selected?'selected':'').'>'.$val[$print].'</option>';
								}
			$html .=		'</select>';
			$html .=	    '<small id="" class="form-text text-muted"></small>';
			$html .=	'</div>'; 
			echo $html;
	    }
	    static function selectArr($id_name,$data=array(),$class='',$index='',$print='',$selected=''){
	     	$html = 	'<div class="form-group">';
			$html .=		'<select class="form-control '.$class.'" name="'.$id_name.'[]" id="'.$id_name.'" style="width: 100%">';
								foreach($data as $val){ 
			$html .=			'<option value="'.$val[$index].'" '.($val[$index]==$selected?'selected':'').'>'.$val[$print].'</option>';
								}
			$html .=		'</select>';
			$html .=	    '<small id="" class="form-text text-muted"></small>';
			$html .=	'</div>'; 
			echo $html;
	    }
	    static function date($id_name,$placeholder='',$val='',$format='yyyy-mm-dd'){
	     	$html = 	'<div class="form-group">';
			$html .= 		'<div class="input-group date" data-provide="datepicker" data-date-format="'.$format.'">';
			$html .= 			'<input type="text" name="'.$id_name.'" class="form-control" value="'.(!empty($val)?$val:date('Y-m-d')).'" placeholder="'.$placeholder.'">';
			$html .= 			'<div class="input-group-addon">';
			$html .= 				'<span class="glyphicon glyphicon-th"></span>';
			$html .= 			'</div>';
			$html .= 		'</div>';
			$html .= 		'<small id="" class="form-text text-muted"></small>';
			$html .= 	'</div>';
			echo $html;
	    }
	    static function time($id_name,$placeholder='',$val=''){
	    	$html = 	'<div class="form-group">';
            $html .=    	'<div class="input-group time" id="'.$id_name.'">';
            $html .=        	'<input type="text" class="form-control" name="'.$id_name.'" value="'.(!empty($val)?$val:date('H:i')).'" placeholder="'.$placeholder.'"/>';
            $html .=        	'<span class="input-group-addon">';
            $html .=            	'<span class="glyphicon glyphicon-time"></span>';
            $html .=        	'</span>';
           	$html .=     	'</div>';
            $html .=	'</div>';
			echo $html;
	    }
	    static function chk($id_name,$placeholder='',$val=''){
	    	$html = 	'<div class="form-check">';
		    $html .=	'	<input type="checkbox" class="form-check-input" name="'.$id_name.'" id="'.$id_name.'" '.(!empty($val)?'checked':'').' value="1">';
			$html .=	'    <label class="form-check-label" for="'.$id_name.'">'.$placeholder.'</label>';
		  	$html .=	'</div>';
			echo $html;
	    }
	    static function chkArr($id_name,$placeholder='',$val=''){
	    	$html = 	'<div class="form-check">';
		    $html .=	'	<input type="checkbox" class="form-check-input" name="'.$id_name.'[]" id="'.$id_name.'" '.(!empty($val)?'checked':'').' value="1">';
			$html .=	'    <label class="form-check-label" for="'.$id_name.'">'.$placeholder.'</label>';
		  	$html .=	'</div>';
			echo $html;
	    }
	}
?>