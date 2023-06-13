
<html>
<head>
<title>Efon's Droid Customizer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="uf.css" rel="stylesheet" type="text/css">

<script>

	

<!--
function showimage()
{
if (!document.images)
{
	alert ("Error");
	return;
}
var path = "pictures/"+document.chassis.chassis_type.options[document.chassis.chassis_type.selectedIndex].value+".jpg";
document.images.pictures.src=path;
}

function calculate(x)
{
	document.getElementById("droidtype").innerHTML = type[x];
	document.getElementById("price").innerHTML = cost[x]; 
	document.getElementById("modspace").innerHTML = mods[x];
	document.getElementById("armorspace").innerHTML = armor[x];
	document.getElementById("persavail").innerHTML = pers[x];
	
}


-->
</script>
</head>

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr valign="top"> 
    <td width="100%"> <script>
<!--
var type = new Array ();
	var cost = new Array ();
	var mods = new Array ();
	var armor = new Array ();
	var pers = new Array ();
	
	type[0] = "Arakyd Probe Droid";
	cost[0] = 5000;
	mods[0] = 0;
	armor[0] = 0;
	pers[0] = "False";

	type[1] = "Binary Load Lifter";
	cost[1] = 50000;
	mods[1] = 0;
	armor[1] = 1;
	pers[1] = "False";

	type[2] = "Binary Load Lifter, Advanced";
	cost[2] = 50000;
	mods[2] = 0;
	armor[2] = 3;
	pers[2] = "False";

	type[3] = "DZ70 Droid";
	cost[3] = 1500;
	mods[3] = 1;
	armor[3] = 0;
	pers[3] = "False";

	type[4] = "DZ70, Advanced";
	cost[4] = 1500;
	mods[4] = 2;
	armor[4] = 1;
	pers[4] = "True";

	type[5] = "LE Repair Droid";
	cost[5] = 7500;
	mods[5] = 2;
	armor[5] = 1;
	pers[5] = "True";

	type[6] = "LE Repair, Advanced";
	cost[6] = 1000;
	mods[6] = 3;
	armor[6] = 1;
	pers[6] = "True";

	type[7] = "Mouse";
	cost[7] = 500;
	mods[7] = 1;
	armor[7] = 0;
	pers[7] = "False";

	type[8] = "Mouse, advanced";
	cost[8] = 1000;
	mods[8] = 2;
	armor[8] = 1;
	pers[8] = "False";

	type[9] = "Power Droid";
	cost[9] = 40000;
	mods[9] = 1;
	armor[9] = 0;
	pers[9] = "False";

	type[10] = "Power Droid, Advanced";
	cost[10] = 40000;
	mods[10] = 1;
	armor[10] = 1;
	pers[10] = "False";

	type[11] = "Probot";
	cost[11] = 11000;
	mods[11] = 0;
	armor[11] = 1;
	pers[11] = "False";

	type[12] = "Probot, Advanced";
	cost[12] = 12000;
	mods[12] = 2;
	armor[12] = 2;
	pers[12] = "False";

	type[13] = "Protocol Droid";
	cost[13] = 10000;
	mods[13] = 0;
	armor[13] = 0;
	pers[13] = "True";

	type[14] = "Protocol, Advanced";
	cost[14] = 10000;
	mods[14] = 2;
	armor[14] = 1;
	pers[14] = "True";

	type[15] = "R2 Droid";
	cost[15] = 10000;
	mods[15] = 3;
	armor[15] = 1;
	pers[15] = "False";

	type[16] = "R2, Advanced";
	cost[16] = 10000;
	mods[16] = 5;
	armor[16] = 2;
	pers[16] = "False";

	type[17] = "R3 Droid";
	cost[17] = 12000;
	mods[17] = 3;
	armor[17] = 1;
	pers[17] = "False";

	type[18] = "R3, Advanced";
	cost[18] = 12000;
	mods[18] = 6;
	armor[18] = 2;
	pers[18] = "False";

	type[19] = "R4 Droid";
	cost[19] = 2500;
	mods[19] = 1;
	armor[19] = 0;
	pers[19] = "False";

	type[20] = "R4, Advanced";
	cost[20] = 7500;
	mods[20] = 3;
	armor[20] = 2;
	pers[20] = "False";

	type[21] = "R5 Droid";
	cost[21] = 1500;
	mods[21] = 1;
	armor[21] = 0;
	pers[21] = "False";

	type[22] = "R5, Advanced";
	cost[22] = 2500;
	mods[22] = 2;
	armor[22] = 1;
	pers[22] = "False";

	type[23] = "Seeker Droid (BH)";
	cost[23] = 1500;
	mods[23] = 0;
	armor[23] = 0;
	pers[23] = "False";

	type[24] = "Surgical Droid";
	cost[24] = 8000;
	mods[24] = 2;
	armor[24] = 0;
	pers[24] = "True";

	type[25] = "Surgical, Advanced";
	cost[25] = 10000;
	mods[25] = 3;
	armor[25] = 1;
	pers[25] = "True";

	type[26] = "Treadwell Droid";
	cost[26] = 1500;
	mods[26] = 1;
	armor[26] = 0;
	pers[26] = "False";

	type[27] = "Treadwell, Advanced";
	cost[27] = 2500;
	mods[27] = 2;
	armor[27] = 1;
	pers[27] = "True";


