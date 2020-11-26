<?php 
        if($data['strike'] == 3 ) {
?>
	<div class="progress">
		<div class="progress-bar progress-bar-primary stack3" role="progressbar" style="width: 100%;"><strong style="padding-top:15px; font-size:15px;">3</strong>
		</div>
	</div>
<?php 
        } 
	if($data['strike'] > 1) {
?>
            <div class="progress">
              <div class="progress-bar progress-bar-primary stack2" role="progressbar" style="width: 100%;"><strong style="padding-top:15px; font-size:15px;">2</strong></div>
            </div>
<?php 
       } 
	if($data['strike'] > 0 ){
?>

            <div class="progress">
              <div class="progress-bar progress-bar-primary stack1" role="progressbar" style="width: 100%;"><strong style="padding-top:15px; font-size:15px;">1</strong></div>
						</div>
<?php
}  
?>

