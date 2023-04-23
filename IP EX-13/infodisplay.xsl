<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<head>
<style>
table,th,td{
border:2px solid black;
border-collapse:collapse;
}
th{
background-color:darkseagreen;
}
h1 {
  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
</style>
</head>
<body style="background-color:black;color:white;">
    <center>
  <h1 style="padding:20px;">Student Details</h1>
  <h3>Grades scored by Students in IP</h3>
  <table cellpadding="20px" border="1">
    <tr>
      <th>Rollno</th>
      <th>Student Name</th>
      <th>Grade</th>
    </tr>
    <xsl:for-each select="students/student">
    <tr>
        <xsl:choose>
      <xsl:when test="grade= 'A' ">
      <td bgcolor="lawngreen"><xsl:value-of select="rollno"/></td>
      <td bgcolor="lawngreen"><xsl:value-of select="name"/></td>
      <td bgcolor="lawngreen">
         <xsl:value-of select="grade"/></td>
      </xsl:when>
      <xsl:otherwise>
         <td><xsl:value-of select="rollno"/></td>
         <td><xsl:value-of select="name"/></td>
                <td >
         <xsl:value-of select="grade"/>
         </td>
      </xsl:otherwise>
       </xsl:choose>
   </tr>
    </xsl:for-each>
  </table>
  </center>
</body>
</html>
</xsl:template>
</xsl:stylesheet>ss