<style>
*
{
	background-color: rgba(1,128,128,50%);
	color: white;
}
p{
	text-align: center;	
	font-size: 64px;
	top:50%;
	left:50%;
	position:absolute;
	margin:0;
	padding:0;
	transform:translate(-50%,-50%);
	background-color: rgba(1,1,1,50%);
	border-radius:10%;
	font-family: "Lucida Console", Monaco, monospace;
}
div
{
	background-color: rgba(128,1,1,100%);
	width:20%;
}
</style>
<?php $today = getdate(); ?>
<div style="">
	<p id="timer"></p>
</div>
<script>
    let val='',h,m,s;
    let d = new Date(Date.UTC(
    <?php echo $today['year'].",".$today['mon'].",".$today['mday'].",".$today['hours'].",".$today['minutes'].",".$today['seconds']; ?>
    ));
    setInterval(function()
    {
        d.setSeconds(d.getSeconds()+1);
	val='';
	//Hours
	let h = d.getHours();
        if(h<10)
	        val += "0"+h+":";
        else
		val += h+":";
	//Minutes
	let m = d.getMinutes();
        if(m<10)
	        val += "0"+m+":";
        else
		val += m+":";
	//Seconds
	let s = d.getSeconds();
        if(s<10)
	        val += "0"+s;
        else
		val += s;        
        //print
        document.querySelector('p#timer').innerText = val;
    }, 1000);
</script>
