<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
   <title>RGB Hexadecimal to Decimal Converter</title>
</head>          
<body onload="showHex('000000')" vlink="#ffffff" text="#FFFFFF" link="#ffffff" bgcolor="#FFF32F">

<center>
   <table cellpadding="12" border="0"><tr align="center"><a href="index.php" link="#FFFFFF"  bgcolor="#000000"><font size="4" face="Verdana,Arial,Helvetica,sans-serif">Back To Main</font> </a> </tr>
      <tbody><tr>
         <td align="center"><font size="4" face="Verdana,Arial,Helvetica,sans-serif"></font>
            <form name="converter">
               <table width="400" cellspacing="0" cellpadding="0" border="0">
                  <tbody><tr>
                     <td bgcolor="#888888">
               <table width="400" cellspacing="1" cellpadding="6" border="0">
                  <tbody>
				
				  <tr>
                     <td width="33%" bgcolor="#000000" align="CENTER"><font face="Verdana,Arial,Helvetica,sans-serif"><u>
                        <b>RGB Channel</b></u></font></td>
                     <td width="33%" bgcolor="#000000" align="CENTER"><font face="Verdana,Arial,Helvetica,sans-serif"><u>
                        <b>Hexadecimal</b></u></font></td>
                     <td width="33%" bgcolor="#000000" align="CENTER"><font face="Verdana,Arial,Helvetica,sans-serif"><u>
                        <b>Decimal</b></u></font></td>
                  </tr>
                  <tr>
                     <td valign="TOP" nowrap="nowrap" bgcolor="#000000" align="CENTER"><b>
                        <input onclick="reduceVal('R')" value="  -  " type="button">
                        &nbsp;&nbsp;&nbsp;&nbsp; <font color="#FF0000" face="Arial,Helvetica,sans-serif">Red</font> 
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input onclick="increaseVal('R')" value=" + " type="button">
                        </b></td>
                     <td bgcolor="#000000" align="CENTER">
                        <input name="hexR" size="5" maxlength="2" value="FF" type="text">
                     </td>
                     <td bgcolor="#000000" align="CENTER">
                        <input name="decR" size="5" maxlength="3" value="255" type="text">
                     </td>
                  </tr>
                  <tr>
                     <td valign="TOP" nowrap="nowrap" bgcolor="#000000" align="CENTER"><b>
                        <input onclick="reduceVal('G')" value="  -  " type="button">
                        &nbsp;&nbsp; <font color="#00FF00" face="Arial,Helvetica,sans-serif">Green</font> 
                        &nbsp;&nbsp;
                        <input onclick="increaseVal('G')" value=" + " type="button">
                        </b></td>
                     <td bgcolor="#000000" align="CENTER">
                        <input name="hexG" size="5" maxlength="2" value="F3" type="text">
                     </td>
                     <td bgcolor="#000000" align="CENTER">
                        <input name="decG" size="5" maxlength="3" value="243" type="text">
                     </td>
                  </tr>
                  <tr>
                     <td valign="TOP" nowrap="nowrap" bgcolor="#000000" align="CENTER"><b>
                        <input onclick="reduceVal('B')" value="  -  " type="button">
                        &nbsp;&nbsp;&nbsp;&nbsp; <font color="#0000FF" face="Arial,Helvetica,sans-serif">Blue</font> 
                        &nbsp;&nbsp;&nbsp;
                        <input onclick="increaseVal('B')" value=" + " type="button">
                        </b></td>
                     <td bgcolor="#000000" align="CENTER">
                        <input name="hexB" size="5" maxlength="2" value="2F" type="text">
                     </td>
                     <td bgcolor="#000000" align="CENTER">
                        <input name="decB" size="5" maxlength="3" value="47" type="text">
                     </td>
                  </tr>
                  <tr>
                     <td valign="TOP" nowrap="nowrap" bgcolor="#000000" align="CENTER"><b>
                        <input onclick="reduceVal('R');reduceVal('G');reduceVal('B');" value="  -  " type="button">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color="#FFFFFF" face="Arial,Helvetica,sans-serif">All</font> 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input onclick="increaseVal('R');increaseVal('G');increaseVal('B');" value=" + " type="button">
                        </b></td>
                     <td bgcolor="#000000" align="CENTER">
                        <input value="  Display  " onclick="convert2Dec(document.converter.hexR.value,document.converter.hexG.value,document.converter.hexB.value,'')" type="button">
                     </td>
                     <td bgcolor="#000000" align="CENTER">
                        <input value="  Display  " onclick="convert2Hex(document.converter.decR.value,document.converter.decG.value,document.converter.decB.value,'')" type="button">
                     </td>
                  </tr>
                  <tr>
                     <td colspan="3" bgcolor="#000000" align="CENTER"><font size="1" face="Arial,Helvetica,sans-serif">Enter 
                     a hexadecimal (00 - FF) number in each of the hexadecimal boxes, or a decimal (0 - 
                     255) number in each of the decimal boxes, and click the respective <b>Convert</b> 
                     button to convert the values and display the color on the backdrop.</font></td>
					  
				
                  </tr>
                  <tr>
                     <td bgcolor="#000000" align="CENTER"><font color="#FFFFFF" face="Arial,Helvetica,sans-serif"><b>
                     Hex String:</b></font></td>
                     <td bgcolor="#000000" align="CENTER"><font size="4"><b># </b></font>
                        <input name="hexString" size="6" maxlength="6" value="FFF32F" type="text">
                     </td>
                     <td bgcolor="#000000" align="CENTER">
                        <input value="  Display   " onclick="showHex(document.converter.hexString.value)" type="button">
                     </td>
                  </tr>
                  <tr>
                     <td bgcolor="#000000" align="CENTER"><font color="#FFFFFF" face="Arial,Helvetica,sans-serif"><b>
                     Named Color:</b></font></td>
                     <td colspan="2" bgcolor="#000000" align="CENTER">
                     <select name="names" onchange="showHex(this.value)">
                     <option value="000000" selected="selected">
                     </option><option value="F0F8FF">aliceblue
                     </option><option value="FAEBD7">antiquewhite
                     </option><option value="00FFFF">aqua
                     </option><option value="7FFFD4">aquamarine
                     </option><option value="F0FFFF">azure
                     </option><option value="F5F5DC">beige
                     </option><option value="FFE4C4">bisque
                     </option><option value="000000">black
                     </option><option value="FFEBCD">blanched almond
                     </option><option value="0000FF">blue
                     </option><option value="8A2BE2">blueviolet
                     </option><option value="A52A2A">brown
                     </option><option value="DEB887">burlywood
                     </option><option value="5F9EA0">cadetblue
                     </option><option value="7FFF00">chartreuse
                     </option><option value="D2691E">chocolate
                     </option><option value="FF7F50">coral
                     </option><option value="6495ED">cornflowerblue
                     </option><option value="FFF8DC">cornsilk
                     </option><option value="DC143C">crimson
                     </option><option value="00008B">darkblue
                     </option><option value="008B8B">darkcyan
                     </option><option value="B8860B">darkgoldenrod
                     </option><option value="A9A9A9">darkgray
                     </option><option value="006400">darkgreen
                     </option><option value="BDB76B">darkkhaki
                     </option><option value="8B008B">darkmagenta
                     </option><option value="556B2F">darkolivegreen
                     </option><option value="FF8C00">darkorange
                     </option><option value="9932CC">darkorchid
                     </option><option value="8B0000">darkred
                     </option><option value="E9967A">darksalmon
                     </option><option value="8FBC8F">darkseagreen
                     </option><option value="483D8B">darkslateblue
                     </option><option value="2F4F4F">darkslategray
                     </option><option value="00CED1">darkturquoise
                     </option><option value="9400D3">darkviolet
                     </option><option value="FF1493">deeppink
                     </option><option value="00BFFF">deepskyblue
                     </option><option value="696969">dimgray
                     </option><option value="1E90FF">dodgerblue
                     </option><option value="B22222">firebrick
                     </option><option value="FFFAF0">floralwhite
                     </option><option value="228B22">forestgreen
                     </option><option value="FF00FF">fuchsia
                     </option><option value="DCDCDC">gainsboro
                     </option><option value="F8F8FF">ghostwhite
                     </option><option value="FFD700">gold
                     </option><option value="DAA520">goldenrod
                     </option><option value="FAFAD2">goldenrodyellow
                     </option><option value="808080">gray
                     </option><option value="008000">green
                     </option><option value="ADFF2F">greenyellow
                     </option><option value="F0FFF0">honeydew
                     </option><option value="FF69B4">hotpink
                     </option><option value="CD5C5C">indianred
                     </option><option value="4B0082">indigo
                     </option><option value="FFFFF0">ivory
                     </option><option value="F0E68C">khaki
                     </option><option value="E6E6FA">lavender
                     </option><option value="FFF0FF">lavenderblush
                     </option><option value="7CFC00">lawngreen
                     </option><option value="FFFACD">lemonchiffon
                     </option><option value="ADD8E6">lightblue
                     </option><option value="F08080">lightcoral
                     </option><option value="E0FFFF">lightcyan
                     </option><option value="90EE90">lightgreen
                     </option><option value="D3D3D3">lightgrey
                     </option><option value="FFB6C1">lightpink
                     </option><option value="FFA07A">lightsalmon
                     </option><option value="20B2AA">lightseagreen
                     </option><option value="87CEFA">lightskyblue
                     </option><option value="778899">lightslategrey
                     </option><option value="B0C4DE">lightsteelblue
                     </option><option value="FFFFE0">lightyellow
                     </option><option value="00FF00">lime
                     </option><option value="32CD32">limegreen
                     </option><option value="FAF0E6">linen
                     </option><option value="800000">maroon
                     </option><option value="66CDAA">medium aquamarine
                     </option><option value="3CB371">medium seagreen
                     </option><option value="7B68EE">medium slateblue
                     </option><option value="00FA9A">medium springgreen
                     </option><option value="48D1CC">medium turquoise
                     </option><option value="C71585">medium violetred
                     </option><option value="0000CD">mediumblue
                     </option><option value="BA55D3">mediumorchid
                     </option><option value="9370DB">mediumpurple
                     </option><option value="191970">midnightblue
                     </option><option value="F5FFFA">mintcream
                     </option><option value="FFE4E1">mistyrose
                     </option><option value="FFE4B5">moccasin
                     </option><option value="FFDEAD">navajowhite
                     </option><option value="000080">navy
                     </option><option value="FDF5E6">oldlace
                     </option><option value="808000">olive
                     </option><option value="6B8E23">olivedrab
                     </option><option value="FFA500">orange
                     </option><option value="FF4500">orangered
                     </option><option value="DA70D6">orchid
                     </option><option value="EEE8AA">palegoldenrod
                     </option><option value="98FB98">palegreen
                     </option><option value="AFEEEE">paleturquoise
                     </option><option value="DB7093">palevioletred
                     </option><option value="FFEFD5">papayawhip
                     </option><option value="FFDAB9">peachpuff
                     </option><option value="CD853F">peru
                     </option><option value="FFC0CB">pink
                     </option><option value="DDA0DD">plum
                     </option><option value="B0E0E6">powderblue
                     </option><option value="800080">purple
                     </option><option value="FF0000">red
                     </option><option value="BC8F8F">rosybrown
                     </option><option value="4169E1">royalblue
                     </option><option value="8B4513">saddlebrown
                     </option><option value="FA8072">salmon
                     </option><option value="F4A460">sandybrown
                     </option><option value="2E8B57">seagreen
                     </option><option value="FFF5EE">seashell
                     </option><option value="A0522D">sienna
                     </option><option value="C0C0C0">silver
                     </option><option value="87CEEB">skyblue
                     </option><option value="6A5ACD">slateblue
                     </option><option value="708090">slategray
                     </option><option value="FFFAFA">snow
                     </option><option value="00FF7F">springgreen
                     </option><option value="4682B4">steelblue
                     </option><option value="D2B48C">tan
                     </option><option value="008080">teal
                     </option><option value="FF6347">tomato
                     </option><option value="40E0D0">turquoise
                     </option><option value="EE82EE">violet
                     </option><option value="F5DEB3">wheat
                     </option><option value="D8BFD8">whistle
                     </option><option value="FFFFFF">white
                     </option><option value="F5F5F5">whitesmoke
                     </option><option value="FFFF00">yellow
                     </option><option value="9ACD32">yellowgreen
                     </option></select>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="3" bgcolor="#000000" align="CENTER"><font size="1" face="Arial,Helvetica,sans-serif">Enter 
                     a hexadecimal string (000000 - FFFFFF) in the box to display its color and 
                     decimal values.  Alternatively, click a color on the grid below to start:</font></td>
                  </tr>
                  <tr>
                     <td colspan="3" bgcolor="#000000" align="CENTER">
                     <a href="#"><img src="images/colorgrid.gif" alt="" usemap="#map_colorgrid" ismap="ismap" width="292" height="196" border="0"></a>
                     </td>
                  </tr>
               </tbody></table>
               </td>
            </tr>
         </tbody></table>
         </form></td>
      </tr>
   </tbody></table>
