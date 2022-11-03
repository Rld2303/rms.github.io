<html>
<?php

	$stn=$_GET['stn'];
	$fn=$_GET['fn'];
	$gender=$_GET['gen'];
	$guj=$_GET['guj'];
	$english=$_GET['eng'];
	$ac=$_GET['ac'];
	$sp=$_GET['sp'];
	$oc=$_GET['oc'];
	$eco=$_GET['eco'];
	$com=$_GET['com'];
	$total=$guj+$english+$ac+$sp+$oc+$eco+$com;
	$per=$total/7;
	$remark1=0;
	$remark2=0;
	$remark3=0;
	$remark4=0;
	$remark5=0;
	$remark6=0;
	$remark7=0;
	$count=0;
	$s="a";
	$gen='';
	$min=35;
	$max=100;
	$guja='Gujarati';
	$eng='English';
	$acc='Accounts';
	$spc='Spcc';
	$ocm='OC';
	$ecom='Economics';
	$comp='Computer';

	if($gender=="Male"){
		$gen="S/o";
	}else if($gender=="Female"){
		$gen="D/o";
	}
	if($guj<35){
		$remark1="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$guja;
	}else if($guj>79){
		$remark1="<font color='green'>D</font>";
	}else{
		$remark1='-';
	}
	
	if($english<35){
		$remark2="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$eng;
	}else if($english>79){
		$remark2="<font color='green'>D</font>";
	}else{
		$remark2='-';
	}

	if($ac<35){
		$remark3="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$acc;
	}else if($ac>79){
		$remark3="<font color='green'>D</font>";
	}else{
		$remark3='-';
	}

	if($sp<35){
		$remark4="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$spc;
	}else if($sp>79){
		$remark4="<font color='green'>D</font>";
	}else{
		$remark4='-';
	}
	
	if($oc<35){
		$remark5="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$ocm;
	}else if($oc>79){
		$remark5="<font color='green'>D</font>";
	}else{
		$remark5='-';
	}

	if($eco<35){
		$remark6="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$ecom;
	}else if($eco>79){
		$remark6="<font color='green'>D</font>";
	}else{
		$remark6='-';
	}

	if($com<35){
		$remark7="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$comp;
	}else if($com>79){
		$remark7="<font color='green'>D</font>";
	}else{
		$remark7='-';
	}

	$s=str_replace('a and', '', $s);
	if($count>2){
		$s="Fail";
	}else if($count==0){
		$s="Pass";
	}else if($count<=2){
		$s="Compartment in ".' '.$s;
	}
?>

<center>
	<table border=1 bgcolor='lightyellow'>
		<tr>
		<td>
			<table  width=100% bgcolor='lightyellow'>
			<tr>
				<td>
					<img src='logo.png' width=120 height=120>
				</td>
				<td>
					<b><font size='5' color='purple'>EMMANUEL STUDY CENTER</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>
				</td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
			<table width=100%>
				<tr><td><font size='4'><?php echo "$stn"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$gen";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo" Mr.$fn";?></font></td></tr>
				<tr><td><font size='4'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"$gender";?></font></td></tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
			<table border=1 width=100%>
				<tr><th><i>Subject code</i></th><th><i>Subject name</i></th><th><i>Min marks</i></th><th><i>Max marks</i></th><th><i>Marks obtained</i></th><th><i>Remark</i></th></tr>
				<tr><td>101</td><td>Gujarati</td><td>35</td><td>100</td><td><?php echo "$guj"; ?></td><td><?php echo "$remark1"; ?></td></tr>
				<tr><td>102</td><td>English</td><td>35</td><td>100</td><td><?php echo "$english"; ?></td><td><?php echo "$remark2"; ?></td></tr>
				<tr><td>103</td><td>Accounts</td><td>35</td><td>100</td><td><?php echo "$ac"; ?></td><td><?php echo "$remark3"; ?></td></tr>
				<tr><td>104</td><td>Spcc</td><td>35</td><td>100</td><td><?php echo "$sp"; ?></td><td><?php echo "$remark4"; ?></td></tr>
				<tr><td>105</td><td>OC</td><td>35</td><td>100</td><td><?php echo "$oc"; ?></td><td><?php echo "$remark5"; ?></td></tr>
				<tr><td>105</td><td>Economics</td><td>35</td><td>100</td><td><?php echo "$eco"; ?></td><td><?php echo "$remark6"; ?></td></tr>
				<tr><td>105</td><td>Computer</td><td>35</td><td>100</td><td><?php echo "$com"; ?></td><td><?php echo "$remark7"; ?></td></tr>
				<tr><td></td><td></td><td><b>Total</b></td><td><b>400</b></td><td><b><?php echo "$total"; ?><b></td><td></td></tr>
			</table>
		</td>
		</tr>

		<tr>
		<td>
			<table>
				<tr><td><b><font size='4'>Result:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $per; ?>&nbsp;&nbsp;&nbsp;<?php echo "$s"; ?></font></b></td></tr>
			</table>
		</td>
		</tr>
	</table>
</center>

</html>