-->
</script> <form name="chassis" "/droids.php" method="post">
        <table border="1" width="100%" cellspacing="0" cellpadding="0" height="178" align="center">
          <tr class="tableheader"> 
            <td>Select Chassis Type</td>
            <td colspan="2" align="center">Technical Specifications</td>
          </tr>
          <tr> 
            <td width="200px" valign="top" align="center"> <select name="chassis_type" onChange="showimage(); calculate(this.selectedIndex);">
                <option value="13">Arakyd Probe Droid</option>
                <option value="21">Binary Load Lifter</option>
                <option value="24">Binary Load Lifter, Advanced</option>
                <option value="5">DZ70 Droid</option>
                <option value="8">DZ70, Advanced</option>
                <option value="17">LE Repair Droid</option>
                <option value="28">LE Repair, Advanced</option>
                <option value="1">Mouse</option>
                <option value="2">Mouse, advanced</option>
                <option value="11">Power Droid</option>
                <option value="12">Power Droid, Advanced</option>
                <option value="14">Probot</option>
                <option value="18">Probot, Advanced</option>
                <option value="20">Protocol Droid</option>
                <option value="23">Protocol, Advanced</option>
                <option value="15">R2 Droid</option>
                <option value="19">R2, Advanced</option>
                <option value="22">R3 Droid</option>
                <option value="25">R3, Advanced</option>
                <option value="10">R4 Droid</option>
                <option value="26">R4, Advanced</option>
                <option value="4">R5 Droid</option>
                <option value="7">R5, Advanced</option>
                <option value="3">Seeker Droid (BH)</option>
                <option value="16">Surgical Droid</option>
                <option value="27">Surgical, Advanced</option>
                <option value="6">Treadwell Droid</option>
                <option value="9">Treadwell, Advanced</option>
              </select> </td>
            <td width="250px" valign="middle" align="center"> <img name="pictures" src="pictures/13.jpg" border="1" height="250" width="250"> 
            </td>
            <td width="250px" valign="top"> 
              <!-- Real-time Price calculation block -->
              <table width="100%" cellpadding="2" cellspacing="0">
                <tr valign="bottom" class="tablerowodd"> 
                  <td width="60">Chassis<br>
                    Type:</td>
                  <td id="droidtype" align="right" valign="bottom"> Arakyd Probe 
                    Droid</td>
                </tr>
                <tr valign="bottom" class="tableroweven"> 
                  <td width="60">Cost:</td>
                  <td id="price" align="right"> 5000</td>
                </tr>
                <tr valign="bottom" class="tablerowodd"> 
                  <td width="60">Module<br>
                    Capacity: </td>
                  <td id="modspace" align="right" valign="bottom">0</td>
                </tr>
                <tr valign="bottom" class="tableroweven"> 
                  <td width="60">Armor<br>
                    Capacity:</td>
                  <td id="armorspace" align="right" valign="bottom"> 0</td>
                </tr>
                <tr valign="bottom" class="tablerowodd"> 
                  <td width="60">Personality<br>
                    Chip:</td>
                  <td id="persavail" align="right" valign="bottom"> False</td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td colspan="3" align="center"><input type="hidden" name="action" value="submitted" align="center"> 
              <input name="submit" type="submit" value="Customize" align="center"></td>
          </tr>
        </table>
      </form></td>
  </tr>
  <tr> 
    <td width="61" height="42" colspan="2"> <p align="center" class="smalltext">This 
        page designed for 1024x768 or better. All content &copy; Samadhi unless 
        otherwise noted.<br>
        Server time: November 21, 2003 &nbsp;&nbsp;&nbsp;11:04:08 AM</p></td>
  </tr>
</table>

</body>
</html>