</center>

<map name="map_colorgrid">
   <!--- Row 1 --->
   <area coords="2,2,18,18" href="javascript:showHex('330000')">
   <area coords="18,2,34,18" href="javascript:showHex('333300')">
   <area coords="34,2,50,18" href="javascript:showHex('336600')">
   <area coords="50,2,66,18" href="javascript:showHex('339900')">
   <area coords="66,2,82,18" href="javascript:showHex('33CC00')">
   <area coords="82,2,98,18" href="javascript:showHex('33FF00')">
   <area coords="98,2,114,18" href="javascript:showHex('66FF00')">
   <area coords="114,2,130,18" href="javascript:showHex('66CC00')">
   <area coords="130,2,146,18" href="javascript:showHex('669900')">
   <area coords="146,2,162,18" href="javascript:showHex('666600')">
   <area coords="162,2,178,18" href="javascript:showHex('663300')">
   <area coords="178,2,194,18" href="javascript:showHex('660000')">
   <area coords="194,2,210,18" href="javascript:showHex('FF0000')">
   <area coords="210,2,226,18" href="javascript:showHex('FF3300')">
   <area coords="226,2,242,18" href="javascript:showHex('FF6600')">
   <area coords="242,2,258,18" href="javascript:showHex('FF9900')">
   <area coords="258,2,274,18" href="javascript:showHex('FFCC00')">
   <area coords="274,2,290,18" href="javascript:showHex('FFFF00')">
   <!--- Row 2 --->
   <area coords="2,18,18,34" href="javascript:showHex('330033')">
   <area coords="18,18,34,34" href="javascript:showHex('333333')">
   <area coords="34,18,50,34" href="javascript:showHex('336633')">
   <area coords="50,18,66,34" href="javascript:showHex('339933')">
   <area coords="66,18,82,34" href="javascript:showHex('33CC33')">
   <area coords="82,18,98,34" href="javascript:showHex('33FF33')">
   <area coords="98,18,114,34" href="javascript:showHex('66FF33')">
   <area coords="114,18,130,34" href="javascript:showHex('66CC33')">
   <area coords="130,18,146,34" href="javascript:showHex('669933')">
   <area coords="146,18,162,34" href="javascript:showHex('666633')">
   <area coords="162,18,178,34" href="javascript:showHex('663333')">
   <area coords="178,18,194,34" href="javascript:showHex('660033')">
   <area coords="194,18,210,34" href="javascript:showHex('FF0033')">
   <area coords="210,18,226,34" href="javascript:showHex('FF3333')">
   <area coords="226,18,242,34" href="javascript:showHex('FF6633')">
   <area coords="242,18,258,34" href="javascript:showHex('FF9933')">
   <area coords="258,18,274,34" href="javascript:showHex('FFCC33')">
   <area coords="274,18,290,34" href="javascript:showHex('FFFF33')">
   <!--- Row 3 --->
   <area coords="2,34,18,50" href="javascript:showHex('330066')">
   <area coords="18,34,34,50" href="javascript:showHex('333366')">
   <area coords="34,34,50,50" href="javascript:showHex('336666')">
   <area coords="50,34,66,50" href="javascript:showHex('339966')">
   <area coords="66,34,82,50" href="javascript:showHex('33CC66')">
   <area coords="82,34,98,50" href="javascript:showHex('33FF66')">
   <area coords="98,34,114,50" href="javascript:showHex('66FF66')">
   <area coords="114,34,130,50" href="javascript:showHex('66CC66')">
   <area coords="130,34,146,50" href="javascript:showHex('669966')">
   <area coords="146,34,162,50" href="javascript:showHex('666666')">
   <area coords="162,34,178,50" href="javascript:showHex('663366')">
   <area coords="178,34,194,50" href="javascript:showHex('660066')">
   <area coords="194,34,210,50" href="javascript:showHex('FF0066')">
   <area coords="210,34,226,50" href="javascript:showHex('FF3366')">
   <area coords="226,34,242,50" href="javascript:showHex('FF6666')">
   <area coords="242,34,258,50" href="javascript:showHex('FF9966')">
   <area coords="258,34,274,50" href="javascript:showHex('FFCC66')">
   <area coords="274,34,290,50" href="javascript:showHex('FFFF66')">
   <!--- Row 4 --->
   <area coords="2,50,18,66" href="javascript:showHex('330099')">
   <area coords="18,50,34,66" href="javascript:showHex('333399')">
   <area coords="34,50,50,66" href="javascript:showHex('336699')">
   <area coords="50,50,66,66" href="javascript:showHex('339999')">
   <area coords="66,50,82,66" href="javascript:showHex('33CC99')">
   <area coords="82,50,98,66" href="javascript:showHex('33FF99')">
   <area coords="98,50,114,66" href="javascript:showHex('66FF99')">
   <area coords="114,50,130,66" href="javascript:showHex('66CC99')">
   <area coords="130,50,146,66" href="javascript:showHex('669999')">
   <area coords="146,50,162,66" href="javascript:showHex('666699')">
   <area coords="162,50,178,66" href="javascript:showHex('663399')">
   <area coords="178,50,194,66" href="javascript:showHex('660099')">
   <area coords="194,50,210,66" href="javascript:showHex('FF0099')">
   <area coords="210,50,226,66" href="javascript:showHex('FF3399')">
   <area coords="226,50,242,66" href="javascript:showHex('FF6699')">
   <area coords="242,50,258,66" href="javascript:showHex('FF9999')">
   <area coords="258,50,274,66" href="javascript:showHex('FFCC99')">
   <area coords="274,50,290,66" href="javascript:showHex('FFFF99')">
   <!--- Row 5 --->
   <area coords="2,66,18,82" href="javascript:showHex('3300CC')">
   <area coords="18,66,34,82" href="javascript:showHex('3333CC')">
   <area coords="34,66,50,82" href="javascript:showHex('3366CC')">
   <area coords="50,66,66,82" href="javascript:showHex('3399CC')">
   <area coords="66,66,82,82" href="javascript:showHex('33CCCC')">
   <area coords="82,66,98,82" href="javascript:showHex('33FFCC')">
   <area coords="98,66,114,82" href="javascript:showHex('66FFCC')">
   <area coords="114,66,130,82" href="javascript:showHex('66CCCC')">
   <area coords="130,66,146,82" href="javascript:showHex('6699CC')">
   <area coords="146,66,162,82" href="javascript:showHex('6666CC')">
   <area coords="162,66,178,82" href="javascript:showHex('6633CC')">
   <area coords="178,66,194,82" href="javascript:showHex('6600CC')">
   <area coords="194,66,210,82" href="javascript:showHex('FF00CC')">
   <area coords="210,66,226,82" href="javascript:showHex('FF33CC')">
   <area coords="226,66,242,82" href="javascript:showHex('FF66CC')">
   <area coords="242,66,258,82" href="javascript:showHex('FF99CC')">
   <area coords="258,66,274,82" href="javascript:showHex('FFCCCC')">
   <area coords="274,66,290,82" href="javascript:showHex('FFFFCC')">
   <!--- Row 6 --->
   <area coords="2,82,18,98" href="javascript:showHex('3300FF')">
   <area coords="18,82,34,98" href="javascript:showHex('3333FF')">
   <area coords="34,82,50,98" href="javascript:showHex('3366FF')">
   <area coords="50,82,66,98" href="javascript:showHex('3399FF')">
   <area coords="66,82,82,98" href="javascript:showHex('33CCFF')">
   <area coords="82,82,98,98" href="javascript:showHex('33FFFF')">
   <area coords="98,82,114,98" href="javascript:showHex('66FFFF')">
   <area coords="114,82,130,98" href="javascript:showHex('66CCFF')">
   <area coords="130,82,146,98" href="javascript:showHex('6699FF')">
   <area coords="146,82,162,98" href="javascript:showHex('6666FF')">
   <area coords="162,82,178,98" href="javascript:showHex('6633FF')">
   <area coords="178,82,194,98" href="javascript:showHex('6600FF')">
   <area coords="194,82,210,98" href="javascript:showHex('FF00FF')">
   <area coords="210,82,226,98" href="javascript:showHex('FF33FF')">
   <area coords="226,82,242,98" href="javascript:showHex('FF66FF')">
   <area coords="242,82,258,98" href="javascript:showHex('FF99FF')">
   <area coords="258,82,274,98" href="javascript:showHex('FFCCFF')">
   <area coords="274,82,290,98" href="javascript:showHex('FFFFFF')">
   <!--- Row 7 --->
   <area coords="2,98,18,114" href="javascript:showHex('0000FF')">
   <area coords="18,98,34,114" href="javascript:showHex('0033FF')">
   <area coords="34,98,50,114" href="javascript:showHex('0066FF')">
   <area coords="50,98,66,114" href="javascript:showHex('0099FF')">
   <area coords="66,98,82,114" href="javascript:showHex('00CCFF')">
   <area coords="82,98,98,114" href="javascript:showHex('00FFFF')">
   <area coords="98,98,114,114" href="javascript:showHex('99FFFF')">
   <area coords="114,98,130,114" href="javascript:showHex('99CCFF')">
   <area coords="130,98,146,114" href="javascript:showHex('9999FF')">
   <area coords="146,98,162,114" href="javascript:showHex('9966FF')">
   <area coords="162,98,178,114" href="javascript:showHex('9933FF')">
   <area coords="178,98,194,114" href="javascript:showHex('9900FF')">
   <area coords="194,98,210,114" href="javascript:showHex('CC00FF')">
   <area coords="210,98,226,114" href="javascript:showHex('CC33FF')">
   <area coords="226,98,242,114" href="javascript:showHex('CC66FF')">
   <area coords="242,98,258,114" href="javascript:showHex('CC99FF')">
   <area coords="258,98,274,114" href="javascript:showHex('CCCCFF')">
   <area coords="274,98,290,114" href="javascript:showHex('CCFFFF')">
   <!--- Row 8 --->
   <area coords="2,114,18,130" href="javascript:showHex('0000CC')">
   <area coords="18,114,34,130" href="javascript:showHex('0033CC')">
   <area coords="34,114,50,130" href="javascript:showHex('0066CC')">
   <area coords="50,114,66,130" href="javascript:showHex('0099CC')">
   <area coords="66,114,82,130" href="javascript:showHex('00CCCC')">
   <area coords="82,114,98,130" href="javascript:showHex('00FFCC')">
   <area coords="98,114,114,130" href="javascript:showHex('99FFCC')">
   <area coords="114,114,130,130" href="javascript:showHex('99CCCC')">
   <area coords="130,114,146,130" href="javascript:showHex('9999CC')">
   <area coords="146,114,162,130" href="javascript:showHex('9966CC')">
   <area coords="162,114,178,130" href="javascript:showHex('9933CC')">
   <area coords="178,114,194,130" href="javascript:showHex('9900CC')">
   <area coords="194,114,210,130" href="javascript:showHex('CC00CC')">
   <area coords="210,114,226,130" href="javascript:showHex('CC33CC')">
   <area coords="226,114,242,130" href="javascript:showHex('CC66CC')">
   <area coords="242,114,258,130" href="javascript:showHex('CC99CC')">
   <area coords="258,114,274,130" href="javascript:showHex('CCCCCC')">
   <area coords="274,114,290,130" href="javascript:showHex('CCFFCC')">
   <!--- Row 9 --->
   <area coords="2,130,18,146" href="javascript:showHex('000099')">
   <area coords="18,130,34,146" href="javascript:showHex('003399')">
   <area coords="34,130,50,146" href="javascript:showHex('006699')">
   <area coords="50,130,66,146" href="javascript:showHex('009999')">
   <area coords="66,130,82,146" href="javascript:showHex('00CC99')">
   <area coords="82,130,98,146" href="javascript:showHex('00FF99')">
   <area coords="98,130,114,146" href="javascript:showHex('99FF99')">
   <area coords="114,130,130,146" href="javascript:showHex('99CC99')">
   <area coords="130,130,146,146" href="javascript:showHex('999999')">
   <area coords="146,130,162,146" href="javascript:showHex('996699')">
   <area coords="162,130,178,146" href="javascript:showHex('993399')">
   <area coords="178,130,194,146" href="javascript:showHex('990099')">
   <area coords="194,130,210,146" href="javascript:showHex('CC0099')">
   <area coords="210,130,226,146" href="javascript:showHex('CC3399')">
   <area coords="226,130,242,146" href="javascript:showHex('CC6699')">
   <area coords="242,130,258,146" href="javascript:showHex('CC9999')">
   <area coords="258,130,274,146" href="javascript:showHex('CCCC99')">
   <area coords="274,130,290,146" href="javascript:showHex('CCFF99')">
   <!--- Row 10 --->
   <area coords="2,146,18,162" href="javascript:showHex('000066')">
   <area coords="18,146,34,162" href="javascript:showHex('003366')">
   <area coords="34,146,50,162" href="javascript:showHex('006666')">
   <area coords="50,146,66,162" href="javascript:showHex('009966')">
   <area coords="66,146,82,162" href="javascript:showHex('00CC66')">
   <area coords="82,146,98,162" href="javascript:showHex('00FF66')">
   <area coords="98,146,114,162" href="javascript:showHex('99FF66')">
   <area coords="114,146,130,162" href="javascript:showHex('99CC66')">
   <area coords="130,146,146,162" href="javascript:showHex('999966')">
   <area coords="146,146,162,162" href="javascript:showHex('996666')">
   <area coords="162,146,178,162" href="javascript:showHex('993366')">
   <area coords="178,146,194,162" href="javascript:showHex('990066')">
   <area coords="194,146,210,162" href="javascript:showHex('CC0066')">
   <area coords="210,146,226,162" href="javascript:showHex('CC3366')">
   <area coords="226,146,242,162" href="javascript:showHex('CC6666')">
   <area coords="242,146,258,162" href="javascript:showHex('CC9966')">
   <area coords="258,146,274,162" href="javascript:showHex('CCCC66')">
   <area coords="274,146,290,162" href="javascript:showHex('CCFF66')">
   <!--- Row 11 --->
   <area coords="2,162,18,178" href="javascript:showHex('000033')">
   <area coords="18,162,34,178" href="javascript:showHex('003333')">
   <area coords="34,162,50,178" href="javascript:showHex('006633')">
   <area coords="50,162,66,178" href="javascript:showHex('009933')">
   <area coords="66,162,82,178" href="javascript:showHex('00CC33')">
   <area coords="82,162,98,178" href="javascript:showHex('00FF33')">
   <area coords="98,162,114,178" href="javascript:showHex('99FF33')">
   <area coords="114,162,130,178" href="javascript:showHex('99CC33')">
   <area coords="130,162,146,178" href="javascript:showHex('999933')">
   <area coords="146,162,162,178" href="javascript:showHex('996633')">
   <area coords="162,162,178,178" href="javascript:showHex('993333')">
   <area coords="178,162,194,178" href="javascript:showHex('990033')">
   <area coords="194,162,210,178" href="javascript:showHex('CC0033')">
   <area coords="210,162,226,178" href="javascript:showHex('CC3333')">
   <area coords="226,162,242,178" href="javascript:showHex('CC6633')">
   <area coords="242,162,258,178" href="javascript:showHex('CC9933')">
   <area coords="258,162,274,178" href="javascript:showHex('CCCC33')">
   <area coords="274,162,290,178" href="javascript:showHex('CCFF33')">
   <!--- Row 12 --->
   <area coords="2,178,18,194" href="javascript:showHex('000000')">
   <area coords="18,178,34,194" href="javascript:showHex('003300')">
   <area coords="34,178,50,194" href="javascript:showHex('006600')">
   <area coords="50,178,66,194" href="javascript:showHex('009900')">
   <area coords="66,178,82,194" href="javascript:showHex('00CC00')">
   <area coords="82,178,98,194" href="javascript:showHex('00FF00')">
   <area coords="98,178,114,194" href="javascript:showHex('99FF00')">
   <area coords="114,178,130,194" href="javascript:showHex('99CC00')">
   <area coords="130,178,146,194" href="javascript:showHex('999900')">
   <area coords="146,178,162,194" href="javascript:showHex('996600')">
   <area coords="162,178,178,194" href="javascript:showHex('993300')">
   <area coords="178,178,194,194" href="javascript:showHex('990000')">
   <area coords="194,178,210,194" href="javascript:showHex('CC0000')">
   <area coords="210,178,226,194" href="javascript:showHex('CC3300')">
   <area coords="226,178,242,194" href="javascript:showHex('CC6600')">
   <area coords="242,178,258,194" href="javascript:showHex('CC9900')">
   <area coords="258,178,274,194" href="javascript:showHex('CCCC00')">
   <area coords="274,178,290,194" href="javascript:showHex('CCFF00')">
</map>



<script language="JavaScript">
<!--
function convert2Dec(numR,numG,numB,doneString) {      
   if ( (!numR || !numG || !numB ) && (!doneString) ) {
      alert("Please enter values in all boxes...");
      return false;
   }
   numR = numR.toUpperCase();
   numG = numG.toUpperCase();
   numB = numB.toUpperCase();
   decRval = hex2dec(numR)
   decGval = hex2dec(numG);
   decBval = hex2dec(numB);
   if ( (decRval == "BAD") || (decGval == "BAD") || (decBval == "BAD") ) {
      return false;
   }
   else {
      document.converter.decR.value = decRval;
      document.converter.decG.value = decGval;
      document.converter.decB.value = decBval;
      document.converter.hexR.value = numR;
      document.converter.hexG.value = numG;
      document.converter.hexB.value = numB;
      //document.converter.dec.value = parseInt(hexNum,16);
      hexStringOut =  "" + numR + numG + numB;
      hexStringOut.toUpperCase();
      document.bgColor = "#" + hexStringOut;
      document.converter.hexString.value = hexStringOut;  
   }
   convert2Hex(decRval,decGval,decBval,"DONE");
   //return true;
   if (document.converter.names.value != document.converter.hexString.value) {
      document.converter.names.selectedIndex = 0;
   }

}
function hex2dec(theHex) {
   if ( (theHex.charAt(0) > "F") || (theHex.charAt(1) > "F") ) {
      alert("Hexadecimal (00-FF) only, please...");
      return "BAD";
   }
   var retDec  = parseInt(theHex,16);
   return retDec;
}
function fixHex(theDec) { 
   var hNum = new Array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F");
   var retHex = hNum[theDec];
   return retHex;
}
function dec2hex(theDec) {
   for (var k=0;k<theDec.length;k++) {
      var thisChar = theDec.charAt(k);
      if ( (thisChar < "0") || (thisChar > "9") ) {
         alert("Decimal (0-255) only, please...");
         return "BAD";
      }
   }
   var leftNum;
   var rightNum;
   var leftNumS;
   var rightNumS;
   var retNum;
   if (theDec > 255) {
      alert("Not over 255, please...");
      return "BAD";
   }
   else {
      leftNum = Math.floor(theDec / 16);
      leftNumS = fixHex(leftNum);
      rightNum = theDec%16;
      rightNumS = fixHex(rightNum);
      retNum = leftNumS + rightNumS;
   }
   return retNum;
}
function convert2Hex(numR,numG,numB,doneString) {      
   if ( (!numR || !numG || !numB ) && (!doneString) ) {
      alert("Please enter values in all boxes...");
      return false;
   }
   hexRval = dec2hex(numR);
   hexGval = dec2hex(numG);
   hexBval = dec2hex(numB);
   if ( (hexRval == "BAD") || (hexGval == "BAD") || (hexBval == "BAD") ) {
      return false;
   }
   else {
      document.converter.hexR.value = dec2hex(numR);
      document.converter.hexG.value = dec2hex(numG);
      document.converter.hexB.value = dec2hex(numB);
      hexStringOut =  "" + hexRval + hexGval + hexBval;
      hexStringOut = hexStringOut.toUpperCase();
      document.bgColor = "#" + hexStringOut;
      document.converter.hexString.value = hexStringOut;  
   }
   //return true;
}
function showHex(hexStringIn) {
   if (hexStringIn.length != 6) {
      alert ('Enter a six character hexadecimal string only, please!');
      return false;
   }

   hexRval = "" + hexStringIn.charAt(0) + hexStringIn.charAt(1);
   hexGval = "" + hexStringIn.charAt(2) + hexStringIn.charAt(3);
   hexBval = "" + hexStringIn.charAt(4) + hexStringIn.charAt(5);
   
   convert2Dec(hexRval,hexGval,hexBval,"DONE");
   convert2Hex(decRval,decGval,decBval,"DONE");
   //document.converter.hexR.value = hexRval;
   //document.converter.hexG.value = hexGval;
   //document.converter.hexB.value = hexBval;
   //return true;
}
function reduceVal(theType) {
   decRval = document.converter.decR.value;
   decGval = document.converter.decG.value;
   decBval = document.converter.decB.value;
   eval ("newNum = dec" + theType + "val - 8");
   if (newNum < 0) {
      newNum = 0;
   }
   eval ("dec" + theType + "val = newNum");
   document.converter.decR.value = decRval;
   document.converter.decG.value = decGval;
   document.converter.decB.value = decBval;
   convert2Hex(decRval,decGval,decBval,"DONE");
   convert2Dec(hexRval,hexGval,hexBval,"DONE");
}
function increaseVal(theType) {
   decRval = document.converter.decR.value;
   decGval = document.converter.decG.value;
   decBval = document.converter.decB.value;
   eval ("newNum = dec" + theType + "val - -8");
   if (newNum > 255) {
      newNum = 255;
   }
   eval ("dec" + theType + "val = newNum");
   document.converter.decR.value = decRval;
   document.converter.decG.value = decGval;
   document.converter.decB.value = decBval;
   convert2Hex(decRval,decGval,decBval,"DONE");
   convert2Dec(hexRval,hexGval,hexBval,"DONE");
}

// -->
</script>
</body></html>